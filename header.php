<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0"/>
    <link href="//fonts.googleapis.com/css?family=Monda:300,300italic,400,400italic,700,700italic|Roboto Slab:300,300italic,400,400italic,700,700italic|Lobster Two:300,300italic,400,400italic,700,700italic|PT Mono:300,300italic,400,400italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
	<link href="//cdn.bootcss.com/normalize/5.0.0/normalize.min.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/fancybox/2.1.5/jquery.fancybox.min.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/highlight.js/9.9.0/styles/tomorrow.min.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/viewerjs/0.6.0/viewer.min.css" rel="stylesheet">
	<?php wp_head(); ?>
	<?php if(get_option('next_scheme') == 'Mist'){ ?>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/static/css/style-mist.css">
	<?php } ?>
	<?php if(get_option('next_scheme') == 'Muse'){ ?>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/static/css/style-muse.css">
	<?php } ?>
</head>
<body <?php body_class(); ?>>

<header id="header" class="">

</header><!-- /header -->

