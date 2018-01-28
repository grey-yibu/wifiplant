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
        <script type="text/javascript" src="/Public/center/laydate/laydate.js"></script>
        <title>云种植-实时数据</title>
        <div style="width:100%;height:91vh;">
            <div class="aside" style="width:15vw;height:100%;background-color:#f0f6f6;float:left; display:inline">
                <div style="text-align:center;font-weight:900;font-size:2.5vw;padding-top:2vw;padding-bottom:2vw;">
                    个人中心
                </div>
                <hr class="line-mod" style="width:10vw;height: 0;margin: 0 auto 15px;border: none;border-top: 1px solid #cadbe6;border-bottom: 1px solid #f8fbfb;">
                <dl style="text-align:left">
                    <dd><a href="<?php echo U('index/center');?>">数据总览</a></dd>
                    <dd ><a href="<?php echo U('index/bindChip');?>">绑定芯片</a></dd>
                    <dd  class="fd"><a href="<?php echo U('index/allData');?>">实时数据</a></dd>
                    <dd ><a href="<?php echo U('index/autoWater');?>">浇水设置</a></dd>
                    <dd ><a href="<?php echo U('index/undergoing');?>">花盆绑定</a></dd>
                    <dd ><a href="<?php echo U('index/alarm');?>">报警设置</a></dd>
                    <dd ><a href="<?php echo U('index/UserInfo');?>">用户设置</a></dd>
                </dl>
            </div>
                
            <div class="main_data" style="float:left;width:83%;height:100%;padding-left:2vw;">
                <div style="font-size:2vw;font-weight:800;padding-top:3vh;padding-bottom:3vh;">
                    实时数据
                </div>                                

                <div style="width:76vw;height:67vh;border-radius: 2px;box-shadow: 0 2px 3px #f3f3f3;border: 1px solid #d7d7d7;float:left;margin-right:2vw;margin-top:2vh;">
                     <div style="padding:2vh;font-weight:800;float:left;width:30vw;">
                        <span class="button-dropdown button-small" data-buttons="dropdown">
                            <button id="chip_name_show" class="button button-rounded button-small">
                              芯片 <?php echo ($chip_id); ?><i class="fa fa-caret-down"></i>
                            </button>
                         
                            <ul class="button-dropdown-list">
                            <?php if(is_array($bindInfo)): $i = 0; $__LIST__ = $bindInfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bindInfo): $mod = ($i % 2 );++$i;?><li><a style="width:30vw;" onclick="change_chip(this)" id="<?php echo ($bindInfo["chip_id"]); ?>">芯片 <?php echo ($bindInfo["chip_id"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </span>
                        
                     </div>
                     <div  style="float:right;margin:0;margin-right:2vw;margin-top:1vh;">
                        <span class="button-dropdown button-small" data-buttons="dropdown">
                            <button class="button button-rounded button-small">
                              温湿度图表数据 <i class="fa fa-caret-down"></i>
                            </button>
                         
                            <ul class="button-dropdown-list">
                              <li><a href="">温度图表数据</a></li>
                              <li><a href="">湿度图表数据</a></li>
                              <li><a href="">温湿度图表数据</a></li>
                            </ul>
                        </span>
                     </div>
                     <br>
                     <br>
                     <br>
                     
                    <div style="margin-top:0vh;">
                                <div id="a1" style="width:70vw;height:40vh;background-color:red;margin:2vh;"></div>
                    </div>
                         
                     <div style="position:relative;top:-10vh;">
                         
                         
                         <div style="width:70vw;">
                            <div class=" col-md-3" style="float:left;text-align:right;">开始时间：</div><input class=" col-md-2"  onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'});laydate.skin('molv');" id="start_time" />
                            <div class=" col-md-3" style="float:left;text-align:right;">结束时间：</div><input class=" col-md-2" onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'});laydate.skin('dahong');" id="end_time" />
                         </div>
                         
                        <div style="width:70vw;height:5vh;margin-top:5vh;text-align:center">
                            <div class=" col-md-3" style="text-align:right;float:left;">上次连接时间：</div><div class=" col-md-2" id="connect_time" style="float:left;" ></div>
                            <div class=" col-md-3" style="text-align:right;float:left;">上次浇水时间：</div><div class=" col-md-2" id="water_time" style="float:left;"></div>
                            <div class=" col-md-5" style="float:left;text-align:right;">空白数据显示：<input class=" col-md-2" id="show_black" type="checkbox" /></div>
                            <button class="col-md-offset-3 col-md-1" onclick="find_data()" >查询</button>

                         </div>
                     
                      
                     </div>
                </div>
                
            </div>
        </div>

        <script>
            $("#show_black").bootstrapSwitch({ onColor:"info",size:"small"});
        </script>

        
        <script>
        var a1 = echarts.init(document.getElementById('a1'));
        option1 = {
                 color:['#00CC00','#FF9900','#6699FF'],
                title : {
                    text: '芯片详细',
                },
                tooltip : {
                    trigger: 'axis'
                },
                legend: {
                    data:['温度','土壤湿度','空气湿度']
                },
                toolbox: {
                    show : true,
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
                    },
                    {
                       type: 'value',
                        name: '空气湿度',
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
                    },
                    {
                        name:'空气湿度',
                        type:'line',
                        smooth:true,
                        itemStyle: {normal: {areaStyle: {type: 'default'}}},
                         yAxisIndex: 2,
                        data:[]
                    }
                ]
            };
            a1.setOption(option1);
            
        </script>


        <script>
            function  get_last_time(e)
            {
                var chip_id = e.id;
                var ajax_url = "<?php echo U('Data/return_last_time');?>";
                $.get(ajax_url, {chip_id:chip_id}, 
                    function(data){ 
                        result = JSON.parse(data);
                        $("#connect_time").html(result.last_connect);
                        $("#water_time").html(result.last_water);
                    });
            }
			var a = new Object();
            a.id = "<?php echo ($chip_id); ?>";
            get_last_time(a);
        </script>
        <script>
			var chip_id= "<?php echo ($chip_id); ?>";
            function  change_chip(e)
            {
                get_last_time(e);
                chip_id = e.id;
                $("#chip_name_show").text("芯片 "+ chip_id);
                var result ="" ;
                var ajax_url = "<?php echo U('Data/return_data');?>";
                $.get(ajax_url, {chip_id:chip_id}, 
                    function(data){ 
                        result = JSON.parse(data);
                        a1.setOption({
                            xAxis : [{data : result.time}],
                            series : [{data:result.temp},{data:result.hum},{data:result.hum_oil}]
                        })
                    });
            }
            var a = new Object();
            a.id = "<?php echo ($chip_id); ?>";
            change_chip(a);
        </script>
         <script>
            function  find_data(e)
            {
                if(!chip_id)
                    alert("chip_id不能为空");
                var start_time = $("#start_time").val();
                var end_time = $("#end_time").val();
              
                var result ="" ;
                var ajax_url = "<?php echo U('Data/return_data');?>";
                $.get(ajax_url, {chip_id:chip_id,start_time:start_time,end_time:end_time}, 
                    function(data){ 
                        result = JSON.parse(data);
                        a1.setOption({
                            xAxis : [{data : result.time}],
                            series : [{data:result.temp},{data:result.hum},{data:result.hum_oil}]
                        })
                    });
            }
        </script>
   </body>
</html>