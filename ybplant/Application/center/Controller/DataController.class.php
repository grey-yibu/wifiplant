<?php
namespace center\Controller;
use Think\Controller;
class DataController extends Controller {
    public function return_data(){
        $chip_id = $_GET[chip_id];
        if ((!$_GET[start_time]) or (!$_GET[end_time]))
        {
            $start_time =strtotime( date("Y-m-d H:i:s",time()-60*60*24*7));//7天以前开始
            $end_time = strtotime( date("Y-m-d H:i:s"));
        }
        else
        {
            $start_time =strtotime($_GET[start_time] );//7天以前开始
            $end_time = strtotime($_GET[end_time] );
        }
        $chipData = M('chip_data');
        $data = $chipData->where("chip_id = \"$chip_id\" and unix_timestamp(time)>$start_time and unix_timestamp(time)<$end_time ")->select();
        
        $a1 = array();
        $a2 = array();
        $a3 = array();
        $a4 = array();
        foreach ($data as $zu)
        {
            array_push($a1,$zu['temp']);
            array_push($a2,$zu['hum']);
            array_push($a3,$zu['hum_oil']);
            array_push($a4,$zu['time']);
        }
        $json = array('temp'=>$a1,'hum'=>$a2,'time'=>$a4,'hum_oil'=>$a3);
        echo json_encode($json); 
    }
    
    public function return_last_time(){
        $chip_id = $_GET[chip_id];
        $chipData = M('chip_set');
        $data = $chipData->where("chip_id = \"$chip_id\" ")->select();
        
        if($data[0]['last_connect_time']=="")
            $a=0;
        else
            $a=date("Y-m-d H:i:s",$data[0]['last_connect_time']);
        if($data[0]['last_water_time']=="")
            $b=0;
        else
            $b=date("Y-m-d H:i:s",$data[0]['last_water_time']);
        
        $json = array('last_connect'=>$a,'last_water'=>$b);
        echo json_encode($json); 
    }
	
	public function delete_chip()
    {
        $chip_set = M('chip_set');
        $chip_set->where("chip_id = \"$_GET[chip_id]\" ")->delete();
        
        $chip_temp = M('chip_temp');
        $chip_temp->where("chip_id = \"$_GET[chip_id]\" ")->delete();
        
        $chip_data = M('chip_data');
        $chip_data->where("chip_id = \"$_GET[chip_id]\" ")->delete();
        
        $this->success('芯片绑定删除成功');
    }
}