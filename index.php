 
<?php get_header() ?>
<div class="main block-center clearfix"> 
<?php get_sidebar(); ?>
	<div class="container">
	<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<article>
			<div class="title"> 
				<a href="<?php the_permalink(); ?>"><h1><?php the_title() ?></h1></a>
				<div class="tag">
					<span class="item">发表于 <?php the_date() ?></span>
					<span class="item"><?php the_category(‘,’) ?></span>
					<span class="item"><?php comments_popup_link('暂无评论', ' 1 条评论', '% 条评论'); ?></span>
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
	<div class="page">
		<?php  wpdx_paging_nav(); ?>
	</div>  
	<?php endif; ?>  
	</div>
</div>
</div>
<div id="backTop" class="hide">
	<i class="fa fa-arrow-up"></i>
</div>
<?php get_footer() ?>