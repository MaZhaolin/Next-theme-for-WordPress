<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?> 
<div class="sidebar">
	<div class="title">
		<a href="<?php bloginfo('url'); ?>"><h1 class="fadeInDown animated"><?php bloginfo('name'); ?></h1></a>
		<div class="toggle-nav">
			<button type="">
				<span class="btn-bar"></span>
				<span class="btn-bar"></span>
				<span class="btn-bar"></span>
			</button>
		</div>
	</div>
	<nav> 
	<?php echo wp_nav_menu(array('menu'=>'menu')); ?> 
	</nav>

	<div class="sidebar-inner ">
		<div class="avatar text-center">
			<img src="<?php bloginfo('template_url'); ?>/images/avatar.jpeg" alt="">
			<h2 class="author"><?php  bloginfo('description'); ?></h2>
		</div>
		<div class="tab ">
			<ul>
				<li><a><span><?php $count_posts = wp_count_posts(); echo  $count_posts->publish;?></span><span>日志</span></a></li>
				<li><a><span><?php echo wp_count_terms('category'); ?></span><span>分类</span></a></a></li>
				<li><a><span><?php echo wp_count_terms('post_tag'); ?></span><span>标签</span></a></a></li>
			</ul>
		</div>
		<div class="rss">
			<a href="<?php bloginfo('rss2_url'); ?> :"><i class="fa fa-fw fa-rss"></i>RSS</a>
		</div>
		<?php  ?>
		<?php if(wp_get_nav_menu_items('social')) : echo wp_nav_menu(array('menu'=>'social')); endif;?>  
		<?php if(wp_get_nav_menu_items('friendlink')) :?>
		<div class="friend-link">
			<h2><i class="fa fa-fw fa-globe"></i>友链</h2>
					 <?php echo wp_nav_menu(array('menu'=>'friendlink')); ?>  
		</div>
	<?php endif; ?>
	</div>
</div>


