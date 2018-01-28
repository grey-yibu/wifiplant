<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
 
        
<!--         <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>

        <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.js"></script>
        <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
        
        <script src="https://cdn.bootcss.com/unslider/2.0.3/js/unslider-min.js"></script>  
        <link href="https://cdn.bootcss.com/unslider/2.0.3/css/unslider-dots.css" rel="stylesheet">
        <link href="https://cdn.bootcss.com/unslider/2.0.3/css/unslider.css" rel="stylesheet">
        
        <link href="https://cdn.bootcss.com/Buttons/2.0.0/css/buttons.min.css" rel="stylesheet">
        <script src="https://cdn.bootcss.com/Buttons/2.0.0/js/buttons.min.js"></script>
        
        <script src="https://cdn.bootcss.com/bootstrap-switch/3.3.4/js/bootstrap-switch.js"></script>
        <link href="https://cdn.bootcss.com/bootstrap-switch/3.3.4/css/bootstrap3/bootstrap-switch.css" rel="stylesheet">
        
        <script src="https://cdn.bootcss.com/echarts/3.6.2/echarts.js"></script>
        
        <script src="https://cdn.bootcss.com/json2/20160511/json_parse_state.js"></script>
         -->
        
        
        <script type="text/javascript" src="/Public/head/jquery.min.js"></script>
        
        <script src="/Public/head/bootstrap.js"></script>
        <link href="/Public/head/bootstrap.css" rel="stylesheet">
        
        <script src="/Public/head/unslider-min.js"></script>  
        <link href="/Public/head/unslider-dots.css" rel="stylesheet">
        <link href="/Public/head/unslider.css" rel="stylesheet">
        
        <link href="/Public/head/buttons.min.css" rel="stylesheet">
        <script src="/Public/head/buttons.min.js"></script>
        
        <script src="/Public/head/bootstrap-switch.js"></script>
        <link href="/Public/head/bootstrap-switch.css" rel="stylesheet">
        
        <script src="/Public/head/echarts.js"></script>
        
        <script src="/Public/head/json_parse_state.js"></script>
        
        <style type="text/css">
            .banner { position: relative; overflow: auto; }
                .banner li { list-style: none; }
                    .banner ul li { float: left;
                                    }
                .unslider {text-align:center;}
                .unslider-nav{text-align:center;position: absolute;width:100%;top:65vh;margin:0 auto}
                .unslider-nav ol{text-align:center;margin:0 auto;width:6vw;border-radius:80px;;background-color:#b2b2b2;}
                .unslider-arrow { position: absolute; top: 50%; }
                .unslider-arrow prev{ position: absolute;  }
                .unslider-arrow next{ position: absolute;  }
            //.yibu_slider { width:100%;height:80vh; background-color:rgba(53, 173, 249, 0.48); }
            dd { line-height:300%;font-weight: 900;padding-left:3vw;}
            .fd{color: #2277da;background-color: #d5e2ef;}
        </style>

    </head>
    
    <body>
        <nav class="navbar navbar-inverse" role="navigation" style="margin:0">
            <div class="navbar-header">
                <a class="navbar-brand"  style="font-size:2vw" href="<?php echo "http://".$_SERVER['HTTP_HOST'].substr($_SERVER['SCRIPT_NAME'],0,strlen($_SERVER['SCRIPT_NAME'])-10)."index.php/index/index";?>">yibu</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav" style="font-size:50">
                    <li  ><a style="font-size:1.5vw">最新事件</a></li>
                    <li  ><a style="font-size:1.5vw">产品与服务</a></li>
                    <li  ><a style="font-size:1.5vw">反馈</a></li>
                    <li  ><a style="font-size:1.5vw">关于我们</a></li>
                </ul >
                <ul class="nav navbar-nav navbar-right">
                    <?php if(($_SESSION[isuser] == 0)): ?><li  style="color:white"><a href="<?php echo "http://".$_SERVER['HTTP_HOST'].substr($_SERVER['SCRIPT_NAME'],0,strlen($_SERVER['SCRIPT_NAME'])-10)."index.php/index/login";?>">登录</a></li>
                    <li  style="color:white"><a href="<?php echo "http://".$_SERVER['HTTP_HOST'].substr($_SERVER['SCRIPT_NAME'],0,strlen($_SERVER['SCRIPT_NAME'])-10)."index.php/index/regis";?>">注册</a></li><?php endif; ?>
                    <?php if(($_SESSION[isuser] == 1)): ?><li  style="color:white"><a>欢迎您，<?php echo ($_SESSION[user][username]); ?></a></li>
                    <li  style="color:white"><a href="<?php echo "http://".$_SERVER['HTTP_HOST'].substr($_SERVER['SCRIPT_NAME'],0,strlen($_SERVER['SCRIPT_NAME'])-10)."index.php/index/logout";?>">注销</a></li><?php endif; ?>
                    <li  style="color:white"><a href="<?php echo U('index/center');?>">控制台</a></li>
                </ul >
            </div>
            
        </nav>
        <title>云种植-报警设置</title>
        <div style="width:100%;height:91vh;">
            <div class="aside" style="width:15vw;height:100%;background-color:#f0f6f6;float:left; display:inline">
                <div style="text-align:center;font-weight:900;font-size:2.5vw;padding-top:2vw;padding-bottom:2vw;">
                    个人中心
                </div>
                <hr class="line-mod" style="width:10vw;height: 0;margin: 0 auto 15px;border: none;border-top: 1px solid #cadbe6;border-bottom: 1px solid #f8fbfb;">
                <dl style="text-align:left">
                    <dd><a href="<?php echo U('index/center');?>">数据总览</a></dd>
                    <dd ><a href="<?php echo U('index/bindChip');?>">绑定芯片</a></dd>
                    <dd ><a href="<?php echo U('index/allData');?>">实时数据</a></dd>
                    <dd ><a href="<?php echo U('index/autoWater');?>">浇水设置</a></dd>
                    <dd ><a href="<?php echo U('index/undergoing');?>">花盆绑定</a></dd>
                    <dd  class="fd"><a href="<?php echo U('index/alarm');?>">报警设置</a></dd>
                    <dd ><a href="<?php echo U('index/UserInfo');?>">用户设置</a></dd>
                </dl>
            </div>
                
            <div class="main_data" style="float:left;width:83%;height:100%;padding-left:2vw;">
                <div style="font-size:2vw;font-weight:800;padding-top:3vh;padding-bottom:3vh;">
                    报警设置
                </div>                                
                <script>
                    $(function(){
                            $(".switch input").bootstrapSwitch({ onColor:"info",size:"small"});
                            });
                </script>
                <div style="width:37vw;height:45vh;border-radius: 2px;box-shadow: 0 2px 3px #f3f3f3;border: 1px solid #d7d7d7;float:left;margin-right:2vw;margin-top:2vh;">
                     <p style="padding:2vh;font-weight:800">报警选项</p>
                     <form method = 'post' action = "<?php echo U('User/alarm_set_save');?>">
                     <div >
                        <div class="col-md-offset-1 col-md-5">温度过高/过低报警</div>
                        <div class="switch switch-small " ><input name="temp_alarm" type="checkbox"  <?php if($alarm['temp_alarm']==1)echo "checked";?> /></div>
                        
                        <div class="col-md-offset-1 col-md-5">湿度过高/过低报警</div>
                        <div class="switch switch-small " ><input name="hum_alarm" type="checkbox"  <?php if($alarm['hum_alarm']==1)echo "checked";?> /></div>
                        
                        <div class="col-md-offset-1 col-md-5">自动浇水反馈异常报警</div>
                        <div class="switch switch-small "><input name="feedback_alarm" type="checkbox"  <?php if($alarm['feedback_alarm']==1)echo "checked";?> /></div>
                        
                         <div class="col-md-offset-1 col-md-5">周报反馈</div>
                         <div class="switch switch-small "><input name="week_report" type="checkbox"  <?php if($alarm['week_report']==1)echo "checked";?> /></div>
                        
                         <div class="col-md-offset-1 col-md-5">月报反馈</div>
                         <div class="switch switch-small "><input name="month_report"  type="checkbox"  <?php if($alarm['month_report']==1)echo "checked";?> /></div>
                        
                        
                        <div class="col-md-offset-4 col-md-3" style="top:2vh;"><button class=" button button-primary button-rounded button-small" style="" id="alarm_set_save">保存</button></div>
                     </div>
                     </form>
                     
                </div>
                
                 <div style="width:37vw;height:33vh;border-radius: 2px;box-shadow: 0 2px 3px #f3f3f3;border: 1px solid #d7d7d7;float:left;margin-right:2vw;margin-top:2vh;">
                    <p style="padding:2vh;font-weight:800">报警方式</p>
                    <div>
                        <form method = 'post' action = "<?php echo U('User/alarm_way_save');?>">
                            <div class="col-md-offset-1 col-md-3">手机报警</div><input name="call" id="call" value="<?php echo ($alarm['call']); ?>" /><button  type="button"  onclick="check_phone()">发送验证短信</button>
                            <br><br>
                            <div class="col-md-offset-1 col-md-3">邮箱报警</div><input name="mail" value="<?php echo ($alarm['mail']); ?>" /><button  type="button" onclick="check_mail()">发送验证邮件</button>
                            
                            <div class="col-md-offset-4 col-md-3" style="top:2vh;"><button  class=" button button-primary button-rounded button-small" style="">保存</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		<script>
			function check_phone()
			{
				var call = document.getElementById("call").value;
				var get_url = "<?php echo U('User/check_phone');?>";
				alert(get_url);
				$.get(get_url, {call:call}, 
					function(data){ 
						alert("验证短信发送成功");
				}); 
				return false;
			}
			function check_mail()
			{
				alert("邮件功能待完善");
			}
		</script>
   </body>
</html>