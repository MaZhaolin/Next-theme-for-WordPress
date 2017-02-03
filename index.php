
<?php get_header() ?>
<div class="main block-center clearfix">
<?php get_sidebar(); ?>
	<div class="container">
	<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<article>
			<div class="title">
				<a class="title_link" href="<?php the_permalink(); ?>"><h1><?php the_title() ?></h1></a>
				<div class="tag">
					<span class="item">发表于 <?php the_date() ?></span>
					<span class="item"><?php the_category(‘,’) ?></span>
					<span class="item ds-thread-count" data-thread-key="<?php the_id() ?>"></span>
					<span class="item">阅读次数 <?php get_post_views($post -> ID); ?></span>
				</div>
			</div>
			<div class="content">
				<?php the_content(''); ?>
			</div>
			<div class="read-more">
				<a href="<?php the_permalink(); ?>">阅读全文 »</a>
			</div>
		</article>

	<?php endwhile; ?>
	<div class="pagination">
		<?php  wpdx_paging_nav(); ?>
	</div>
	<?php endif; ?>
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
<script type="text/javascript">
var duoshuoQuery = {short_name:"<?php echo get_option('next_duoshuo_shortname'); ?>"};
(function() {
    var ds = document.createElement('script');
    ds.type = 'text/javascript';ds.async = true;
    ds.src = 'http://static.duoshuo.com/embed.js';
    ds.charset = 'UTF-8';
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ds);
})();
</script>
<?php get_footer() ?>
