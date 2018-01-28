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
   
        
   
       
        <div style="height:91vh;background:url(/Public/index/lgbg.jpg);text-align:center;background-size: cover;">
            <div style="margin:0 auto;width:90%;padding-top:10vh;height:82vh;text-align:center;">
                <div style="background-color:rgba(255, 255, 255, 0.8);width:50%;height:53vh;border-radius:5px;margin:0 auto;">
                    <title>跳转提示</title>
                        <style type="text/css">
                        *{ padding: 0; margin: 0; }
                        body{ background: #fff; font-family: '微软雅黑'; color: #333; font-size: 16px; }
                        .system-message{ padding: 24px 48px; }
                        .system-message h1{ font-size: 100px; font-weight: normal; line-height: 120px; margin-bottom: 12px; }
                        .system-message .jump{ padding-top: 10px}
                        .system-message .jump a{ color: #333;}
                        .system-message .success,.system-message .error{ line-height: 1.8em; font-size: 36px }
                        .system-message .detail{ font-size: 12px; line-height: 20px; margin-top: 12px; display:none}
                        </style>
                        
                        
                        <div class="system-message">
                            <?php if(isset($message)) {?>
                            <h1>:)</h1>
                            <p class="success"><?php echo($message); ?></p>
                            <?php }else{?>
                            <h1>:(</h1>
                            <p class="error"><?php echo($error); ?></p>
                            <?php }?>
                            <p class="detail"></p>
                            <p class="jump">
                            页面自动 <a id="href" href="<?php echo($jumpUrl); ?>">跳转</a> 等待时间： <b id="wait"><?php echo($waitSecond); ?></b>
                            </p>
                            </div>
                            <script type="text/javascript">
                            (function(){
                            var wait = document.getElementById('wait'),href = document.getElementById('href').href;
                            var interval = setInterval(function(){
                                var time = --wait.innerHTML;
                                if(time <= 0) {
                                    location.href = href;
                                    clearInterval(interval);
                                };
                            }, 1000);
                            })();
                            </script>
                    <br>
                    <br>
                    
                   
                </div>
            </div>
            <div style="width:100%;height:10vh;background-color:#660000;font-weight:bold;color:white;padding:1vh">
                	Copyright 2017 © yibu. All rights reserved.<br>京ICP备16011864号
            </div>
        </div>
   
        
    </body>
</html>