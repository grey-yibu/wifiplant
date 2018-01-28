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
   
        
        <title>用户登录</title>
       
        <div style="height:91vh;background:url(/Public/index/lgbg.jpg);text-align:center;">
            <div style="margin:0 auto;width:90%;padding-top:10vh;height:82vh;">
                <div style="float:right;background-color:rgba(255, 255, 255, 0.8);width:30%;height:54vh;border-radius:5px;">
                    <br>
                    <p style="font-size:2vw;font-weight:800;margin-top:3vh;">帐号密码登录</p>
                    <br>
                    
                    <div style="padding-left:4vw;padding-right:4vw;width:100%;">
                        <form action="<?php $url = U('index/doLogin');echo substr($url,0,strlen($url)-5);?>" method = 'post'>
                        <input type="text" name="username" class="col-md-6 form-control" placeholder="请在此输入帐号" style="margin-bottom:1vh;"></input>
                        <br>
                        <br>
                        <input type="password" name="password" class="col-md-6 form-control" placeholder="请输入密码" style="margin-bottom:1vh;"></input>
                        <br>
                        <br>
                        <div class="col-md-5" style="padding:0;"><input type="text" name="yanzhengma" class=" form-control" placeholder="请输入验证码"></input></div>
                         <div class="col-md-offset-1 col-md-6" style="padding:0;"><img id="yanzhengma" alt="验证码" src="<?php echo U('index/verify_c');?>" title="点击刷新" style="height:5vh;width:100%"/></div>
                        <br>
                        <br>
                        <br>
                        <!-- <button class="button button-highlight button-action" style="margin-right:2vw;">注册</button> -->
                        <button type="submit" class="button button-glow button-action" style="margin-top:1vh;width:100%">登录</button>
                        </form>
                    </div>
                    
                    <br>
                    <br>
                    <div style="float:right;height:2vh;bottom:5vh;"><a style="padding-right:1vw;">注册</a> |
                    <a style="padding-left:1vw;padding-right:1vw;">忘记密码</a></div>
                </div>
            </div>
            <script>
                // 验证码生成  
                var captcha_img = $('#yanzhengma');
                var verifyimg = captcha_img.attr("src");  
                captcha_img.attr('title', '点击刷新');  
                captcha_img.click(function(){  
                    if( verifyimg.indexOf('?')>0){  
                        $(this).attr("src", verifyimg+'&random='+Math.random());  
                    }else{  
                        $(this).attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());  
                    }  
                });  
            </script>
            <div style="width:100%;height:10vh;background-color:#660000;font-weight:bold;color:white;padding:1vh">
                	Copyright 2017 © yibu. All rights reserved.<br>京ICP备16011864号
            </div>
        </div>
   
        
    </body>
</html>