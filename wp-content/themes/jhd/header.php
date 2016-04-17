<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="lt-ie10 lt-ie9 lt-ie8 lt-ie7 ie" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="gt-ie6 lt-ie10 lt-ie9 lt-ie8 ie" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="gt-ie7 gt-ie6 lt-ie10 lt-ie9 ie" lang="en"> <![endif]-->
<!--[if IE 9]>         <html class="gt-ie8 gt-ie7 gt-ie6 lt-ie10 ie" lang="en"> <![endif]-->
<!--[if IE 10]>         <html class="gt-ie9 gt-ie8 gt-ie7 gt-ie6 lt-ie11 ie" lang="en"> <![endif]-->
<!--[if gt IE 10]><!--> <html lang="en"  > <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>

    <!-- stylesheets -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/lib/dist/css/bootstrap/bootstrap.css" />
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/lib/dist/css/main.css" />
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/lib/dist/js/fancybox/jquery.fancybox.css" />

    <!-- scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/lib/dist/js/fancybox/jquery.fancybox.pack.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/lib/dist/js/caroufredsel/jquery.carouFredSel-6.2.1-packed.js"></script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-25576948-1', 'auto');
        ga('send', 'pageview');

    </script>
</head>
<body <?php body_class($post->post_name); ?> id="top">

<header>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-6 header-left">

                <div class="logo">
                    <a href="/"><img src="<?php echo get_bloginfo('template_directory'); ?>/lib/dist/img/logo.png" /></a>
                </div>

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                </div>

            <div class="col-xs-12 col-sm-offset-2 col-sm-7 col-md-offset-0 col-md-6 header-right">

                    <div class="telephone-number">
                        <a href="tel:07478 279 301">07478 279 301</a>
                    </div>
                    <div class="cta">
                        <a href="#" class="btn-red">Get a free quote</a>
                    </div>

            </div>
        </div>
    </div>

    <div class="navigation collapse">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <div>
                        <?php
                        $nav_args = array(
                            'container' => '',
                            'menu' => 'Primary',
                            'menu_class' => 'nav navbar-nav'
                        );
                        wp_nav_menu($nav_args);
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- navigation -->

</header>


