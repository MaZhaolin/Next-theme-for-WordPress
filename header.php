<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
    <link href="//fonts.googleapis.com/css?family=Monda:300,300italic,400,400italic,700,700italic|Roboto Slab:300,300italic,400,400italic,700,700italic|Lobster Two:300,300italic,400,400italic,700,700italic|PT Mono:300,300italic,400,400italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <link href="//cdn.bootcss.com/highlight.js/9.9.0/styles/tomorrow.min.css" rel="stylesheet">
	<link href="//cdn.bootcss.com/normalize/5.0.0/normalize.min.css" rel="stylesheet">
	<?php wp_head(); ?>
	<?php if(get_option('next_scheme') == 'Mist'){ ?>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style-mist.css">
	<?php } ?>
</head>
<body <?php body_class(); ?>>

<header id="header" class="">

</header><!-- /header -->

