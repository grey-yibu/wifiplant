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
        <script src="https://cdn.bootcss.com/Buttons/2.0.0/js/buttons.min.js"></script> -->
        
		
		<script type="text/javascript" src="/Public/head/jquery.min.js"></script>
        
        <script src="/Public/head/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <link href="/Public/head/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
        
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
        </style>

    </head>
    
    <body>
        <nav class="navbar navbar-inverse" role="navigation" style="margin:0">
            <div class="navbar-header">
                <a class="navbar-brand"  style="font-size:2vw" href="<?php echo U(index);?>">yibu</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav" style="font-size:50">
                    <li  ><a style="font-size:1.5vw">最新事件</a></li>
                    <li  ><a style="font-size:1.5vw">产品与服务</a></li>
                    <li  ><a style="font-size:1.5vw">反馈</a></li>
                    <li  ><a style="font-size:1.5vw">关于我们</a></li>
                </ul >
                <ul class="nav navbar-nav navbar-right">
                    <?php if(($_SESSION[isuser] == 0)): ?><li  style="color:white"><a href="<?php echo U('index/login');?>">登录</a></li>
                    <li  style="color:white"><a href="<?php echo U('index/regis');?>">注册</a></li><?php endif; ?>
                    <?php if(($_SESSION[isuser] == 1)): ?><li  style="color:white"><a>欢迎您，<?php echo ($_SESSION[user][username]); ?></a></li>
                    <li  style="color:white"><a href="<?php echo U('index/logout');?>">注销</a></li><?php endif; ?>
                    <li  style="color:white"><a href="<?php echo "http://".$_SERVER['HTTP_HOST'].substr($_SERVER['SCRIPT_NAME'],0,strlen($_SERVER['SCRIPT_NAME'])-9)."center.php/index/center";?>">控制台</a></li>
                </ul >
            </div>
            
        </nav>
        <title>云种植</title>
        <div class="yibu_slider" style="width:100%;height:80vh;">
            <div class="banner">
                 <ul >
                    <li style="width:100%;height:82vh;background-image: url(/Public/index//21.jpg); background-color:rgba(53,173, 249,0.48);background-size: cover;">
                         <div style="text-align: center;font-size:5vw;margin-top:20vh;margin-bottom:1vw;">家庭型植物wifi监控器</div>
                         <div style="text-indent: 2em;text-align: left;font-size:1.5vw;">
                          	<p style="text-shadow: #fff 5px 5px 5px;margin:0 auto;width:60vw;padding-bottom:10vh">还在为家庭中照料的植物而头疼？忘记浇水？植物长得不好？可以试一下我们的植物监控器。附带云浇水与云监控功能，使得您的植物生长更数字智能化，看得见的现在互联网技术是您体验新的植物种植乐趣。</p>
                         </div>
                    </li>
                    <li style="width:100%;height:82vh; background-color:yellow;background-image: url(/Public/index//24.jpg);">	  
                    	<div style="text-shadow: #fff 5px 5px 5px; text-align: center;font-size:5vw;margin-top:20vh;margin-bottom:1vw">	智能浇水系统</div>
                    	<div style="text-indent: 2em;text-align: left;font-size:1.5vw;">
                        <div style="text-shadow: #fff 5px 5px 5px;text-align: left;font-size:1.5vw;">
                        	<p style="margin:0 auto;width:60vw;padding-bottom:10vh">本系统使用芯片定时技术，可为植物进行定时浇水。同时独创的云浇水功能，每小时芯片会与服务器发起一次交互，计算植物的生长状态以及浇水策略，更为灵活的给植物供给水分，也使您花费更少的精力享受更多的种植乐趣。</p>
                        </div>
                    </li>
                    <li style="width:100%;height:82vh; background-color:green;background-image: url(/Public/index//30.jpg);">
						<div style="text-shadow: #fff 5px 5px 5px;text-align: center;font-size:5vw;margin-top:20vh;margin-bottom:1vw">云服务报警机制</div>
						<div style="text-indent: 2em;text-align: left;font-size:1.5vw;">
                          	<p style="text-shadow: #fff 5px 5px 5px;margin:0 auto;width:60vw;padding-bottom:10vh">本系统独创的云服务监控机制，每小时芯片会和服务器发起一次交互，更为精确的计算植物实时的生长状态，从云反馈中及时的调整各项植物生长环境。对于多次调整环境状态没有成功时，云服务还会通过手机短信，微信公众号，邮件等方式向您发送紧急通知，使您第一时间能够及时的处理。</p>
                        </div>
                    </li>
                    <li style="width:100%;height:82vh; background-color:gray;background-image: url(/Public/index//31.jpg);">
						<div style="text-shadow: #fff 5px 5px 5px;text-align: center;font-size:5vw;margin-top:20vh;margin-bottom:1vw">清晰的数据统计分析</div>
						<div style="text-indent: 2em;text-align: left;font-size:1.5vw;">
                          	<p style="margin:0 auto;width:60vw;padding-bottom:10vh">我们使用更为动态的图标，通过各项环境指数与您的植物种类相配对，更为精确的为您展示植物生长走向。同时每星期和月季度我们也会为您发送植物生长周报，通过大数据使您更清晰的了解植物的长期状况。</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div style="width:100%;text-align: center;margin-top:2vh;position: absolute;top:75vh">
                <a class="button button-glow button-rounded button-raised button-primary" style="margin-right:3vw">查看详情</a>
                <a class="button button-glow button-rounded button-highlight"  style="margin-left:3vw">立刻购买</a>
            </div>
        </div>
        
         <style type="text/css">
            .tdd {
                width:40vw;
                height:60vh;
                //border-radius:10px;
                //border: 9px solid rgb(27, 189, 157);
               
            }
         </style>
        <div style="height:72vh;text-align: center;">
            <table style="margin:0 auto;margin-top:12vh;border-collapse:separate">
                <tr style="">
                   <!--  <td style="width:10vw;background-color:rgb(27, 189, 157);border-top-right-radius:0;border-bottom-right-radius:0"><div style="font-size:3vw;color:#344a5e;font-weight: bold;">动<br>态</div></td>
                    <td style="width:30vw;"></td>
                    <td style="margin-left:3vw;width:10vw;"><div style="font-size:3vw">热<br>点<br>关<br>注</div></td>
                    <td style="width:30vw;"></td> -->
                    <td>
                        <div class="tdd">
                            <div style="border-top-left-radius:10px;border-bottom-left-radius:10px;width:25%;background-color:rgb(27, 189, 157);height:100%;float:left;text-align: center;">
                                   <div style="font-weight:800;color:#34495e;padding-top:15vh;padding-bottom:20vh;font-size:4vw;margin:0 auto;">动<br>态</div>
                            </div>
                            <div style="width:75%;float:left;height:100%">
                                <ul style="padding:0;height:100%">
                                    <li style="list-style-type:none;height:12.5%">
                                        <div style="position: relative;border-bottom:3px solid #2c3e50;width:100%;height:100%;margin:0;padding:0;background-color:#34495e;text-align: left;padding-top:1vh">
                                            <a href="#" style="padding-left:1vw;color:white;font-weight:800;margin:0 auto;margin:1vh;">1.家庭型植物wifi监控器 首页上线测试中</a>
                                            <p style="position:absolute;right:0;color:#6285a8;margin:0 auto;bottom:0%">2017.6.22</p>
                                        </div>
                                    </li>
                                    
                                    <li style="list-style-type:none;height:12.5%">
                                        <div style="position: relative;border-bottom:3px solid #2c3e50;width:100%;height:100%;margin:0;padding:0;background-color:#34495e;text-align: left;padding-top:1vh">
                                            <a href="#" style="padding-left:1vw;color:white;font-weight:800;margin:0 auto;margin:1vh;">2.本项目参加"塞伯特杯" 芯片开发大赛</a>
                                            <p style="position:absolute;right:0;color:#6285a8;margin:0 auto;bottom:0%">2017.6.22</p>
                                        </div>
                                    </li>
                                    
                                    <li style="list-style-type:none;height:12.5%">
                                        <div style="position: relative;border-bottom:3px solid #2c3e50;width:100%;height:100%;margin:0;padding:0;background-color:#34495e;text-align: left;padding-top:1vh">
                                            <a href="#" style="padding-left:1vw;color:white;font-weight:800;margin:0 auto;margin:1vh;">3.本产品参加北京市创新创业比赛</a>
                                            <p style="position:absolute;right:0;color:#6285a8;margin:0 auto;bottom:0%">2017.6.22</p>
                                        </div>
                                    </li>
                                    
                                    <li style="list-style-type:none;height:12.5%"><div style="border-bottom:3px solid #2c3e50;width:100%;height:100%;;margin:0;padding:0;background-color:#34495e;"></div></li>
                                    <li style="list-style-type:none;height:12.5%"><div style="border-bottom:3px solid #2c3e50;width:100%;height:100%;;margin:0;padding:0;background-color:#34495e;"></div></li>
                                    <li style="list-style-type:none;height:12.5%"><div style="border-bottom:3px solid #2c3e50;width:100%;height:100%;;margin:0;padding:0;background-color:#34495e;"></div></li>
                                    <li style="list-style-type:none;height:12.5%"><div style="border-bottom:3px solid #2c3e50;width:100%;height:100%;;margin:0;padding:0;background-color:#34495e;"></div></li>
                                    <li style="list-style-type:none;height:12.5%"><div style="border-bottom:3px solid #2c3e50;width:100%;height:100%;;margin:0;padding:0;background-color:#34495e;"></div></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="tdd" style="margin-left:5vw;">
                            <div style="border-top-left-radius:10px;border-bottom-left-radius:10px;width:25%;background-color:rgb(27, 189, 157);height:100%;float:left;">
                                <div style="font-weight:800;color:#34495e;padding-top:5vh;padding-bottom:20vh;font-size:4vw;margin:0 auto;">热<br>点<br>关<br>注</div>
                            </div>
                            <div style="width:75%;float:left;height:100%">
                                <ul style="padding:0;height:100%">
                                    <li style="list-style-type:none;height:12.5%">
                                    <div style="position: relative;border-bottom:3px solid #2c3e50;width:100%;height:100%;margin:0;padding:0;background-color:#34495e;text-align: left;padding-top:1vh">
                                        <a href="#" style="padding-left:1vw;color:white;font-weight:800;margin:0 auto;margin:1vh;">1.家庭型植物wifi监控器适用环境</a>
                                        <p style="position:absolute;right:0;color:#6285a8;margin:0 auto;bottom:0%">2017.6.22</p>
                                    </div>
                                    </li>
                                    <li style="list-style-type:none;height:12.5%">
                                        <div style="position: relative;border-bottom:3px solid #2c3e50;width:100%;height:100%;margin:0;padding:0;background-color:#34495e;text-align: left;padding-top:1vh">
                                            <a href="#" style="padding-left:1vw;color:white;font-weight:800;margin:0 auto;margin:1vh;">2.如何使用本产品连接家庭wifi？</a>
                                            <p style="position:absolute;right:0;color:#6285a8;margin:0 auto;bottom:0%">2017.6.22</p>
                                        </div>
                                    </li>
                                   <li style="list-style-type:none;height:12.5%">
                                        <div style="position: relative;border-bottom:3px solid #2c3e50;width:100%;height:100%;margin:0;padding:0;background-color:#34495e;text-align: left;padding-top:1vh">
                                            <a href="#" style="padding-left:1vw;color:white;font-weight:800;margin:0 auto;margin:1vh;">3.云服务控制台无法正常获得数据？</a>
                                            <p style="position:absolute;right:0;color:#6285a8;margin:0 auto;bottom:0%">2017.6.22</p>
                                        </div>
                                    </li>
                                    <li style="list-style-type:none;height:12.5%">
                                        <div style="position: relative;border-bottom:3px solid #2c3e50;width:100%;height:100%;margin:0;padding:0;background-color:#34495e;text-align: left;padding-top:1vh">
                                            <a href="#" style="padding-left:1vw;color:white;font-weight:800;margin:0 auto;margin:1vh;">4.零部件更换与服务续费</a>
                                            <p style="position:absolute;right:0;color:#6285a8;margin:0 auto;bottom:0%">2017.6.22</p>
                                        </div>
                                    </li>
                                    <li style="list-style-type:none;height:12.5%">
                                        <div style="position: relative;border-bottom:3px solid #2c3e50;width:100%;height:100%;margin:0;padding:0;background-color:#34495e;text-align: left;padding-top:1vh">
                                            <a href="#" style="padding-left:1vw;color:white;font-weight:800;margin:0 auto;margin:1vh;">5.进行浇水测试没有反应？</a>
                                            <p style="position:absolute;right:0;color:#6285a8;margin:0 auto;bottom:0%">2017.6.22</p>
                                        </div>
                                    </li>
                                    <li style="list-style-type:none;height:12.5%"><div style="border-bottom:3px solid #2c3e50;width:100%;height:100%;;margin:0;padding:0;background-color:#34495e;"></div></li>
                                    <li style="list-style-type:none;height:12.5%"><div style="border-bottom:3px solid #2c3e50;width:100%;height:100%;;margin:0;padding:0;background-color:#34495e;"></div></li>
                                    <li style="list-style-type:none;height:12.5%"><div style="border-bottom:3px solid #2c3e50;width:100%;height:100%;;margin:0;padding:0;background-color:#34495e;"></div></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                    
                </tr>
            </table>
        </div>
        
        <div style="position: relative;height:130vh;background-color:black;text-align:center;">
            <div style="position:absolute;width:100%;text-align:center;margin:0 auto">
                <div style="text-align: center;margin:10vh"><img src="/Public/index//s.jpg" width="130" height="120"></div>
                <!-- <div style="text-align: center;"><img src="sun.jpg" ></div> -->
                <div style="text-align: center;font-size:2.4vw;margin-bottom:1vw;font-weight:800;color:white;">精准室内农业，让你体验不一样的科技种植</div>
                <div style="text-align: center;font-size:1.6vw;width:100%;font-weight:100;color:white;"><p style="margin:0 auto;width:60vw;padding-bottom:10vh">节水，自动化，智能报警，大数据分析，专业定制，云服务打造现代室内农业</p>
                </div>
                
                
                <style type="text/css">
                    .yibu_tab {
                        background-color: rgb(255, 235, 0);
                    }
                    .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus
                     {
                        background-color: #c0f3b7;
                    }
                    .nav-tabs {
                         border-bottom: 0px solid #ddd; 
                    }
                </style>
                
                <div id="yibu_server" style="width:100%" style="text-align:center;">
                    <div >
                        <ul id="myTab" class="nav nav-tabs">
                            <li class="active">
                                <a class="yibu_tab" href="#yb_product" data-toggle="tab" style="width:20vw;height:10vh;margin-left:5vw;">
                                    <span class="glyphicon glyphicon-cloud-upload" ></span><br>
                                    产品列表
                                </a>
                            </li>
                            <li class="">
                                <a class="yibu_tab" href="#yb_server" data-toggle="tab" style="width:20vw;height:10vh;margin-left:2.78vw;">
                                    <span class="glyphicon glyphicon-cloud-upload" ></span><br>
                                    服务列表
                                </a>
                            </li>
                            <li class="">
                                <a class="yibu_tab" href="#yb_try" data-toggle="tab" style="width:20vw;height:10vh;margin-left:2.78vw;">
                                    <span class="glyphicon glyphicon-cloud-upload" ></span><br>
                                    研发中心
                                </a>
                            </li>
                            <li class="">
                                <a class="yibu_tab" href="#yb_other" data-toggle="tab" style="width:20vw;height:10vh;margin-left:2.78vw;">
                                    <span class="glyphicon glyphicon-cloud-upload" ></span><br>
                                    其他
                                </a>
                            </li>
                        </ul>
                    </div>
                    <style type="text/css">
                        .yibu_tab_div {
                            float:left;
                            margin:0 auto;
                            width:28%;
                            height:15vh;
                            background-color:white;
                            margin-top:3vh;
                            margin-left:3vw;
                            cursor: pointer;
                            padding-top:2vh;
                        }
                        .yibu_tab_div:hover {
                            box-shadow: 10px 10px 10px 0 rgba(0,0,0,.15);
                        }
                        .yibu_tab_title{
                            font-weight:800;
                            font-size:1.5vw
                        }
                    </style>
                    <div class="tab-content" style="width:90%;color:white;height:40vh;margin:0 auto;">
                        <div class="tab-pane fade in active" id="yb_product" style="width:100%;height:40vh;border-bottom-left-radius:5px;border-bottom-right-radius:5px;background-color:#f2f2f5;color:black;text-align:center;">
                            <div class="yibu_tab_div"><p class="yibu_tab_title">云监控器最简版</p><div>云监控土壤情况</div></div>
                            <div class="yibu_tab_div"><p class="yibu_tab_title">云监控器标准版</p><div>云监控土壤情况，云控制浇水</div></div>
                            <div class="yibu_tab_div"><p class="yibu_tab_title">离线监控器标准版</p><div>本地监控土壤情况，云控制浇水</div></div>
                            <div class="yibu_tab_div"><p class="yibu_tab_title">云监控器升级版版</p><div>云监控土壤、光照环境，云控制浇水，</div></div>
                            <div class="yibu_tab_div"><p class="yibu_tab_title">离线监控器升级版版</p><div>本地监控土壤、光照环境，云控制浇水，</div></div>
                        </div>
                        <div class="tab-pane fade in " id="yb_server" style="width:100%;height:40vh;border-bottom-left-radius:5px;border-bottom-right-radius:5px;background-color:#f2f2f5;color:black;text-align:center;">
                            <div class="yibu_tab_div"><p class="yibu_tab_title">植物监控云最简版</p><div>提供基础的数据收集存储分析服务</div></div>
                            <div class="yibu_tab_div"><p class="yibu_tab_title">植物监控云标准版</p><div>提供基础的数据收集存储分析服务，云控浇水服务</div></div>
                            <div class="yibu_tab_div"><p class="yibu_tab_title">植物监控云升级版</p><div>提供基础的数据收集存储分析服务，云控浇水服务，报警服务</div></div>
                            <div class="yibu_tab_div"><p class="yibu_tab_title">植物监控云定制版</p><div>提供定制版植物生长云控服务</div></div>
                            <div class="yibu_tab_div"><p class="yibu_tab_title">植物监控云企业版</p><div>提供大规模应用的云控服务</div></div>
                        </div>
                        <div class="tab-pane fade in " id="yb_try" style="width:100%;height:40vh;border-bottom-left-radius:5px;border-bottom-right-radius:5px;background-color:#f2f2f5;color:black;text-align:center;">
                            <div class="yibu_tab_div"><p class="yibu_tab_title">植物生长数据库研发</p><div>对各个植物生长良好特性的环境数据进行收集，从而提供更优秀的服务</div></div>
                            <div class="yibu_tab_div"><p class="yibu_tab_title">植物监控云大棚种植版</p><div>提供面向大棚生产的云监控服务</div></div>
                            <div class="yibu_tab_div"><p class="yibu_tab_title">植物监控云图像识别版</p><div>除了基础服务外，增加摄像头监控植物生长情况</div></div>
                            <div class="yibu_tab_div"><p class="yibu_tab_title">精准滴灌套件</p><div>精准滴灌套件，节水和数字农业科研</div></div>
                            <div class="yibu_tab_div"><p class="yibu_tab_title">植物云监控灯光附件</p><div>提供云植物补光服务</div></div>
                        </div>
                        <div class="tab-pane fade in " id="yb_other" style="width:100%;height:40vh;border-bottom-left-radius:5px;border-bottom-right-radius:5px;background-color:#f2f2f5;color:black;text-align:center;">
                            <div class="yibu_tab_div"><p class="yibu_tab_title">植物种子购买</p><div>官方提供优质植物种子渠道</div></div>
                            <div class="yibu_tab_div"><p class="yibu_tab_title">植物种苗采购</p><div>官方提供优质种苗，让您无忧种植</div></div>
                            <div class="yibu_tab_div"><p class="yibu_tab_title">种植材料选购</p><div>官方提供全部的种植材料（土壤，肥料，花盆等）以及方法说明，让您科学、专业的种植</div></div>
                            <div class="yibu_tab_div"><p class="yibu_tab_title">病虫害百科</p><div>列举各种植物常见病虫害，解决您种植的问题</div></div>
                            <div class="yibu_tab_div"><p class="yibu_tab_title">官方论坛</p><div>论坛交流处，大家一起分享种植喜悦</div></div>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
        
      
   
        <script>		
/*        jQuery(document).ready(function($) {
			$('.banner').unslider(
            );
		});*/
        /*$(document).ready(function(e) {
            var unslider04 = $('.banner').unslider({
                speed: 1000, 
                delay: 1000,
                dots: true,
            }),
            data04 = unslider04.data('unslider');
            data04.start();
        });
        */
        $('.banner').unslider(
        {
            speed: 1000, 
            delay: 8000,
            autoplay:true,
            pause:true,
            arrows:{prev:'<a class="unslider-arrow prev" class="unslider-arrow next" style="background-color: rgba(229, 255, 254, 0.51);width:4vw;border-radius:80px;"> <span class="glyphicon glyphicon-chevron-left" style="font-size:2vw;"></span></a>',next:'<a class="unslider-arrow next" style="background-color: rgba(229, 255, 254, 0.51);width:4vw;border-radius:80px;"><span class="glyphicon glyphicon-chevron-right" style="font-size:2vw;" ></span></a></a>'},
        });
        </script>

          <div style="height:100vh;background-color:#99CCCC;text-align:center;">
            <div style="margin:0 auto;width:80%;padding-top:10vh;height:90vh;">
                <div style="float:left;background-color:#CCFFFF;width:43%;height:73vh;border-radius:5px;padding:5%">
                    <p style="font-size:3vw;font-weight:800;">联系我们<p>
                    <div style="text-align:left;padding:2%;font-size:1.5vw;padding-top:10%">
                        <p>call:18813011762</p>
                        <p>email:563965323@qq.com</p>
                        <p>地址：北京市昌平区回龙观北农路7号</p>
                        
                    </div>
                </div>
                <div style="float:right;background-color:#CCFFFF;width:43%;height:73vh;border-radius:5px;padding:5%">
                    <p style="font-size:3vw;font-weight:800;">问题反馈</p>
                    <br>
                    <div>
                        <textarea id="fankui" class="form-control" rows="3" style="width:100%;height:30vh;" onfocus="docment.getElementById('fankui').value='';">请在此描述您遇到的问题以及联系方式，我们会在收到您的反馈后尽快联系您解决。</textarea>
                        <br>
                        <button class="button button-glow button-border button-rounded button-primary">提交</button>
                    </div>
                </div>
            </div>
            <div style="width:100%;height:10vh;background-color:#660000;font-weight:bold;color:white;padding:1vh">
                	Copyright 2017 © yibu. All rights reserved.<br>京ICP备16011864号
            </div>
        </div>
    </body>
</html>