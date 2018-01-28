<?php
namespace center\Controller;
use Think\Controller;
import('ORG.Util.Stringnew');
class IndexController extends Controller {
    public function center(){
        $username = $_SESSION[user][username];
        $chipSet = M('chip_set');
        $bindInfo = $chipSet->where("username = \"$username\" ")->select();
        
        $now_time = time();
        $connect = 0;
        $yellow_connect = 0;
        $red_connect = 0;
        $all = 0;
        foreach ($bindInfo as $chip)
        {
            if($chip['last_connect_time']=="")
                $red_connect+=1;
            else
            {
                $temp = $now_time - $chip['last_connect_time'] ;
                if($temp < 3600*2)
                    $connect +=1;
                else if($temp >= 3600*2 && $temp < 3600*24)
                    $yellow_connect += 1;
                else if($temp >=  3600*24)
                    $red_connect += 1;
            }
            $all+=1;
        }
        
        $this->bindInfo = $bindInfo;
        $this->assign('chip_id',$bindInfo[0]['chip_id']);
        
        $this->assign('connect',$connect);
        $this->assign('yellow_connect',$yellow_connect);
        $this->assign('red_connect',$red_connect);
        $this->assign('all',$all);
        
        $this->display();
    }
    public function autoWater(){
        $username = $_SESSION[user][username];
        $chipSet = M('chip_set');
        $bindInfo = $chipSet->where("username = \"$username\" ")->select();
        $this->bindInfo = $bindInfo;
        $this->display();
    }
    public function bindChip(){
        $username = $_SESSION[user][username];
        $chipSet = M('chip_set');
        $bindInfo = $chipSet->where("username = \"$username\" ")->select();
        $this->bindInfo = $bindInfo;
        $this->display();
    }
    public function alarm(){
        $username = $_SESSION[user][username];
        $alarmSet = M('alarm');
        $alarm = $alarmSet->where("username = \"$username\" ")->select();
        $this->assign('alarm',$alarm[0]);
        $this->display();
    }
    public function allData(){
        $username = $_SESSION[user][username];
        $chipSet = M('chip_set');
        $bindInfo = $chipSet->where("username = \"$username\" ")->select();
        $this->bindInfo = $bindInfo;
        $this->assign('chip_id',$bindInfo[0]['chip_id']);
        $this->display();
    }    
    public function undergoing(){
        $this->error('十分抱歉，该功能正在开发测试。');
    }
    
    function _initialize() {
        if($_SESSION[isuser]!=1)
        {
            $this->error('请登录后访问',"http://".$_SERVER['HTTP_HOST'].substr($_SERVER['SCRIPT_NAME'],0,strlen($_SERVER['SCRIPT_NAME'])-10)."index.php/index/login");
        }
    }
    
    public function uuid(){
        import('ORG.Util.String');
        $st = new  \Org\Util\String();
        $uuid = $st->uuid();
        echo substr($uuid,1,strlen($uuid)-2);
    }

    public function doBindChip(){
        $chipTemp = M('chip_temp');
        if($chipTemp->where("chip_id = \"$_GET[chip_id]\" and password = \"$_GET[password]\" ")->count()==1)
        {
            $newChipSet['chip_id'] = $_GET[chip_id];
            $newChipSet['password'] = $_GET[password];
            $newChipSet['username'] = $_SESSION[user][username];
            $newChipSet['bind_time'] = date('Y-m-d H:i:s');
            $newChipSet['last_connect_time'] = "";
            $newChipSet['last_water_time'] = "";
            $newChipSet['water_frequency'] = "";
            $newChipSet['water_time'] = "";
            $newChipSet['water_way'] = "";
            $newChipSet['hum_limit'] = "";
            $newChipSet['state'] = "";
            $newChipSet['log'] = "";
            
            $chipSet = M('chip_set');
            $has_bind = $chipSet->where("chip_id=\"$_GET[chip_id]\" ")->select();
            if($has_bind[0]['chip_id'])
            {
                if($has_bind[0]['username']!=$_SESSION[user][username])
                {
                    $this->error('该芯片id已被别人绑定了，请更换芯片id。只有拥有者有重新绑定权限。');
                }
                else{
                    $chipSet->where("chip_id=\"$_GET[chip_id]\" ")->delete();
                }
            }
            if(  $chipSet->add($newChipSet) )
            {
                $chipTemp->where("chip_id = \"$_GET[chip_id]\" ")->delete();
                $this->error('绑定成功');
            }
            {
                $this->error('绑定失败');
            }
        }
        else
        {
            $this->error('芯片未能正确连接');
        }
    }
}