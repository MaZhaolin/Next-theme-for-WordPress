<style type="text/css" media="screen">
    .sidebar-inner{
        position: relative;
        width: 240px;
        background: transparent;
        padding: 0;
    }
    .sidebar-inner.active *{
        -webkit-animation-name: none;
        animation-name: none;
    }
    .sidebar-inner .info{
        background: #fff;
        display: none;
        padding: 20px;
        padding-top: 0
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
        top: 70px;
        padding: 1em;
        box-sizing: border-box;
        width: 240px;
        background: #fff;
        padding-top: 0
    }
    .sidebar-inner .post-dir ol{
        padding-left: 2em;
    }
    .sidebar-inner .post-dir .level-2{
        display: none;
    }
    .sidebar-inner .post-dir .active{
        color: #fc6423;
    }
    .sidebar-inner .post-dir a:hover{
        color: #fc6423;
        text-decoration:underline
    }
    #sidebar-toggle .item{
        background: #87daff
    }
</style>
<div class="sidebar">
    <div class="mist-top">
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
    </div>

    <div class="sidebar-inner ">
        <div class="tabs">
            <a class="active" href="javascript:;">文章目录</a>
            <a href="javascript:;">站点概览</a>
        </div>
        <div class="info">
            <div class="avatar text-center">
            <img src="<?php echo get_option('next_avator'); ?>" alt="">
            <h2 class="author"><?php echo get_option('next_author'); ?></h2>
        </div>
        <div class="tab ">
            <ul>
                <li><a><span><?php $count_posts = wp_count_posts(); echo  $count_posts->publish;?></span><span>日志</span></a></li>
                <li><a><span><?php echo wp_count_terms('category'); ?></span><span>分类</span></a></a></li>
                <li><a><span><?php echo wp_count_terms('post_tag'); ?></span><span>标签</span></a></a></li>
            </ul>
        </div>
        <div class="rss">
            <a href="<?php bloginfo('rss2_url'); ?>"><i class="fa fa-fw fa-rss"></i>RSS</a>
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

        <div class="post-dir">

        </div>
    </div>


</div>



