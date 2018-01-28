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
        <title>云种植-数据总览</title>
        <div style="width:100%;height:91vh;">
            <div class="aside" style="width:15vw;height:100%;background-color:#f0f6f6;float:left; display:inline">
                <div style="text-align:center;font-weight:900;font-size:2.5vw;padding-top:2vw;padding-bottom:2vw;">
                    个人中心
                </div>
                <hr class="line-mod" style="width:10vw;height: 0;margin: 0 auto 15px;border: none;border-top: 1px solid #cadbe6;border-bottom: 1px solid #f8fbfb;">
                <dl style="text-align:left">
                    <dd class="fd"><a href="<?php echo U('index/center');?>">数据总览</a></dd>
                    <dd ><a href="<?php echo U('index/bindChip');?>">绑定芯片</a></dd>
                    <dd ><a href="<?php echo U('index/allData');?>">实时数据</a></dd>
                    <dd ><a href="<?php echo U('index/autoWater');?>">浇水设置</a></dd>
                    <dd ><a href="<?php echo U('index/undergoing');?>">花盆绑定</a></dd>
                    <dd ><a href="<?php echo U('index/alarm');?>">报警设置</a></dd>
                    <dd ><a href="<?php echo U('index/UserInfo');?>">用户设置</a></dd>
                </dl>
            </div>
                
            <div class="main_data" style="float:left;width:83%;height:100%;padding-left:2vw;">
                <div style="font-size:2vw;font-weight:800;padding-top:3vh;padding-bottom:3vh;">
                    数据总览
                </div>
                <div style="width:37vw;height:40vh;border-radius: 2px;box-shadow: 0 2px 3px #f3f3f3;border: 1px solid #d7d7d7;float:left;margin-right:2vw;">
                    <p style="padding:2vh;font-weight:800">在线芯片数</p>
                    <div id="online_model" style="width:20vw;height:35vh;background-color:red;margin:2vh;left:-3vw;top:-5vh;float:left;"></div>
                    <div style="bottom:0px;">
                        <p style="color:#06c290;font-weight:800">正常在线：<?php echo ($connect); ?></p>
                        <p style="color:yellow;font-weight:800">异常：<?php echo ($yellow_connect); ?></p>
                        <p style="color:red;font-weight:800">离线：<?php echo ($red_connect); ?></p>
                    </div>
                </div>
                
                <div style="width:37vw;height:40vh;border-radius: 2px;box-shadow: 0 2px 3px #f3f3f3;border: 1px solid #d7d7d7;float:left;margin-right:2vw;">
                    <div style="padding:2vh;font-weight:900;padding-bottom:0;">
                        <span class="button-dropdown button-small" data-buttons="dropdown">
                            <button id="chip_name_show" class="button button-rounded button-small">
                              芯片 <?php echo ($chip_id); ?><i class="fa fa-caret-down"></i>
                            </button>
                         
                            <ul class="button-dropdown-list">
                            <?php if(is_array($bindInfo)): $i = 0; $__LIST__ = $bindInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bindInfo): $mod = ($i % 2 );++$i;?><li><a style="width:30vw;" onclick="change_chip(this)" id="<?php echo ($bindInfo["chip_id"]); ?>">芯片 <?php echo ($bindInfo["chip_id"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </span>
                    </div>
                    <div id="a1" style="width:35vw;height:35vh;background-color:red;margin:2vh;margin-top:0;"></div>
                </div>
                                
                <div style="width:76vw;height:33vh;border-radius: 2px;box-shadow: 0 2px 3px #f3f3f3;border: 1px solid #d7d7d7;float:left;margin-right:2vw;margin-top:2vh;">
                     <p style="padding:2vh;font-weight:800">种植建议</p>
                     <div style="float:left;border: 1px solid #d7d7d7;width:20vw;height:20vh;margin-left:3vw;">
                        <div style="font-size:2vw;width:8vw;text-align:center;float:left;"><img style="width:8vw;height:20vh" src="/Public/center/water.jpg" /></div>
                        <div style="width:7vw;margin-left:2vw;margin-right:2vw;margin-top:5vh;float:left;">水份充足适宜，符合植物生长。</div>
                     </div>
                     
                     <div style="float:left;border: 1px solid #d7d7d7;width:20vw;height:20vh;margin-left:3vw;">
                        <div style="font-size:2vw;width:8vw;text-align:center;float:left;"><img style="width:8vw;height:18vh" src="/Public/center/temp.jpg" /></div>
                        <div style="width:7vw;margin-left:2vw;margin-right:2vw;margin-top:5vh;float:left;">温度适宜，符合植物生长。</div>
                     </div>
                    
                     <div style="float:left;border: 1px solid #d7d7d7;width:20vw;height:20vh;margin-left:3vw;">
                        <div style="font-size:2vw;width:8vw;text-align:center;float:left;"><img style="width:8vw;height:18vh" src="/Public/center/sun.jpg" /></div>
                        <div style="width:7vw;margin-left:2vw;margin-right:2vw;margin-top:5vh;float:left;">肥料，土壤在预计更换期内。</div>
                     </div>
                </div>
                                

            </div>
        </div>
        <script type="text/javascript">
            var online_model = echarts.init(document.getElementById('online_model'));
            var a1 = echarts.init(document.getElementById('a1'));
            option = {
                tooltip: {
                    trigger: 'item',
                    formatter: "{a} <br/>{b}: {c} ({d}%)"
                },

                graphic:{
                    type:'text',
                    left:'center',
                    top:'center',
                    z:2,
                    zlevel:100,
                    style:{
                        text:'<?php echo ($all); ?>块',
                        x:100,
                        y:100,
                        font:'#06c290',
                        textAlign:'center',
                        width:30,
                        height:30
                    }
                },
                series: [
                    {
                        name:'在线芯片数',
                        type:'pie',
                        radius: ['50%', '70%'],
                        avoidLabelOverlap: false,
                        label: {
                            normal: {
                                show: false,
                                position: 'center'
                            },
                            emphasis: {
                                show: false,
                                textStyle: {
                                    fontSize: '30',
                                    fontWeight: 'bold'
                                }
                            }
                        },
                        labelLine: {
                            normal: {
                                show: false
                            }
                        },
                        data:[
                            {value:"<?php echo ($connect); ?>", name:'在线'},
                            {value:"<?php echo ($yellow_connect); ?>", name:'异常'},
                            {value:"<?php echo ($red_connect); ?>", name:'离线'}
                        ]
                    }
                ],
                color:['#06c290','yellow','red', 'blueviolet']  
            };
        option1 = {
                tooltip : {
                    trigger: 'axis'
                },
                legend: {
                    data:['温度','土壤湿度']
                },
                toolbox: {
                    show : false,
                    feature : {
                        mark : {show: true},
                        dataView : {show: true, readOnly: false},
                        magicType : {show: true, type: ['line', 'bar', 'stack', 'tiled']},
                        restore : {show: true},
                        saveAsImage : {show: true}
                    }
                },
                calculable : true,
                xAxis : [
                    {
                        type : 'category',
                        boundaryGap : false,
                        data : []
                    }
                ],
                yAxis : [
                    {
                        type : 'value',
                        name: '温度',
                        position: 'left',
                        axisLabel: {
                                formatter: '{value} ℃'
                            }
                    },
                    {
                       type: 'value',
                        name: '土壤湿度',
                        min: 0,
                        max: 100,
                        position: 'right',
                        axisLabel: {
                            formatter: '{value} %'
                        }
                    }
                ],
                series : [
                    {
                        name:'温度',
                        type:'line',
                        smooth:true,
                        itemStyle: {normal: {areaStyle: {type: 'default'}}},
                         yAxisIndex: 0,
                        data:[]
                    },
                    {
                        name:'土壤湿度',
                        type:'line',
                        smooth:true,
                        itemStyle: {normal: {areaStyle: {type: 'default'}}},
                         yAxisIndex: 1,
                        data:[]
                    }
                ]
            };
            
            online_model.setOption(option);
            a1.setOption(option1);
            
        </script>
        
        <script>
            function  change_chip(e)
            {
                var chip_id = e.id;
                $("#chip_name_show").text("芯片 "+ chip_id);
                var result ="" ;
                var ajax_url = "<?php echo U('Data/return_data');?>";
                $.get(ajax_url, {chip_id:chip_id}, 
                    function(data){ 
                        result = JSON.parse(data);
                        a1.setOption({
                            xAxis : [{data : result.time}],
                            series : [{data:result.temp},{data:result.hum}]
                        })
                    });
            }
            var a = new Object();
            a.id = "<?php echo ($chip_id); ?>";
            change_chip(a);
        </script>
    </body>
</html>