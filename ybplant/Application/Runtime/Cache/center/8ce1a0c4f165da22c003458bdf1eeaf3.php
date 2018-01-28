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
        <title>云种植-浇水设置</title>
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
                    <dd  class="fd"><a href="<?php echo U('index/autoWater');?>">浇水设置</a></dd>
                    <dd ><a href="<?php echo U('index/undergoing');?>">花盆绑定</a></dd>
                    <dd ><a href="<?php echo U('index/alarm');?>">报警设置</a></dd>
                    <dd ><a href="<?php echo U('index/UserInfo');?>">用户设置</a></dd>
                </dl>
            </div>
                
            <div class="main_data" style="float:left;width:83%;height:100%;padding-left:2vw;">
                <div style="font-size:2vw;font-weight:800;padding-top:3vh;padding-bottom:3vh;">
                    自动浇花设置
                </div>                                

                <div style="width:76vw;height:33vh;border-radius: 2px;box-shadow: 0 2px 3px #f3f3f3;border: 1px solid #d7d7d7;float:left;margin-right:2vw;margin-top:2vh;overflow:auto;">
                     <p style="padding:2vh;font-weight:800;float:left;">定时浇水</p>
                     
                     <div>
                        <table class="table  table-hover" style="text-align:center">
                            <thead>
                                <tr>
                                    <td>芯片id</td>
                                    <td>浇水频率</td>
                                    <td>浇水时间</td>
                                    <td>浇水方式</td>
                                    <td>每次抽水时间</td>
                                    <td>操作</td>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($bindInfo)): $i = 0; $__LIST__ = $bindInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bindInfo): $mod = ($i % 2 );++$i;?><tr>
                                    <td><?php echo ($bindInfo["chip_id"]); ?></td>
                                    <td>
                                          <span class="button-dropdown button-small" data-buttons="dropdown">
                                            <button class="button button-rounded button-small" id="chip_i_<?php echo ($i); ?>">
                                                <?php if(($bindInfo["water_frequency"] == 1) ): ?>每两天
                                                <?php elseif(($bindInfo["water_frequency"] == 2) ): ?>每三天
                                                <?php elseif(($bindInfo["water_frequency"] == 3) ): ?>每五天
                                                <?php elseif(($bindInfo["water_frequency"] == 4) ): ?>每星期
                                                <?php else: ?>每天<?php endif; ?> 
                                            </button>
                                         
                                            <ul class="button-dropdown-list" >
                                              <li><a onclick="change(1,'chip_i_<?php echo ($i); ?>',0,'每天')">每天</a></li>
                                              <li><a onclick="change(1,'chip_i_<?php echo ($i); ?>',1,'每两天')">每两天</a></li>
                                              <li><a onclick="change(1,'chip_i_<?php echo ($i); ?>',2,'每三天')">每三天</a></li>
                                              <li><a onclick="change(1,'chip_i_<?php echo ($i); ?>',3,'每五天')">每五天</a></li>
                                              <li><a onclick="change(1,'chip_i_<?php echo ($i); ?>',4,'每星期')">每星期</a></li>
                                            </ul>
                                          </span>
                                          
                                    </td>
                                    <td>    <input type="time" value="<?php echo ($bindInfo["water_time"]); ?>" id="chip_t_<?php echo ($i); ?>" /> </td>
                                    <td>
                                        <span class="button-dropdown button-small" data-buttons="dropdown">
                                                <button class="button button-rounded button-small" id="chip_d_<?php echo ($i); ?>">
                                                <?php if(($bindInfo["water_way"] == 1) ): ?>滴灌（节水）
                                                <?php elseif(($bindInfo["water_way"] == 2) ): ?>快速间歇（土壤板结）
                                                <?php elseif(($bindInfo["water_way"] == 3) ): ?>长间隔
                                                <?php else: ?>普通<?php endif; ?> 
                                                </button>
                                             
                                                <ul class="button-dropdown-list" >
                                                  <li><a onclick="change(2,'chip_d_<?php echo ($i); ?>',0,'普通')">普通</a></li>
                                                  <li><a onclick="change(2,'chip_d_<?php echo ($i); ?>',1,'滴灌（节水）')">滴灌（节水）</a></li>
                                                  <li><a onclick="change(2,'chip_d_<?php echo ($i); ?>',2,'快速间歇（土壤板结）')">快速间歇（土壤板结）</a></li>
                                                  <li><a onclick="change(2,'chip_d_<?php echo ($i); ?>',3,'长间隔')">长间隔</a></li>
                                                </ul>
                                          </span>
                                    </td>
                                    <td><input id="amount_t_<?php echo ($i); ?>" value="<?php echo ($bindInfo["water_amount"]); ?>" style="width:8vw;text-align:center;">秒</td>
                                    <td><button class="button button-primary button-rounded button-small" onclick="chip_save('<?php echo ($bindInfo["chip_id"]); ?>','chip_i_<?php echo ($i); ?>','chip_d_<?php echo ($i); ?>','chip_t_<?php echo ($i); ?>','amount_t_<?php echo ($i); ?>')">保存</button></td>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                             <script>
                            <?php if(is_array($bindInfo)): $i = 0; $__LIST__ = $bindInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bindInfo): $mod = ($i % 2 );++$i;?>var chip_i_<?php echo ($i); ?> = parseInt("<?php echo ($bindInfo["water_frequency"]); ?>");
                                var chip_d_<?php echo ($i); ?> = parseInt("<?php echo ($bindInfo["water_way"]); ?>");<?php endforeach; endif; else: echo "" ;endif; ?>
                            </script>
                            </tbody>
                        </table>
                     </div>
                </div>
                
                <div style="width:37vw;height:33vh;border-radius: 2px;box-shadow: 0 2px 3px #f3f3f3;border: 1px solid #d7d7d7;float:left;margin-right:2vw;margin-top:2vh;">
                     <p style="padding:2vh;font-weight:800">环境超限浇水</p>
                     <div>
                        <div class="col-md-offset-1 col-md-3">温度超过</div><input></input>时
                        <br>
                        <div class="col-md-offset-1 col-md-3">且湿度不超过</div><input></input>时
                        <br>
                        <div class="col-md-offset-1 col-md-3">进行浇水</div>
                        <br>
                        
                        <div class="col-md-offset-4 col-md-3" style="top:2vh;"><button class=" button button-primary button-rounded button-small"  >保存</button></div>
                     </div>
                </div>
                
                 <div style="width:37vw;height:33vh;border-radius: 2px;box-shadow: 0 2px 3px #f3f3f3;border: 1px solid #d7d7d7;float:left;margin-right:2vw;margin-top:2vh;">
                     <p style="padding:2vh;font-weight:800">最近浇水日志</p>
                     <div>
                       
                     </div>
                </div>
            </div>
        </div>
        <script>
            function change(a,b,c,d)
            {
                $("#"+b).text(d);
                eval(b + "=" + c);
            }
            function chip_save(chip_id,i,d,time,amount)
            {
                var t = $("#" + time).val();
                var water_amount = $("#" + amount).val();
                var ajax_url = "<?php echo U('User/water_set_change');?>";
                window.location.href = ajax_url + "?chip_id="+chip_id+"&water_frequency="+eval(i)+"&water_time="+t+"&water_way="+eval(d)+"&water_amount="+water_amount;
            }
        </script>
   </body>
</html>