<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="not-ie" lang="en">
<!--<![endif]-->

    <head>
        <meta charset="utf-8">
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
        


        
        
    <style>
        img{max-width:100%;max-height:100%;}
    </style>
    <div class="container">
    <div class="row">
        <p class="well-sm">
            <strong>当前位置：</strong>
                <a href="#">首页</a>
                <span> &gt; </span>
                <a href="#">新闻</a> > <a href="#">国内</a> >  正文
        </p>
        <div class="col-md-8 col-sm-12">
            <div class="well-sm" style="border:#CCC solid 1px;">
                <div class="text-center">
                     <h1 class="h3">文章标题！文章标题！文章标题！文章标题！文章标题！</h1>
                    <span>发布时间：2016-07-29 16:24:00&nbsp;&nbsp;&nbsp;来源：新浪&nbsp;&nbsp;&nbsp;评论：<a href="#comment_iframe" id="comment">100</a> 点击：</span><span id="hits"></span>
                </div>
            
                    <blockquote style="background:#F3FDE1">
                        <p>内容描述！内容描述！内容描述！内容描述！内容描述！内容描述！内容描述！</p>
                    </blockquote>
                        
                <div class="content">
                        好久没有来写东西了。
                        夏洛特烦恼，刷了两遍
                        故事讲述中年男人不得志的故事，
                        生活迷茫，得不到自己想要的生活，
                        然而，上天给你一次重新选择的机会，你得到的一定是你自己想要的生活吗？
                        马冬梅，就像普通的生活，没有激情，没有浪漫，你并不想要马冬梅。
                        秋雅，白富美，新鲜，刺激，你以为你要的是秋雅，当你得到秋雅的时候，你发现马冬梅更好。
                        生活就是这样，爱情更是如此。每个人都想过要更好的另一半，要长得好看，要气质。
                        每个人都想过，如果当初那样，现在是不是不会这样？每天活在这种意淫中，得到了什么？又失去了什么？
                        什么都没有得到，而失去了现在身边的人，每天和身边的人在一起，却想着梦里的不切实际。
                        我觉得这个电影值得年轻人看，它更好的表现出了两个人刚大学毕业，男生不得志，而女生不离不弃。
                        说句难听的，马冬梅是真的爱夏洛，不然的话，一个男人就这样每天抱着自己的梦想活在自己的世界中。没有几个女生
                    </div>

                <div id="pages" class="text-c" style="margin-top:20px"></div>
            
               <!-- <p style="margin-bottom:10px">
                    <strong>相关热词搜索：</strong>
                </p> -->
                <p class="f14">
                    <strong>上一篇：</strong><a href="#">怀化市政：为一线工人送清凉 确保道路平整排水畅通_都市</a><br />
                    <strong>下一篇：</strong><a href="#">怀化人｜湘西水哥的写意岩霸鱼_都市新闻_新闻中心_怀化新</a>
                </p>
                 <div class="bk15"></div>
                <div class="Article-Tool">
                      分享到：
                      <img src="http://v.t.qq.com/share/images/s/weiboicon16.png" style="padding-bottom:3px;" onclick="postToWb();" class="cu" title="分享到腾讯微博"/>
                      
                      <script type="text/javascript">
                            function postToWb(){
                                var _t = encodeURI(document.title);
                                var _url = encodeURIComponent(document.location);
                                var _appkey = encodeURI("cba3558104094dbaa4148d8caa436a0b");
                                var _pic = encodeURI('http://upload.0745news.cn/2016/0729/1469779817470.jpg');
                                var _site = '';
                                var _u = 'http://v.t.qq.com/share/share.php?url='+_url+'&appkey='+_appkey+'&site='+_site+'&pic='+_pic+'&title='+_t;
                                window.open( _u,'', 'width=700, height=680, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, location=yes, resizable=no, status=no' );
                            }
                    </script>
                      <span id='favorite'>
                        <a href="javascript:;" onclick="add_favorite('酷热过36度  怀化体育中心游泳馆日高峰超千人次以上_都');" class="t6">收藏</a>
                      </span>
                </div>
                    <div class="bk10"></div>
                        <iframe src="http://localhost/phpcms/index.php?m=comment&c=index&a=init&commentid=content_10-120-1&iframe=1" width="100%" height="300px" id="comment_iframe" frameborder="0" scrolling="no"></iframe>
                  <div class="box" >
                            <h5>评论排行</h5>
                            <ul class="content list blue f14 row-2">
                                <li>
                                    <a href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                                    <span>(900)</span>
                                </li>
                                    <li>
                                        <a href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                                        <span>(100)</span>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                                        <span>(100)</span>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                                        <span>(100)</span>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">怀化将组建打击治理电信网络新型测试页面测试测试...</a>
                                        <span>(100)</span>
                                    </li>
                            </ul>
                    </div>
            </div>  
        </div>
            
        <div class="col-md-4 col-sm-12 hidden-xs">
            <div class="well-sm" style="border:#CCC solid 1px; margin-bottom:1em">
                <h1 class="h4" style=" border-bottom: #F60 solid 3px;padding-left:0.5em; padding-bottom:0.3em ">
                 
                <b>频道总排行</b>
                </h1>
                <ul class="list-unstyled" style="line-height:1.8em">
                <li>
                    ▷<a class="h6" href="#" target="_blank" >怀化将组建打击治理电信网络新型违怀化将组建打...</a>
                </li>
                <li>
                    ▷<a class="h6" href="#" target="_blank" >怀化将组建打击治理电信网络新型违怀化将组建打...</a>
                </li>
                <li>
                    ▷<a class="h6" href="#" target="_blank" >怀化将组建打击治理电信网络新型违怀化将组建打...</a>
                </li>
                <li>
                    ▷<a class="h6" href="#" target="_blank" >怀化将组建打击治理电信网络新型违怀化将组建打...</a>
                </li>
                <li>
                    ▷<a class="h6" href="#" target="_blank" >怀化将组建打击治理电信网络新型违怀化将组建打...</a>
                </li>
                <li>
                    ▷<a class="h6" href="#" target="_blank" >怀化将组建打击治理电信网络新型违怀化将组建打...</a>
                </li>
                <li>
                    ▷<a class="h6" href="#" target="_blank" >怀化将组建打击治理电信网络新型违怀化将组建打...</a>
                </li>
                <li>
                    ▷<a class="h6" href="#" target="_blank" >怀化将组建打击治理电信网络新型违怀化将组建打...</a></li>
                <li>▷<a class="h6" href="#" target="_blank" >怀化将组建打击治理电信网络新型违怀化将组建打...</a></li>
                  </ul>
            </div>
      
            <div class="well-sm" style="border:#CCC solid 1px; margin-bottom:1em">
                <h1 class="h4" style=" border-bottom: #F60 solid 3px;padding-left:0.5em; padding-bottom:0.3em ">
                    <b>频道本月排行</b>
                </h1>
            <ul class="list-unstyled" style="line-height:1.8em">
                <li>
                <span class="badge">8</span>&nbsp;&nbsp;
                <a class="h6" href="#" class="title" >怀化将组建打击治理电信网络新型违怀化将组建打...</a>
                </li>
                 <li>
                <span class="badge">7</span>&nbsp;&nbsp;
                <a class="h6" href="#" class="title" >怀化将组建打击治理电信网络新型违怀化将组建打...</a>
                </li>
                 <li>
                <span class="badge">6</span>&nbsp;&nbsp;
                <a class="h6" href="#" class="title" >怀化将组建打击治理电信网络新型违怀化将组建打...</a>
                </li>
                 <li>
                <span class="badge">5</span>&nbsp;&nbsp;
                <a class="h6" href="#" class="title" >怀化将组建打击治理电信网络新型违怀化将组建打...</a>
                </li>
                 <li>
                <span class="badge">4</span>&nbsp;&nbsp;
                <a class="h6" href="#" class="title" >怀化将组建打击治理电信网络新型违怀化将组建打...</a>
                </li>
                 <li>
                <span class="badge">3</span>&nbsp;&nbsp;
                <a class="h6" href="#" class="title" >怀化将组建打击治理电信网络新型违怀化将组建打...</a>
                </li>
                 <li>
                <span class="badge">2</span>&nbsp;&nbsp;
                <a class="h6" href="#" class="title" >怀化将组建打击治理电信网络新型违怀化将组建打...</a>
                </li>
                 <li>
                <span class="badge">1</span>&nbsp;&nbsp;
                <a class="h6" href="#" class="title" >怀化将组建打击治理电信网络新型违怀化将组建打...</a>
                </li>
                                       
            </ul>
            </div>        
        </div>
    </div>
    </div>
<!--底部开始-->
<script type="text/javascript">
<!--
    function show_ajax(obj) {
        var keywords = $(obj).text();
        var offset = $(obj).offset();
        var jsonitem = '';
        $.getJSON("http://localhost/phpcms/index.php?m=content&c=index&a=json_list&type=keyword&modelid=12&id=120&keywords="+encodeURIComponent(keywords),
                function(data){
                var j = 1;
                var string = "<div class='point key-float'><div style='position:relative'><div class='arro'></div>";
                string += "<a href='JavaScript:;' onclick='$(this).parent().parent().remove();' hidefocus='true' class='close'><span>关闭</span></a><div class='contents f12'>";
                if(data!=0) {
                  $.each(data, function(i,item){
                    j = i+1;
                    jsonitem += "<a href='"+item.url+"' target='_blank'>"+j+"、"+item.title+"</a><BR>";
                    
                  });
                    string += jsonitem;
                } else {
                    string += '没有找到相关的信息！';
                }
                    string += "</div><span class='o1'></span><span class='o2'></span><span class='o3'></span><span class='o4'></span></div></div>";     
                    $(obj).after(string);
                    $('.key-float').mouseover(
                        function (){
                            $(this).siblings().css({"z-index":0})
                            $(this).css({"z-index":1001});
                        }
                    )
                    $(obj).next().css({ "left": +offset.left-100, "top": +offset.top+$(obj).height()+12});
                });
    }

    function add_favorite(title) {
        $.getJSON('http://localhost/phpcms/api.php?op=add_favorite&title='+encodeURIComponent(title)+'&url='+encodeURIComponent(location.href)+'&'+Math.random()+'&callback=?', function(data){
            if(data.status==1)  {
                $("#favorite").html('收藏成功');
            } else {
                alert('请登录');
            }
        });
    }

$(function(){
  $('#Article .content img').LoadImage(true, 660, 660,'http://localhost/phpcms/statics/images/s_nopic.gif');    
})
//-->
</script>
<script language="JavaScript" src="http://localhost/phpcms/api.php?op=count&id=120&modelid=12"></script>
    <div class="container-fluid" style="background: #FDFDFD; margin-top:1em; border-top:#CCC solid 1px; ">
        <div class="container text-center" style="line-height:2em; padding-top:1em">
            Copyright <span style="font-family:黑体;font-size:20px">&copy;</span> 2016 PHPCMS测试 All Rights Reserved.备案信息
        </div>
    </div>
     <script src="../test/js/bootstrap.min.js"></script>
    </body>
</html>