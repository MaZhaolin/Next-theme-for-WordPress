<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://insertsweat.cn
 *
 * @subpackage NexT theme
 * @version 3.1
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
?>
<?php function qiuye_comment($comment, $args, $depth)
{ $GLOBALS['comment'] = $comment; ?>
<li class="comment" id="li-comment-<?php comment_ID(); ?>">
    <div class="comment-body">
        <div class="comment-author">
            <?php if (function_exists('get_avatar') && get_option('show_avatars')) { echo get_avatar($comment, 48); } ?>
        </div><div class="comment_content" id="comment-<?php comment_ID(); ?>">
            <div class="comment_text">
                <?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()); ?>
                <?php if ($comment->comment_approved == '0') : ?>
                    <span>你的评论正在审核，稍后会显示出来！</span><br />
                <?php endif; ?><?php comment_text(); ?>
                <div class="reply">
                    <div class="comment-meta commentmetadata">发表于：<?php echo get_comment_time('Y-m-d H:i'); ?> </div>
                    <?php comment_reply_link(array_merge( $args, array('reply_text' => '回复','depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                    <?php edit_comment_link('修改'); ?>
                </div></div></div></div></li><?php } ?>
<?php wp_list_comments('type=comment&callback=qiuye_comment');?>


<div class="pagination comments-pagination">
    <?php paginate_comments_links('prev_text=«&next_text=»');?>
</div>
