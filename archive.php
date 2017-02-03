
<?php get_header() ?>
<div class="main block-center clearfix">
<?php get_sidebar(); ?>
    <div class="container">
        <div class="archives">

            <ul>
                <li><?php the_archive_title(); ?></li>
                <?php
        if ( have_posts()) : ?>
            <?php
            /* Start the Loop */
            while ( have_posts() ) : the_post();
            ?>
                <li><span class="time"> <?php the_date('Y-m-d') ?></span><a href="<?php the_permalink(); ?>"><?php  the_title(); ?></a></li>
        <?
            endwhile;?>

        <li class="footer"></li>
            </ul>

        </div>
        <?php
        else :
            echo "暂无文章";
        endif; ?>
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
