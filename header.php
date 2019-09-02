<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="yandex-verification" content="5aaad4251e19690c" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Сайт портфолию веб-разработчика">
    <meta name="keywords" content="портфолио, веб, разработка, верстка, программирование, артем дубинин, artdub">
    <meta name="author" content="artdub">

    <title><?php bloginfo('name'); ?></title>

    <!-- CSS -->
    <link href="/wp-content/themes/myTheme/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/wp-content/themes/myTheme/assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
    <link href="/wp-content/themes/myTheme/assets/css/simple-line-icons.css" rel="stylesheet" media="screen">
    <link href="/wp-content/themes/myTheme/assets/css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="/wp-content/themes/myTheme/assets/css/magnific-popup.css" />
    
    <!-- Custom styles CSS -->
    <link href="/wp-content/themes/myTheme/assets/css/style.css" rel="stylesheet" media="screen">

    <script src="/wp-content/themes/myTheme/assets/js/modernizr.custom.js"></script>

    <?php wp_head(); ?>

</head>
<body>

<!-- Preloader -->

<div id="preloader">
    <div id="status"></div>
</div>

<!-- Home start -->

<section id="home" class="pfblock-image screen-height">
    <div class="home-overlay"></div>
    <div class="intro">

        <?php if ( have_posts() ) : query_posts('p=7');
            while (have_posts()) : the_post(); ?>





        <div class="start"><?php the_field('title1'); ?></div>
        <h1><?php the_content(); ?></h1>
        <div class="start"><?php the_field('title2'); ?></div>
        <? endwhile; endif; wp_reset_query(); ?>
    </div>

    <a href="#services">
        <div class="scroll-down">
            <span>
                <i class="fa fa-angle-down fa-2x"></i>
            </span>
        </div>
    </a>

</section>

<!-- Home end -->

<!-- Navigation start -->

<header class="header">

    <nav class="navbar navbar-custom" role="navigation">

        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php get_permalink();?>"><?php bloginfo('name'); ?></a>
            </div>

            <div class="collapse navbar-collapse" id="custom-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Skills</a></li>
                    <li><a href="#portfolio">Works</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>

        </div><!-- .container -->

    </nav>

</header>

<!-- Navigation end -->
