<?php get_header() ?>
<div class="main block-center clearfix">
<?php get_sidebar(); ?>
    <div class="container">
        <article>
            <?php the_post() ?>
            <div class="title">
                <a href="<?php the_permalink(); ?>"><h2><?php the_title() ?></h2></a>
                <div class="tag">
                    <span class="item">发表于 <?php the_date() ?></span>
                    <span class="item"><?php comments_popup_link('暂无评论', ' 1 条评论', '% 条评论'); ?></span>
                </div>
            </div>
            <div class="description">
                <?php
            the_content();
        ?>
            </div>
        </article>
    </div>
</div>
</div>
<div id="backTop" class="hide">
    <i class="fa fa-arrow-up"></i>
</div>
<?php get_footer() ?>
