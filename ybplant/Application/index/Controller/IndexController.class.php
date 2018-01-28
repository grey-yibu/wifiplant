<?php
namespace index\Controller;
use Think\Controller;
import('ORG.Yibu.Sms');
class IndexController extends Controller {
    public function index(){
       $this->display();
    }
    public function login(){
       $this->display();
    }
    public function regis(){
       $this->display();
    }
    
        
    public function verify_c(){  
        $Verify = new \Think\Verify();  
        $Verify->fontSize = 18;  
        $Verify->length   = 4;  
        $Verify->useNoise = false;  
        $Verify->codeSet = '0123456789';  
        $Verify->imageW = 130;  
        $Verify->imageH = 50;  
        //$Verify->expire = 600;  
        $Verify->entry();  
    }  
    
    public function doRegister(){
        if(!check_verify($_POST[yanzhengma])){  
            $this->error("亲，验证码输错了哦！");  
        } 
        if(!$_POST[username] || !$_POST[password]){  
            $this->error("用户名或密码为空，注册失败");  
        } 
        
        $userModel=M('user');
        if($userModel->where("username = \"$_POST[username]\"")->count()>=1)
        {
            $this->error('注册失败,用户名已存在','regis');
        }
        if($userModel->create())
        {
            if(  $userModel->add() )
            {
                $alarmModel=M('alarm');
                $new_alarm["username"]=$_POST[username];
                $new_alarm["call"]="";
                $new_alarm["email"]="";
                $new_alarm["temp_alarm"]=1;
                $new_alarm["hum_alarm"]=1;
                $new_alarm["feedback_alarm"]=1;
                $new_alarm["week_report"]=1;
                $new_alarm["month_report"]=1;

                if(  $alarmModel->add($new_alarm) )
                {
                    $this->success('注册成功','login');
                }
                else
                {
                    $this->error('注册失败','regis');
                }
            }
            else
            {
                $this->error('注册失败','regis');
            }

        }
        else
        {
             $this->error($userModel->getError());
        }
    }

    
    public function doLogin(){
        if(!check_verify($_POST[yanzhengma])){  
            $this->error("亲，验证码输错了哦！");  
        } 
        if(!$_POST[username] || !$_POST[password]){  
            $this->error("用户名或密码为空，登录失败");  
        } 
        
		$condition=array(
			'username'=>$_POST[username],
			'password'=>$_POST[password]
        );

        $userModel=M('user');
		$user=$userModel->where($condition)->find();
        
        if($user)
		{
			//是合法的用户
			session('user',$user);
			session('isuser',1);
			if($a == "admin")
			{
				session('isadmin',1);
			}
			else{
				session('isadmin',0);
			}
			$this->success('登录成功',/*'index'*/"http://".$_SERVER['HTTP_HOST'].substr($_SERVER['SCRIPT_NAME'],0,strlen($_SERVER['SCRIPT_NAME'])-10)."/center.php/index/center");
		}
		else
		{
			$this->error('用户名或密码错误！');
		}
        
    }
    
    public function logout()
	{
		session('user',null);
		session('isuser',0);
		session('isadmin',0);
		$this->success('注销成功','index');
	}
    
    public function message()
	{
        if(!$_GET[chip_id] || !$_GET[password]){  
            return;
        } 
        $return_json =  array('state'=>'0',     //state状态标识符，0为未绑定，1为绑定
                              'water'=>'0',     //water浇水标识，0为不浇水，1为浇水
                            );
      
        $chipSet = M('chip_set');
        $chipResult = $chipSet->where("chip_id = \"$_GET[chip_id]\" and password = \"$_GET[password]\" ")->select();
        if( !$chipResult[0]['chip_id'] )        //未绑定芯片
        {
            $chipTemp = M('chip_temp');
            $has_store = $chipTemp->where("chip_id = \"$_GET[chip_id]\" and password = \"$_GET[password]\" ")->select();
            if(!$has_store[0]['chip_id'])       //数据库未有
            {
                $newChip['chip_id'] = $_GET[chip_id];
                $newChip['password'] = $_GET[password];
                $newChip['time'] = date('Y-m-d H:i:s');
                $chipTemp->add($newChip);
            }
            $return_json['state'] = "0";
            echo json_encode($return_json);
        }
        else                                    //已绑定芯片
        {   
            $chipData = M('chip_data');
            $newData['chip_id'] = $_GET[chip_id];
            $newData['temp'] = $_GET[temp];
            $newData['hum'] = $_GET[hum];
            $newData['hum_oil'] = $_GET[hum_oil];
            $newData['time'] = date('Y-m-d H:i:s');
            $chipData->add($newData);
            
            $lastConnect['last_connect_time'] = time();
            
            
            $return_json['state'] = "1";
            date_default_timezone_set('Asia/Shanghai');
            $now_time = date("H");
            $t = strtotime($chipResult[0]['water_time']);
            $h = date('H',$t);
            if($now_time == $h)
            {
                $return_json['water'] = "1";
                echo json_encode($return_json);
                $lastConnect['last_water_time'] = time();
            }
            else
            {
                $return_json['water'] = "0";
                echo json_encode($return_json);
            }
            
            $chipSet->where("chip_id = \"$_GET[chip_id]\" and password = \"$_GET[password]\" ")->save($lastConnect);
        }
	}
	
	public function message_post()
	{
		$pre_hour = 60;							//规定每小时压缩量为12次数据，即5分钟一次
		$alarm_humi_flag = 1000;                   //土壤湿度报警标识
		
		if(!$_GET[chip_id] || !$_GET[chip_pwd]){  
            return;
        } 
		$return_json =  array('state'=>'0',     //state状态标识符，0为未绑定，1为绑定
					  'water'=>'0',     		//water浇水标识，0为不浇水，1为浇水
					  'water_amount'=>'10'		//water_time浇水时间表示，数字代表浇水秒数
					);
		
		$chipSet = M('chip_set');
        $chipResult = $chipSet->where("chip_id = \"$_GET[chip_id]\" and password = \"$_GET[chip_pwd]\" ")->select();
		if( !$chipResult[0]['chip_id'] )        //未绑定芯片
        {
            $chipTemp = M('chip_temp');
            $has_store = $chipTemp->where("chip_id = \"$_GET[chip_id]\" and password = \"$_GET[chip_pwd]\" ")->select();
            if(!$has_store[0]['chip_id'])       //数据库未有
            {
                $newChip['chip_id'] = $_GET[chip_id];
                $newChip['password'] = $_GET[chip_pwd];
                $newChip['time'] = date('Y-m-d H:i:s');
                $chipTemp->add($newChip);
            }
            $return_json['state'] = "0";
            echo json_encode($return_json);
        }
		else                                    //已绑定芯片
        {   
			$zu = json_decode($_GET[data]);
			$num = count($zu);
			$return_json['water_amount'] = $chipResult[0]['water_amount'];     //设置芯片抽水量
			
			
			for ($i=0; $i<$num; $i++) {
				$chipData = M('chip_data');
				$newData['chip_id'] = $_GET[chip_id];
				$newData['temp'] = $zu[$i]->t;
				$newData['hum_oil'] = $zu[$i]->h_d;
				$newData['hum'] = $zu[$i]->h_o;
				$newData['time'] = date('Y-m-d H:i:s',time()-($num-$i-1)*($pre_hour/$num)*60);
				$chipData->add($newData);
				
				if($newData['hum'] < $chipResult[0]['hum_limit'])
				{
					if($newData['hum'] < $alarm_humi_flag)
					{
						$alarm_humi_flag = $newData['hum'];
					}
				}
			}
				$lastConnect['last_connect_time'] = time();
			
			
			$return_json['state'] = "1";
			date_default_timezone_set('Asia/Shanghai');
			$now_time = date("H");
			$t = strtotime($chipResult[0]['water_time']);
			$h = date('H',$t);
			if($now_time == $h)
			{
				$return_json['water'] = "1";
				echo json_encode($return_json);
				$lastConnect['last_water_time'] = time();
			}
			else
			{
				$return_json['water'] = "0";
				echo json_encode($return_json);
			}
			
			$chipSet->where("chip_id = \"$_GET[chip_id]\" and password = \"$_GET[chip_pwd]\" ")->save($lastConnect);
            
			if($alarm_humi_flag != 1000)
			{
				$alarm = A("center/Alarm");
				$alarm->Low_Humi_alarm($chipResult[0]['username'],chip_id,humi);
			}
        }
	
	/* 	
		echo "abc";
		$zu = json_decode($_GET[data]);
		echo $zu[1]->t; */
	}

	public function sms()
	{
		$alarm = A("center/Alarm");
		echo $alarm->Low_Humi_alarm("yibu","1",5);
		

	}
	
}