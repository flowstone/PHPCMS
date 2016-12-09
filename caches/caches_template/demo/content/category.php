<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="not-ie" lang="en">
<!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>小钟的网站</title>
        <meta name="keywords" content="PHP Mysql">
        <meta name="description" content="好网站！">
        <!-- 新 Bootstrap 核心 CSS 文件 -->
        <link rel="stylesheet" href="../test/css/bootstrap.min.css">
        <!-- 可选的Bootstrap主题文件（一般不用引入） -->
        <link rel="stylesheet" href="../test/css/bootstrap-theme.min.css">
        <script src="../test/js/jquery.min.js"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="../test/js/html5shiv.min.js"></script>
            <script src="../test/js/respond.min.js"></script>
        <![endif]-->
        <style>
            
            *{margin:0;padding:0;list-style-type:none;}
            body{ color:#666; font-family:'微软雅黑' Arial, Helvetica, sans-serif ; padding-top:45px;}
            a,img{border:0;}
            a{ color:#6D6D6D }
            a:hover{ color:#039}
            .nav-top{  padding:0.5em 0;}
            .nav-top table tr td{ border-right: #1B6FA3 solid 1px;}
            .nav-top table tr .boder{ border:none; padding:0 1em 0 1em;}
            .nav-top table tr .boder a{ color:#FFF; font-weight:bold;}
            .nav-top a:hover{ color:#FFF;}
            .nav-top a{ color:#FFF; text-decoration:none; font-family:"微软雅黑";}
            .nav-top ul{ line-height:1.5em; padding-top:10px;}
            
            
            
        </style>
    </head>
    <body>
        <!-- 页面的头部， 固定的不动 -->
        <div class="container-fluid navbar-fixed-top hidden-xs" style=" border-bottom:#CCC solid 1px; background:#F7F7F7">
            <div class="container">
                <div class="pull-left h6">欢迎光临泰牛PHPCMS的网站，内测版本！</div>
                <div class="pull-right h6">
                    <div style="margin-top:-5px;height:20px">
                        <a href="#" style="line-height:20px">登录</a>&nbsp;|&nbsp;
                        <a href="#">注册</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- header部分 -->
        <div class="container">
            <div class="row">
                <!--  md-3 -->
                    <div class="col-md-3 text-center">
                    <a href="javascript:;"><img style="padding:1.0em 0;height: 75px;
    width:220px" src="../test/images/logo.png" alt="欢迎光临泰牛PHPCMS的网站"></a>
                </div>
                <!--  md-5 -->
                <div class="col-md-5" style="padding:1.5em 0 1.5em 0">
                    <form action="#" method="get" target="_blank" class="input-group" >
                        <input type="hidden" name="m" value="search"/>
                        <input type="hidden" name="c" value="index"/>
                        <input type="hidden" name="a" value="init"/>
                        <input type="hidden" name="typeid" value="" id="typeid"/>
                        <input type="hidden" name="siteid" value="1" id="siteid"/>
                        <input type="text" class="form-control" name="q" id="q" autofocus x-webkit-speech />
                        <span class="input-group-btn" >
                            <input type="submit" value="搜 索" class="btn btn-warning" style="background:#055b95;border:1px solid #055b95"/>
                        </span>

    
                    </form>
                </div>
                <!--  md-4 -->
                <div class="col-md-4">
                    <img class="pull-right hidden-xs  hidden-sm"  width="205" height="60" src="http://localhost/phpcms/statics/test/images/PHP_dh.png">
                </div>
            </div>
        </div>
        
        
        <!--  页面导航 -->
        <div class="container-fluid hidden-xs" style="background: #055b95">
            <div class="container nav-top">
                <table width="100%" border="0">
                    <tr>
                        <td style="padding-right:1em;width:60px;"><a class="h4" href="#">网站</br>首页</a></td>
                            <td class="boder" style="30px;"><a class="h4" target="_blank" href="#">新闻</a></td>
                            <td>    
                                <ul class="list-unstyled list-inline">
                                    <li><a  target="_blank" href="#">国内</a></li>
                                    <li><a  target="_blank" href="#">国际</a></li>
                                    <li><a  target="_blank" href="#">军事</a></li>
                                    <li><a  target="_blank" href="#">社会</a></li>
                                    <li><a  target="_blank" href="#">热点</a></li>
                                    <li><a  target="_blank" href="#">聚焦</a></li>
                                    <li><a  target="_blank" href="#">内地</a></li>
                                    <li><a  target="_blank" href="#">港台</a></li>
                                </ul>
                            </td>
                                <td class="boder" style="30px;"><a class="h4" target="_blank" href="#">汽车</a></td>
                            <td>    
                                <ul class="list-unstyled list-inline">
                                        <li><a  target="_blank" href="#">新车</a></li>
                                        <li><a  target="_blank" href="#">导购</a></li>
                                        <li><a  target="_blank" href="#">车型</a></li>
                                        <li><a  target="_blank" href="#">报价</a></li>
                                        <li><a  target="_blank" href="#">图片</a></li>
                                        <li><a  target="_blank" href="#">视频</a></li>
                                        <li><a  target="_blank" href="#">用车</a></li>
                                        <li><a  target="_blank" href="#">自驾</a></li>
                                    </ul>
                            </td>
                                    <td class="boder" style="30px;"><a class="h4" target="_blank" href="#">娱乐</a></td>
                            <td>    
                                <ul class="list-unstyled list-inline">
                                    <li><a  target="_blank" href="">明星</a></li>
                                    <li><a  target="_blank" href="">综艺</a></li>
                                    <li><a  target="_blank" href="">音乐</a></li>
                                    <li><a  target="_blank" href="">红人</a></li>
                                    <li><a  target="_blank" href="">韩娱</a></li>
                                    <li><a  target="_blank" href="">专栏</a></li>
                                    <li><a  target="_blank" href="">图集</a></li>
                                    <li><a  target="_blank" href="">排行</a></li>

                            </ul>
                            </td>
                                 <td class="boder" style="30px;"><a class="h4" target="_blank" href="#">财经</a></td>
                            <td>    
                                <ul class="list-unstyled list-inline">
                                    <li><a  target="_blank" href="#">A 股</a></li>
                                    <li><a  target="_blank" href="#">美股</a></li>
                                    <li><a  target="_blank" href="#">亚太</a></li>
                                    <li><a  target="_blank" href="#">欧洲</a></li>
                                    <li><a  target="_blank" href="#">基金</a></li>
                                    <li><a  target="_blank" href="#">期货</a></li>
                            </ul>
                            </td>
                             <td class="boder" style="30px;"><a class="h4" target="_blank" href="#">教育</a></td>
                            <td>    
                                <ul class="list-unstyled list-inline">
                                        <li><a  target="_blank" href="#">课程</a></li>
                                        <li><a  target="_blank" href="#">小学</a></li>
                                        <li><a  target="_blank" href="#">中学</a></li>
                                        <li><a  target="_blank" href="#">高考</a></li>
                                        <li><a  target="_blank" href="#">考研</a></li>
                                        <li><a  target="_blank" href="#">公考</a></li>
                                        <li><a  target="_blank" href="#">留学</a></li>
                                        <li><a  target="_blank" href="#">学院</a></li>
                                </ul>
                            </td>
                            </tr>
                </table>
            </div>
        </div>
        
        <!-----手机导航微信-------->
       <nav class="navbar navbar-default navbar-fixed-top visible-xs" role="navigation">
            <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">PHPCMS网站</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="">首页</a></li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">新闻 <span class="caret"></span></a>
                             
                            <ul class="dropdown-menu" role="menu">
                                    <li><a  target="_blank" href="#">国内</a></li>
                                    <li><a  target="_blank" href="#">国际</a></li>
                                    <li><a  target="_blank" href="#">军事</a></li>
                                    <li><a  target="_blank" href="#">社会</a></li>
                                    <li><a  target="_blank" href="#">热点</a></li>
                                    <li><a  target="_blank" href="#">聚焦</a></li>
                                    <li><a  target="_blank" href="#">内地</a></li>
                                    <li><a  target="_blank" href="#">港台</a></li>
                                </ul>
                        </li>
                         
                        <li class="dropdown">
                            <a href="http://localhost/phpcms/index.php?m=content&c=index&a=lists&catid=12" class="dropdown-toggle" data-toggle="dropdown">汽车 <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                   <li><a  target="_blank" href="#">新车</a></li>
                                    <li><a  target="_blank" href="#">导购</a></li>
                                    <li><a  target="_blank" href="#">车型</a></li>
                                    <li><a  target="_blank" href="#">报价</a></li>
                                    <li><a  target="_blank" href="#">图片</a></li>
                                    <li><a  target="_blank" href="#">视频</a></li>
                                    <li><a  target="_blank" href="#">用车</a></li>
                                    <li><a  target="_blank" href="#">自驾</a></li>
                            </ul>
                    </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">娱乐 <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                    <li><a  target="_blank" href="">明星</a></li>
                                    <li><a  target="_blank" href="">综艺</a></li>
                                    <li><a  target="_blank" href="">音乐</a></li>
                                    <li><a  target="_blank" href="">红人</a></li>
                                    <li><a  target="_blank" href="">韩娱</a></li>
                                    <li><a  target="_blank" href="">专栏</a></li>
                                    <li><a  target="_blank" href="">图集</a></li>
                                    <li><a  target="_blank" href="">排行</a></li>
                        </ul>
                </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">财经 <span class="caret"></span></a>
                             
                            <ul class="dropdown-menu" role="menu">
                                    <li><a  target="_blank" href="#">A 股</a></li>
                                    <li><a  target="_blank" href="#">美股</a></li>
                                    <li><a  target="_blank" href="#">亚太</a></li>
                                    <li><a  target="_blank" href="#">欧洲</a></li>
                                    <li><a  target="_blank" href="#">基金</a></li>
                                    <li><a  target="_blank" href="#">期货</a></li>
                            </ul>
                    </li>
                         
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">教育 <span class="caret"></span></a>
                             
                            <ul class="dropdown-menu" role="menu">
                                 
                                <li><a  target="_blank" href="#">课程</a></li>
                                        <li><a  target="_blank" href="#">小学</a></li>
                                        <li><a  target="_blank" href="#">中学</a></li>
                                        <li><a  target="_blank" href="#">高考</a></li>
                                        <li><a  target="_blank" href="#">考研</a></li>
                                        <li><a  target="_blank" href="#">公考</a></li>
                                        <li><a  target="_blank" href="#">留学</a></li>
                                        <li><a  target="_blank" href="#">学院</a></li>
                            </ul>
                    </li>
            </ul>
            </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>    
        


    <div class="container" style="margin-top:10px;">
        <div class="row well well-sm" style="background:#FFF;"> 
            <div class="col-md-6 col-sm-6 panel panel-info" style="background:url(http://localhost/phpcms/statics/images/v9/cat_hot_bg.png) left top no-repeat ;height:375px">        
                <div class="content">
                    <h4>&nbsp;&nbsp;<a class="text-info" href="#" target="_blank">怀化市质监局精准服务民生计量 发现计量作弊可拨</a></h4>
                    <p><img class="pull-left" style="margin-right:10px" src="../test/images/234.jpg" width="90" height="60" />掌上怀化客户端讯（记者 史琴 通讯员 周武） 为进一步规范市场秩序，减少计量纠纷，</p>
                    <div class="clearfix"><hr /></div>
                     <h4>&nbsp;&nbsp;<a class="text-info" href="#" target="_blank">怀化市质监局精准服务民生计量 发现计量作弊可拨</a></h4>
                    <p><img class="pull-left" style="margin-right:10px" src="../test/images/234.jpg" width="90" height="60" />掌上怀化客户端讯（记者 史琴 通讯员 周武） 为进一步规范市场秩序，减少计量纠纷，</p>
                    <div class="clearfix"><hr /></div>
                     <h4>&nbsp;&nbsp;<a class="text-info" href="#" target="_blank">怀化市质监局精准服务民生计量 发现计量作弊可拨</a></h4>
                    <p><img class="pull-left" style="margin-right:10px" src="../test/images/234.jpg" width="90" height="60" />掌上怀化客户端讯（记者 史琴 通讯员 周武） 为进一步规范市场秩序，减少计量纠纷，</p>
                    <div class="clearfix"><hr /></div>
                                         
            </div>
            </div>
    
            <div class="col-md-6 col-sm-6">
                <div class="panel panel-info" style="background:#FFF;">
                    <div class="panel-body">
                            <div class="col-auto" >
                            <!--开始-->
                                <div class="title" style="padding:5px;margin-bottom:8px;border-bottom:#eee solid 1px;">
                                <img style="margin-right:8px;" class="pull-left" src="../test/images/123.jpg" width="82" height="50" />
                                <p ><b><a class="text-info" href="#" >乐为甘露润桃李 记怀化二中关工委主任张春林_都市新</a></b></br>红网怀化站 怀化新闻网讯（通...</p>
                                <div class="clearfix"></div>
                                </div>
                                <!--结束-->
                                 <div class="title" style="padding:5px;margin-bottom:8px;border-bottom:#eee solid 1px;">
                                <img style="margin-right:8px;" class="pull-left" src="../test/images/123.jpg" width="82" height="50" />
                                <p ><b><a class="text-info" href="#" >乐为甘露润桃李 记怀化二中关工委主任张春林_都市新</a></b></br>红网怀化站 怀化新闻网讯（通...</p>
                                <div class="clearfix"></div>
                                </div>
                                 <div class="title" style="padding:5px;margin-bottom:8px;border-bottom:#eee solid 1px;">
                                <img style="margin-right:8px;" class="pull-left" src="../test/images/123.jpg" width="82" height="50" />
                                <p ><b><a class="text-info" href="#" >乐为甘露润桃李 记怀化二中关工委主任张春林_都市新</a></b></br>红网怀化站 怀化新闻网讯（通...</p>
                                <div class="clearfix"></div>
                                </div>
                                 <div class="title" style="padding:5px;margin-bottom:8px;border-bottom:#eee solid 1px;">
                                <img style="margin-right:8px;" class="pull-left" src="../test/images/123.jpg" width="82" height="50" />
                                <p ><b><a class="text-info" href="#" >乐为甘露润桃李 记怀化二中关工委主任张春林_都市新</a></b></br>红网怀化站 怀化新闻网讯（通...</p>
                                <div class="clearfix"></div>
                                </div>
                                 <div class="title" style="padding:5px;margin-bottom:8px;border-bottom:#eee solid 1px;">
                                <img style="margin-right:8px;" class="pull-left" src="../test/images/123.jpg" width="82" height="50" />
                                <p ><b><a class="text-info" href="#" >乐为甘露润桃李 记怀化二中关工委主任张春林_都市新</a></b></br>红网怀化站 怀化新闻网讯（通...</p>
                                <div class="clearfix"></div>
                                </div>
                            </div>
                </div>
                </div>
            </div>  
        <!--第二屏-->

               <div class="col-md-4 col-sm-6" style="margin-bottom:8px;">
                <h2 class="h4" style="border-bottom:#055b95 solid 3px; padding-left:0.5em; padding-bottom:0.3em">
                    <b class="pull-left">国内</b><a style=" font-size:12px; margin-top:5px" class="pull-right" href="#">>>更多</a>
                    <div class="clearfix"></div> 
                </h2>
                <div class="panel-body wxfl-li">
                    <a href="#" target="_blank">
                    <img  src="../test/images/3.jpg" width="270" height="60"/></a>
                    <ul class="list-unstyled" style="line-height:2em;">
                            <li>
                                <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                            </li>
                               <li>
                                <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                            </li>
                               <li>
                                <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                            </li>
                               <li>
                                <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                            </li>
                               <li>
                                <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                            </li>
                               <li>
                                <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                            </li>
                               <li>
                                <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                            </li>
                               <li>
                                <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                            </li>
                               <li>
                                <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                            </li>
                               <li>
                                <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                            </li>

                    </ul>
                </div>
            </div>
                <div class="col-md-4 col-sm-6" style="margin-bottom:8px;">
                <h2 class="h4" style="border-bottom:#055b95 solid 3px; padding-left:0.5em; padding-bottom:0.3em">
                    <b class="pull-left">国际</b><a style=" font-size:12px; margin-top:5px" class="pull-right" href="#">>>更多</a>
                    <div class="clearfix"></div> 
                </h2>
                <div class="panel-body wxfl-li">
                         <a href="#" target="_blank">
                            <img  src="../test/images/4.png" width="270" height="60"/></a>
                            <ul class="list-unstyled" style="line-height:2em;">
                                <li><a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                                </li>
                                 <li><a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                                </li>
                                 <li><a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                                </li>
                                 <li><a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                                </li>
                                 <li><a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                                </li>
                                 <li><a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                                </li>
                                 <li><a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                                </li>
                                 <li><a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                                </li> <li><a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                                </li>
                                 <li><a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                                </li>
          
                            </ul>
                </div>
            </div>
                <div class="col-md-4 col-sm-6" style="margin-bottom:8px;">
                <h2 class="h4" style="border-bottom:#055b95 solid 3px; padding-left:0.5em; padding-bottom:0.3em">
                    <b class="pull-left">军事</b><a style=" font-size:12px; margin-top:5px" class="pull-right" href="#">>>更多</a>
                    <div class="clearfix"></div> 
                </h2>
                <div class="panel-body wxfl-li">
                    <a href="#" target="_blank" >
                    <img  src="../test/images/5.png" width="270" height="60"/></a>
                    <ul class="list-unstyled" style="line-height:2em;">
                            <li>
                                <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                            </li>
                             <li>
                                <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                            </li>
                             <li>
                                <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                            </li>
                             <li>
                                <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                            </li>
                             <li>
                                <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                            </li>
                             <li>
                                <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                            </li>
                             <li>
                                <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                            </li>
                             <li>
                                <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                            </li>
                             <li>
                                <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                            </li>
                             <li>
                                <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                            </li>
                    </ul>
                </div>
            </div>
                <div class="col-md-4 col-sm-6" style="margin-bottom:8px;">
                <h2 class="h4" style="border-bottom:#055b95 solid 3px; padding-left:0.5em; padding-bottom:0.3em">
                    <b class="pull-left">社会</b><a style=" font-size:12px; margin-top:5px" class="pull-right" href="#">>>更多</a>
                    <div class="clearfix"></div> 
                </h2>
                <div class="panel-body wxfl-li">
                    <ul class="list-unstyled" style="line-height:2em;">
                          <li>
                            <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                        </li>
                          <li>
                            <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                        </li>
                          <li>
                            <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                        </li>
                          <li>
                            <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                        </li>
                          <li>
                            <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                        </li>
                          <li>
                            <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                        </li>
                          <li>
                            <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                        </li>
                          <li>
                            <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6" style="margin-bottom:8px;">
                <h2 class="h4" style="border-bottom:#055b95 solid 3px; padding-left:0.5em; padding-bottom:0.3em">
                    <b class="pull-left">内地</b><a style=" font-size:12px; margin-top:5px" class="pull-right" href="#">>>更多</a>
                    <div class="clearfix"></div> 
                </h2>
                <div class="panel-body wxfl-li">
                    <ul class="list-unstyled" style="line-height:2em;">
                          <li>
                            <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                        </li>
                          <li>
                            <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                        </li>
                          <li>
                            <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                        </li>
                          <li>
                            <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                        </li>
                          <li>
                            <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                        </li>
                          <li>
                            <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                        </li>
                          <li>
                            <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                        </li>
                          <li>
                            <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                        </li>
                    </ul>
                    
                </div>
            </div>
                <div class="col-md-4 col-sm-6" style="margin-bottom:8px;">
                <h2 class="h4" style="border-bottom:#055b95 solid 3px; padding-left:0.5em; padding-bottom:0.3em">
                    <b class="pull-left">港台</b><a style=" font-size:12px; margin-top:5px" class="pull-right" href="#">>>更多</a>
                    <div class="clearfix"></div> 
                </h2>
                <div class="panel-body wxfl-li">
                    <ul class="list-unstyled" style="line-height:2em;">
                                <li>
                            <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                        </li>
                          <li>
                            <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                        </li>
                          <li>
                            <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                        </li>
                          <li>
                            <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                        </li>
                          <li>
                            <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                        </li>
                          <li>
                            <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                        </li>
                          <li>
                            <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                        </li>
                          <li>
                            <a  class="h6" href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                        </li>
                      </ul>
                </div>
            </div>
                    </div>
    </div>
    
    <div class="container-fluid" style="background: #FDFDFD; margin-top:1em; border-top:#CCC solid 1px; ">
        <div class="container text-center" style="line-height:2em; padding-top:1em">
            
                    
            <a href="http://localhost/phpcms/index.php?m=link" target="_blank">友情链接</a>
            <br />
            Powered by <strong><a href="http://www.lampbrother.net.com" target="_blank">泰牛程序员PHPCMS</a></strong> <em>V9.6.0</em> &copy; 2014 <img src="http://localhost/phpcms/statics/images/copyright.gif"/>

        </div>
    </div>

        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="/phpcms/statics/test/js/bootstrap.min.js"></script>
        

    </body>
</html>