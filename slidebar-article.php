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
<style type="text/css" media="screen">
	.sidebar-inner{
		position: relative; 
		width: 240px; 
		background: transparent; 
		padding: 0;
	}
	.sidebar-inner .info{
		background: #fff;
		opacity: 0;
		-webkit-transition: all .3s;
		-o-transition: all .3s;
		transition: all .3s;
		padding: 20px;
	}
	.sidebar-inner .tabs{ 
		text-align: center;
		padding: 20px;
		background: #fff;
	}
	.sidebar-inner .tabs a{
		display: inline-block; 
		padding: 2px;
	}
	.sidebar-inner .tabs a.active{
		color: #fc6423;
		border-bottom: 1px solid #fc6423
	}
	.sidebar-inner .post-dir{
		position: absolute;
		top:70px;
		padding: 1em;
		box-sizing: border-box;
		width: 240px;
		background: #fff;
		opacity: 1;
		-webkit-transition: all .3s;
		-o-transition: all .3s;
		transition: all .3s;
	}
	.sidebar-inner .post-dir a{
		display:block; 
	} 
	.sidebar-inner .post-dir a.active{
		color: #fc6423;

	}
	.sidebar-inner .post-dir a:hover{
		text-decoration:underline 
	}
</style>
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
	<?php echo wp_nav_menu(['menu'=>'menu']); ?> 
	</nav>

	<div class="sidebar-inner ">
		<div class="tabs">
			<a class="active" href="javascript:;">文章目录</a>
			<a href="javascript:;">站点概览</a>
		</div>
		<div class="info">
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
		<?php if(wp_get_nav_menu_items('social')) : echo wp_nav_menu(['menu'=>'social']); endif;?>  
		<?php if(wp_get_nav_menu_items('friendlink')) :?>
		<div class="friend-link">
			<h2><i class="fa fa-fw fa-globe"></i>友链</h2>
					 <?php echo wp_nav_menu(['menu'=>'friendlink']); ?>  
		</div>
	<?php endif; ?>
		</div>
		
		<div class="post-dir">
			
		</div>
	</div>

	
</div>

