<?php
namespace center\Controller;
use Think\Controller;
import('ORG.Yibu.Sms');
class AlarmController extends Controller {
    public function Low_Humi_alarm($username ,$chip_id ,$humi){
		$chip_alarm_model = M('alarm');
		$chip_alarm_set = $chip_alarm_model->where("username = \"$username\"")->select();
		
		
		if($chip_alarm_set[0]['hum_alarm'] == 1)
		{
			$demo = new  \Think\Sms(
				"LTAIjE2nLRwjQ5ys",
				"Nm0p9ISDvjMm7dezOJ6oyZStb7MIdc"
			);
			
			$response = $demo->sendSms(
				"植物wifi监控器", // 短信签名
				"SMS_88975010", // 短信模板编号
				$chip_alarm_set[0]['call'], // 短信接收者
				Array(  // 短信模板中字段的值
					"name"=>$username,
					"chip_id"=>$chip_id,
					"humi"=>$humi
				),
				"123"
			);
		}
    }
}