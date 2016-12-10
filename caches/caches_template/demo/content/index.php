<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
    <!-- 图片轮播 -->
    <script src="<?php echo WEB_PATH;?>statics/test/js/bootstrap-carousel.js"></script>
    <div class="container" style="margin-top:1em">
        <div class="row">
            <div class="col-md-4 hidden-xs col-sm-6 well well-sm" style="background:#fff">
                
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4e9b7153b29f6ab19fdb0990ece16218&action=position&posid=1&num=8&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','limit'=>'8',));}?>
                <div id="myCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                    <?php $nn=0?>
                   <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                        <li data-target="#myCarousel" data-slide-to="<?php echo $nn;?>" <?php if($nn==0) { ?>class="active"><?php } ?></li>
                        <?php $nn++?>
                    <?php $n++;}unset($n); ?>
                </ol>
    
                <!-- Carousel items -->
                <div class="carousel-inner" style="height:320px">
                    <?php $n=1;if(is_array($data)) foreach($data AS $z) { ?>
                            <div class="item <?php if($n==1) { ?>active<?php } ?>">
                                <a href="<?php echo $z['url'];?>" target="_blank">
                                     <img src="<?php echo thumb($z['thumb'],373,320);?>" alt="<?php echo $z['title'];?>" width="373" height="320" />
                                </a>
                            </div>
                    <?php $n++;}unset($n); ?>
                </div>
                <!-- Carousel nav -->
                <a class="carousel-control left" href="#myCarousel"  data-slide="prev">&lsaquo;</a>
                <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                </div>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        <script>  $('.carousel').carousel({ interval: 2000 })  </script>
            </div>
            
            
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-8 hidden-xs hidden-sm">
                        <div class="well-sm" style="border:#CCC solid 1px; background: #FAFFF7;" >
                        <ul class="list-unstyled list-inline" style="line-height:1.8em">
                        </ul>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c73eda679806b3aebf67fa29eb2a7811&action=positoin&posid=2&num=12\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'positoin')) {$data = $content_tag->positoin(array('posid'=>'2','limit'=>'12',));}?>
                        <ul class="list-unstyled list-inline" style="line-height:1.8em">
                            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                            <li><a class="h6" title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>"><?php echo str_cut($v['title'],80);?></a></li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </div>
                    </div>

                    <div class="col-md-4  col-sm-5 col-sm-offset-1 col-md-offset-0" style="border:#CCC solid 1px;height:340px">
                        <h2 class="h4" style=" border-bottom:#055b95 solid 3px; padding-left:0.5em; padding-bottom:0.3em"><b>热点新闻</b></h2>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5f8adb485c7caa98f4dd0ad4c78be749&action=postition&posid=10&num=12&order=listorder+DESC&catid=15\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'postition')) {$data = $content_tag->postition(array('posid'=>'10','order'=>'listorder DESC','catid'=>'15','limit'=>'12',));}?>
                        <ul class="list-unstyled" style="line-height:1.8em">
                            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                            <li><a class="h6" title="<?php echo $v['title'];?>" href="<?php echo $v['url'];?>"><?php echo str_cut($v['title'],60);?></a></li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container">
        <!-- 第二行 -->
        <div class="row" style="border:#CCC solid 1px;">

        </div>
        <!-- 第三行 -->
        <div class="row" style="border:#CCC solid 1px; margin-top:1em">
                        <div class="col-md-12">
                <h2 class="h4" style="border-bottom:#055b95 solid 3px; padding-left:0.5em; padding-bottom:0.3em">
                    <b class="pull-left">我爱看图</b><a style=" font-size:12px; margin-top:5px" class="pull-right" href="#">>>更多</a>
                    <div class="clearfix"></div>
                </h2>
                        <div class="col-md-2 col-sm-3 col-xs-6 text-center" style="margin-bottom:5px">
                            <a class="img-thumbnail" style="width:140px; height:140px;" href="#" title="标题内容">
                                <img src="<?php echo WEB_PATH;?>statics/test/images/234.jpg"  title="标题内容" width="100%" height="130"/></a>
                            <p><a href="">怀化市质监局精准...</a></p>
                        </div>
                         <div class="col-md-2 col-sm-3 col-xs-6 text-center" style="margin-bottom:5px">
                            <a class="img-thumbnail" style="width:140px; height:140px;" href="#" title="标题内容">
                                <img src="<?php echo WEB_PATH;?>statics/test/images/123.jpg"  title="标题内容" width="100%" height="130"/></a>
                            <p><a href="">怀化市质监局精准...</a></p>
                        </div>
                         <div class="col-md-2 col-sm-3 col-xs-6 text-center" style="margin-bottom:5px">
                            <a class="img-thumbnail" style="width:140px; height:140px;" href="#" title="标题内容">
                                <img src="<?php echo WEB_PATH;?>statics/test/images/234.jpg"  title="标题内容" width="100%" height="130"/></a>
                            <p><a href="">怀化市质监局精准...</a></p>
                        </div>
                         <div class="col-md-2 col-sm-3 col-xs-6 text-center" style="margin-bottom:5px">
                            <a class="img-thumbnail" style="width:140px; height:140px;" href="#" title="标题内容">
                                <img src="<?php echo WEB_PATH;?>statics/test/images/123.jpg"  title="标题内容" width="100%" height="130"/></a>
                            <p><a href="">怀化市质监局精准...</a></p>
                        </div>
                         <div class="col-md-2 col-sm-3 col-xs-6 text-center" style="margin-bottom:5px">
                            <a class="img-thumbnail" style="width:140px; height:140px;" href="#" title="标题内容">
                                <img src="<?php echo WEB_PATH;?>statics/test/images/234.jpg"  title="标题内容" width="100%" height="130"/></a>
                            <p><a href="">怀化市质监局精准...</a></p>
                        </div>
                         <div class="col-md-2 col-sm-3 col-xs-6 text-center" style="margin-bottom:5px">
                            <a class="img-thumbnail" style="width:140px; height:140px;" href="#" title="标题内容">
                                <img src="<?php echo WEB_PATH;?>statics/test/images/123.jpg"  title="标题内容" width="100%" height="130"/></a>
                            <p><a href="">怀化市质监局精准...</a></p>
                        </div>

                 </div>
                    </div>

        <!-------列表内容区-------->
        <div class="row " style="margin-top:1em; background: #eee">
            <div class="col-md-8 well-sm"  >
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                                                <div class="well-sm" style=" margin-bottom:1em; background:#FFF">
                            <h2 class="h4" style=" border-bottom:#055b95 solid 3px; padding-left:0.5em; padding-bottom:0.3em">
                                <b class="pull-left">聚焦事件</b><a style=" font-size:12px; margin-top:5px" class="pull-right" href="#">>>更多</a>
                                <div class="clearfix"></div>
                            </h2>

                            <ul class="list-unstyled" style="line-height:1.8em">
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">

                        <div class="well-sm" style="background:#FFF; margin-bottom:1em">
                            <h2 class="h4" style=" border-bottom:#055b95 solid 3px; padding-left:0.5em; padding-bottom:0.3em">
                                <b class="pull-left">汽车推荐</b><a style=" font-size:12px; margin-top:5px" class="pull-right" href="#">>>更多</a>
                                <div class="clearfix"></div>
                            </h2>

                            <ul class="list-unstyled" style="line-height:1.8em">
                                                          <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>

                             </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">

                        <div class="well-sm" style="background:#FFF;">
                            <h2 class="h4" style=" border-bottom:#055b95 solid 3px; padding-left:0.5em; padding-bottom:0.3em">
                                <b class="pull-left">娱乐资讯</b><a style=" font-size:12px; margin-top:5px" class="pull-right" href="#">>>更多</a>
                                <div class="clearfix"></div>
                            </h2>

                            <ul class="list-unstyled" style="line-height:1.8em">
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">

                        <div class="well-sm" style="background:#FFF">
                            <h2 class="h4" style=" border-bottom:#055b95 solid 3px; padding-left:0.5em; padding-bottom:0.3em">
                                <b class="pull-left">财经报道</b><a style=" font-size:12px; margin-top:5px" class="pull-right" href="#">>>更多</a>
                                <div class="clearfix"></div>
                            </h2>
                            <ul class="list-unstyled" style="line-height:1.8em">
                                     <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4  well-sm">
                 <div class="row">
                    <div class="col-md-12 col-sm-6">
                        <div class="well-sm" style="border:#CCC solid 1px; background:#F9F9F9; margin-bottom:1em">
                            <h2 class="h4" style=" border-bottom: #F60 solid 3px;padding-left:0.5em; padding-bottom:0.3em ">
                                <b class="pull-left">热点</b><a style=" font-size:12px; margin-top:5px" class="pull-right" href="">>>更多</a>
                                <div class="clearfix"></div>
                            </h2>

                            <ul class="list-unstyled" style="line-height:1.8em">

                                 <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                             </ul>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-6">
                        <div class="well-sm" style="border:#CCC solid 1px; background:#F9F9F9">
                            <h2 class="h4" style=" border-bottom: #F60 solid 3px;padding-left:0.5em; padding-bottom:0.3em">
                                <b class="pull-left">热门评论</b><a style=" font-size:12px; margin-top:5px" class="pull-right" href="#">>>更多</a>
                                <div class="clearfix"></div>
                            </h2>

                            <ul class="list-unstyled" style="line-height:1.8em">
                                 <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                                <li>
                                    <a class="h6" href="#" title="标题内容">怀化将组建打击治理电信网络新型违法犯罪分中...</a>
                                </li>
                           </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container well-sm" style="margin-top:1em; border:solid #CCC 1px;">
        <h2 class="h4" style=" border-bottom:#055b95 solid 3px; padding-left:0.5em; padding-bottom:0.3em">
            <b class="pull-left">友情链接</b>
            <!-- <a style=" font-size:12px; margin-top:5px" class="pull-right" href="http://localhost/phpcms/index.php?m=link&siteid=1" hidefocus="true">>>更多</a> -->
            <div  class="clearfix"></div>
        </h2>

        <ul class="list-unstyled list-inline">
                 <li>
                    <a href="#" title="友情链接" target="_blank">
                        <img src="<?php echo WEB_PATH;?>statics/test/images/1.gif" width="88" height="31" />
                    </a>
                </li>
                 <li>
                    <a href="#" title="友情链接" target="_blank">
                        <img src="<?php echo WEB_PATH;?>statics/test/images/2.png" width="88" height="31" />
                    </a>
                </li>
                 <li>
                    <a href="#" title="友情链接" target="_blank">
                        <img src="<?php echo WEB_PATH;?>statics/test/images/3.jpg" width="88" height="31" />
                    </a>
                </li>
                 <li>
                    <a href="#" title="友情链接" target="_blank">
                        <img src="<?php echo WEB_PATH;?>statics/test/images/4.png" width="88" height="31" />
                    </a>
                </li>
                 <li>
                    <a href="#" title="友情链接" target="_blank">
                        <img src="<?php echo WEB_PATH;?>statics/test/images/5.png" width="88" height="31" />
                    </a>
                </li>
                 <li>
                    <a href="#" title="友情链接" target="_blank">
                        <img src="<?php echo WEB_PATH;?>statics/test/images/6.png" width="88" height="31" />
                    </a>
                </li>
                 <li>
                    <a href="#" title="友情链接" target="_blank">
                        <img src="<?php echo WEB_PATH;?>statics/test/images/7.png" width="88" height="31" />
                    </a>
                </li>
        </ul>
                <div class="well-sm" style="padding-bottom:1em">
                    </div>
            </div>

<?php include template("content","footer"); ?>




