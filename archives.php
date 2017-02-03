<?php
/*
Template Name: archives
*/
?>
<?php get_header() ?>
<div class="main block-center clearfix">
<?php get_sidebar(); ?>
    <div class="container">
        <div class="archives fadeInDownS animated">
                <ul class="head">
                    <li>嗯..! 目前共计 <?php $count_posts = wp_count_posts(); echo  $count_posts->publish;?> 篇日志。 继续努力。</li>
                </ul>
            <?php zww_archives_list(); ?>
        </div>
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
