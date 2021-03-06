<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="not-ie" lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $SEO['site_title'];?></title>
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
    <meta name="description" content="<?php echo $SEO['description'];?>">
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="<?php echo WEB_PATH;?>statics/test/css/bootstrap.min.css">
    <!-- 可选的Bootstrap主题文件（一般不用引入） -->
    <link rel="stylesheet" href="<?php echo WEB_PATH;?>statics/test/css/bootstrap-theme.min.css">

    <script src="<?php echo WEB_PATH;?>statics/test/js/jquery.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php echo WEB_PATH;?>statics/test/js/html5shiv.min.js"></script>
    <script src="<?php echo WEB_PATH;?>statics/test/js/respond.min.js"></script>
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
<!--<?php echo VAR_DUMP($SEO);?>-->
<!-- 页面的头部， 固定的不动 -->
<div class="container-fluid navbar-fixed-top hidden-xs" style=" border-bottom:#CCC solid 1px; background:#F7F7F7">
    <div class="container">
        <div class="pull-left h6">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=651fc963ff0d3aaeacd1e657bae54776&pos=top_title\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'top_title',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
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
            <a href="javascript:;">
                <!--<img style="padding:1.0em 0;height: 75px;-->
    <!--width:220px" src="<?php echo WEB_PATH;?>statics/test/images/logo.png" alt="欢迎光临PHPCMS的网站">-->
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=98e911fb3ab44f68f53a6dd29c566b33&pos=logo\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'logo',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </a>
        </div>
        <!--  md-5 -->
        <div class="col-md-5" style="padding:1.5em 0 1.5em 0">
            <form action="#" method="get" target="_blank" class="input-group" >
                <input type="hidden" name="m" value="search"/>
                <input type="hidden" name="c" value="index"/>
                <input type="hidden" name="a" value="init"/>
                <input type="hidden" name="typeid" value="<?php echo $typeid;?>" id="typeid"/>
                <input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
                <input type="text" class="form-control" name="q" id="q" autofocus x-webkit-speech />
                <span class="input-group-btn" >
                            <input type="submit" value="搜 索" class="btn btn-warning" style="background:#055b95;border:1px solid #055b95"/>
                        </span>


            </form>
        </div>
        <!--  md-4 -->
        <div class="col-md-4">
            <img class="pull-right hidden-xs  hidden-sm"  width="205" height="60" src="<?php echo WEB_PATH;?>statics/test/images/PHP_dh.png">
        </div>
    </div>
</div>


<!--  页面导航 -->
<div class="container-fluid hidden-xs" style="background: #055b95">
    <div class="container nav-top">
        <table width="100%" border="0">
            <tr>
                <td style="padding-right:1em;width:60px;"><a class="h4" href="<?php echo $url;?>">网站</br>首页</a></td>

                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=14d2e7dfb3e6565eb692e7f13dd78788&action=category&catid=0&order=catid+ASC&siteid=%24siteid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','order'=>'catid ASC','siteid'=>$siteid,'limit'=>'20',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                        <td class="boder" style="30px;"><a class="h4" target="_blank" href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></td>
                        <td>
                        <ul class="list-unstyled list-inline">
                            <?php $n=1;if(is_array(subcat($v['catid']))) foreach(subcat($v['catid']) AS $z) { ?>
                                <li><a  target="_blank" href="<?php echo $z['url'];?>"><?php echo $z['catname'];?></a></li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                </td>
                     <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
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
            <a class="navbar-brand" href="#"><?php echo $SEO['site_title'];?></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo $url;?>">首页</a></li>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=14d2e7dfb3e6565eb692e7f13dd78788&action=category&catid=0&order=catid+ASC&siteid=%24siteid\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','order'=>'catid ASC','siteid'=>$siteid,'limit'=>'20',));}?>
                <li class="dropdown">
                 <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                    <a href="<?php echo $v['url'];?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo $v['catname'];?> <span class="caret"></span></a>

                    <ul class="dropdown-menu" role="menu">
                        <?php $n=1;if(is_array(subcat($v['catid']))) foreach(subcat($v['catid']) AS $z) { ?>
                        <li><a  target="_blank" href="<?php echo $z['url'];?>"><?php echo $z['catname'];?></a></li>
                        <?php $n++;}unset($n); ?>
                    </ul>
                 <?php $n++;}unset($n); ?>
                </li>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

