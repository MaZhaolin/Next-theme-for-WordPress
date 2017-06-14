
<?php get_header() ?>
<div class="main block-center clearfix">
<?php get_sidebar('single'); ?>
	<div class="container">
		  <?php the_post() ?>
<article  class="fadeInDownS animated">
	<div class="title">
		<a class="title_link" href="<?php the_permalink(); ?>"><h1><?php the_title() ?></h1></a>
		<div class="tag">
			<span class="item"><i class="fa fa-fw fa-calendar-check-o"></i> <?php the_date() ?></span>
			<span class="item"><i class="fa fa-fw fa-folder-o"></i>
			<?php the_category(‘,’) ?></span>
            <?php if(get_option('next_comment_type') == 'sohucs'){ ?>
                <span class="item"><span href="#SOHUCS" id="changyan_count_unit" ></span>条评论</span>
            <?php } else {?>
                <span class="item ds-thread-count"><?php echo get_post($post -> ID)->comment_count;  ?>条评论</span>
            <?php } ?>
			<span class="item">阅读次数 <?php get_post_views($post -> ID); ?></span>
		</div>
	</div>
	<div class="content">
		<?php the_content(); ?>
	</div>
</article>
<div>
    <ul class="post-copyright">
        <li class="post-copyright-author">
            <strong>本文作者：</strong>
            <?php the_author() ?>
        </li>
        <li class="post-copyright-link">
            <strong>本文链接：</strong>
            <a href="<?php the_permalink(); ?>" title="使用 Travis CI 自动更新 GitHub Pages"><?php the_permalink(); ?></a>
        </li>
        <li class="post-copyright-license">
            <strong>版权声明： </strong>
            本博客所有文章除特别声明外，均采用 <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/cn/" rel="external nofollow" target="_blank">CC BY-NC-SA 3.0 CN</a> 许可协议。转载请注明出处！
        </li>
    </ul>
</div>
<div class="post-tags">
    <?php the_tags('', '') ?>
</div>
<div class="post-nav clearfix">
	<div class="prev">
		<?php  if (get_previous_post()) { previous_post_link('<i class="fa fa-chevron-left"></i> %link');} ?>
	</div>
	<div class="next">
		<?php if (get_next_post()) { next_post_link('%link <i class="fa fa-chevron-right"></i> ');} ?>
</div>
</div>
<?php if (get_option('next_comment_type') == 'sohucs') { ?>
<!-- 畅言评论框 start -->
        <style>
            #SOHUCS #SOHU_MAIN .module-cmt-header .section-cbox-w .block-head-w .header-login{
                border-radius: 0;
                padding: 0 15px;
                height: 30px;
                line-height: 30px!important;
                -webkit-transition: .3s;
                -moz-transition: .3s ;
                -ms-transition: .3s ;
                -o-transition: .3s ;
                transition: .3s ;
            }
            #SOHUCS #SOHU_MAIN .module-cmt-header .section-cbox-w .block-head-w .header-login:hover{
                background: #000000;
                color: #FFFFFF;
            }
            #SOHUCS #SOHU_MAIN .module-cmt-box .post-wrap-w div.post-wrap-border-l,
            #SOHUCS #SOHU_MAIN .module-cmt-box .post-wrap-w div.post-wrap-border-r,
            #SOHUCS #SOHU_MAIN .module-cmt-box .post-wrap-w div.post-wrap-border-t .post-wrap-border-t-l,
            #SOHUCS #SOHU_MAIN .module-cmt-box .post-wrap-w .post-wrap-main
            {
                background-image: none;
            }
            #SOHUCS #SOHU_MAIN .module-cmt-box .post-wrap-w div.post-wrap-border-r{
                border-left: 1px solid #000;
            }
            #SOHUCS #SOHU_MAIN .module-cmt-box .post-wrap-w div.post-wrap-border-l{
                border-right: 1px solid #000;
            }
            #SOHUCS #SOHU_MAIN .module-cmt-box .post-wrap-w div.post-wrap-border-t .post-wrap-border-t-l{
                border-top: 1px solid #000;
            }
            #SOHUCS #SOHU_MAIN .module-cmt-box .post-wrap-w .post-wrap-border-t div.post-wrap-border-t-r{
                margin-left: 0 !important;
            }
            #SOHUCS #SOHU_MAIN .module-cmt-box .post-wrap-w .post-wrap-main .wrap-area-w .textarea-fw{
                font-family: inherit;
            }
            #SOHUCS #SOHU_MAIN .module-cmt-box .post-wrap-w .wrap-action-w .action-issue-w .issue-btn-w a button.btn-fw{
                background-image: none;
                border: 1px solid #000;
                margin-right: 8px;
                -webkit-transition: .3s;
                -moz-transition: .3s ;
                -ms-transition: .3s ;
                -o-transition: .3s ;
                transition: .3s ;
                outline: none;
            }
            #SOHUCS #SOHU_MAIN .module-cmt-box .post-wrap-w .wrap-action-w .action-issue-w .issue-btn-w a button.btn-fw:after{
                content: "发表评论"
            }
            #SOHUCS #SOHU_MAIN .module-cmt-box .post-wrap-w .wrap-action-w .action-issue-w .issue-btn-w a button.btn-fw:hover{
                background-image: none;
                background-color: #000;
                color: #fff;
            }
            #SOHUCS #SOHU_MAIN .module-cmt-header .section-cbox-w .block-head-w .head-img-w{
                top: 11px
            }
            #SOHUCS #SOHU_MAIN .module-cmt-header .section-title-w .title-user-w .user-wrap-w{
                top: 26px;
            }
            #SOHUCS #SOHU_MAIN .module-cmt-list .cmt-list-type .type-lists li.active{
                background-image: none;
                border: 1px solid #000;
            }
            #SOHUCS #SOHU_MAIN .module-cmt-list .cmt-list-type .cmt-list-border{
                bottom: 2px;
                left: 67px;
            }
            #SOHUCS #SOHU_MAIN .module-cmt-list .block-title-gw ul li .title-name-gw div.title-name-gw-tag{
                background-image: none;
                border-left: 5px solid #000;
            }
            #SOHUCS #SOHU_MAIN .module-cmt-header .section-cbox-w .block-head-w .head-img-w img,
            #SOHUCS #SOHU_MAIN .module-cmt-list .block-cont-gw .cont-head-gw .head-img-gw img{
                border: 2px solid #ddd;
                -webkit-transition: .5s;
                -moz-transition: .5s ;
                -ms-transition: .5s ;
                -o-transition: .5s ;
                transition: .5s ;
                width: 42px;
                height: 42px;
            }
            #SOHUCS #SOHU_MAIN .module-cmt-header .section-cbox-w .block-head-w .head-img-w img:hover,
            .clear-g.block-cont-gw:hover img{
                -webkit-transform: rotateZ(360deg);
                -moz-transform: rotateZ(360deg);
                -ms-transform: rotateZ(360deg);
                -o-transform: rotateZ(360deg);
                transform: rotateZ(360deg);
            }
            #SOHUCS #SOHU_MAIN .module-cmt-list .block-cont-gw .cont-head-gw .head-img-gw{
                width: 46px;
                height: 46px;
            }
        </style>
    <div id="SOHUCS" sid="<?php the_ID() ?>" ></div>
<!-- 畅言评论框 end -->

<!-- 畅言公共JS代码 start (一个网页只需插入一次) -->
        <script charset="utf-8" type="text/javascript" src="https://changyan.sohu.com/upload/changyan.js" ></script>
        <script type="text/javascript">
            window.changyan.api.config({
                appid: '<?php echo get_option('next_sohucs_appid') ?>',
                conf:  '<?php echo get_option('next_sohucs_conf') ?>'
            });
        </script>
    <script type="text/javascript" src="https://assets.changyan.sohu.com/upload/plugins/plugins.count.js">
    </script>
<!-- 畅言公共JS代码 end -->
        <?php } else { comments_template(); comment_form(); } ?>
	</div>
</div>
</div>
<div id="sidebar-toggle">
	<div class="sidebar-toggle-wrap">
		<span class="item item-top"></span>
		<span class="item item-middle"></span>
		<span class="item item-bottom"></span>
	</div>
</div>
<div id="backTop" class="hide">
	<i class="fa fa-arrow-up"></i>
</div>


<?php get_footer() ?>
