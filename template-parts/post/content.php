<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<article class="fadeInDownS animated">
	<div class="title"> 
		<a href="<?php the_permalink(); ?>"><h1><?php the_title() ?></h1></a>
		<div class="tag">
			<span class="item"><i class="fa fa-fw fa-calendar-check-o"></i> <?php the_date() ?></span>
			<span class="item"><i class="fa fa-fw fa-folder-o"></i> 
			<?php the_category(‘,’) ?></span>
			<span class="item"><?php comments_popup_link('暂无评论', ' 1 条评论', '% 条评论'); ?></span>
		</div>
	</div>
	<div class="content">
		<?php the_content(); ?>
	</div> 
</article>
