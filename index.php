
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
                    <?php if(get_option('next_comment_type') == 'sohucs'){ ?>
                    <span class="item"><span id = "sourceId::<?php echo $post -> ID ?>" class = "cy_cmt_count" ></span>条评论</span>
                    <?php } else {?>
                    <span class="item ds-thread-count"><?php echo get_post($post -> ID)->comment_count;  ?>条评论</span>
                    <?php } ?>
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
<script id="cy_cmt_num" src="https://changyan.sohu.com/upload/plugins/plugins.list.count.js?clientId=cyt0HdcCq">
</script>
<?php get_footer() ?>
