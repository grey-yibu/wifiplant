<?php
namespace center\Controller;
use Think\Controller;
import('ORG.Yibu.Sms');
class UserController extends Controller {
    public function alarm_set_save(){
        $username = $_SESSION[user][username];
        if($_POST['temp_alarm']=="on")
            $alarmSet['temp_alarm'] = 1; 
        else
            $alarmSet['temp_alarm'] = 0; 
        if($_POST['hum_alarm']=="on")
            $alarmSet['hum_alarm'] = 1;   
        else
            $alarmSet['hum_alarm'] = 0;         
        if($_POST['feedback_alarm']=="on")
            $alarmSet['feedback_alarm'] = 1;     
         else
            $alarmSet['feedback_alarm'] = 0; 
        if($_POST['week_report']=="on")
            $alarmSet['week_report'] = 1;
        else
            $alarmSet['week_report'] = 0;         
        if($_POST['month_report']=="on")
            $alarmSet['month_report'] = 1;
        else
            $alarmSet['month_report'] = 0;         
        $alarm = M('alarm');
        if($alarm->where("username = \"$username\" ")->save($alarmSet))
            $this->success('报警设置修改成功');
        else
            $this->error('报警设置修改失败,请检查是否与原数据相同');
    }
    public function alarm_way_save(){
        $username = $_SESSION[user][username];
		$userPhone = $_POST['call'];
		
        $alarm = M('alarm');
        if($alarm->where("username = \"$username\" ")->save($_POST))
        {	
            $this->success('报警途径修改成功');
        }
        else
            $this->error('报警途径修改失败,请检查是否与原数据相同');
    }
	
    public function check_phone(){
	
		$userPhone = $_GET['call'];
		
		$demo = new  \Think\Sms(
			"LTAIjE2nLRwjQ5ys",
			"Nm0p9ISDvjMm7dezOJ6oyZStb7MIdc"
		);
		$response = $demo->sendSms(
			"植物wifi监控器", // 短信签名
			"SMS_96835060", // 短信模板编号
			$userPhone, // 短信接收者
			Array(  // 短信模板中字段的值
				"name"=>"yibu",
				"call_number"=>$userPhone
			),
			"123"
		);
		return 0;
	}
	
    public function water_set_change(){
        $chip_set = M('chip_set');
        if($chip_set->where("chip_id = \"$_GET[chip_id]\" ")->save($_GET))
            $this->success('浇水设置修改成功');
        else
            $this->error('浇水设置修改失败,请检查是否与原数据相同');
    }
}