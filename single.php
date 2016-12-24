
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
			<span class="item ds-thread-count" data-thread-key="<?php the_id() ?>"></span>
			<span class="item">阅读次数 <?php get_post_views($post -> ID); ?></span>
		</div>
	</div>
	<div class="content">
		<?php the_content(); ?>
	</div>
</article>

<div class="post-nav clearfix">
	<div class="prev">
		<?php  if (get_previous_post()) { previous_post_link('<i class="fa fa-chevron-left"></i> %link');} ?>
	</div>
	<div class="next">
		<?php if (get_next_post()) { next_post_link('%link <i class="fa fa-chevron-right"></i> ');} ?>
	</div>
</div>
<div class="ds-share flat" data-thread-key="<?php the_ID() ?>" data-title="<?php the_title(); ?>"  data-url="<?php the_permalink() ?>">
    <div class="ds-share-inline">
      <ul  class="ds-share-icons-16">

      	<li data-toggle="ds-share-icons-more"><a class="ds-more" href="javascript:void(0);">分享到：</a></li>
        <li><a class="ds-weibo" href="javascript:void(0);" data-service="weibo">微博</a></li>
        <li><a class="ds-qzone" href="javascript:void(0);" data-service="qzone">QQ空间</a></li>
        <li><a class="ds-qqt" href="javascript:void(0);" data-service="qqt">腾讯微博</a></li>
        <li><a class="ds-wechat" href="javascript:void(0);" data-service="wechat">微信</a></li>

      </ul>
      <div class="ds-share-icons-more">
      </div>
    </div>
 </div>

			<!-- 多说评论框 start -->
	<div class="ds-thread" data-thread-key="<?php the_ID() ?>" data-title="<?php the_title(); ?>" data-url="<?php the_permalink() ?>"></div>

<!-- 多说评论框 end -->

<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
var duoshuoQuery = {short_name:"<?php echo get_option('next_duoshuo_shortname'); ?>"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0]
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
	</script>
<!-- 多说公共JS代码 end -->
	</div>
</div>
</div>
<div id="backTop" class="hide">
	<i class="fa fa-arrow-up"></i>
</div>
<?php get_footer() ?>
