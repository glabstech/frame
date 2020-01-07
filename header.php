<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php wp_title(); ?>
        Profacc - <?php echo get_the_title() ?>
    </title>

    <!-- <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/dist/css/font-awesome.min.css"> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script> -->


	<!-- favicon -->
	<link rel="shortcut icon" href="<?php echo _value_(get_field('header','option')['favicon']) ?>">
	<link rel="icon" href="<?php echo _value_(get_field('header','option')['favicon']) ?>">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	$header = (object)(get_field('header','option'));
?>
<!-- Mainmenu-Area -->
<div class="mainmenu">
        <div class="container">
            <div class="row">
                <div class="col navbar-top-item d-none d-lg-block">

                    <div class="wrapper float-right float-left-content">
                        <div class="phone-top mr-4 mt-2">
                            Need Assistance? Call <a href="tel:+61893009665">+61 8 9300 96650</a>
                        </div>
                        <a class="btn btn-sm btn-primary float-right" href="/contact-us">BOOK A FREE CONSULTATION <span>»</span></a>
                    </div>

                </div>
            </div>
            <div class="row">


                <nav id="main-nav" class="col navbar navbar-expand-lg">
                    
                    <a class="navbar-brand offset-top normal" href="/"><img src="<?php echo $header->logo ?>"></a>
                    <!-- <a class="navbar-brand offset-top fixed" href="/"><img src="<?php echo $_field['logo_default']; ?>"></a> -->
                    
                    
                    <button class="frame-navbar-toggler navbar-toggler" type="button" data-to-toggle="primary-menu-wrapper" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span href="#" class="frame-hamburger d-lg-none d-xl-block"></span>
                    </button>

                    <!-- Links -->
                    <div class="collapse navbar-collapse" id="primary-menu-wrapper">
                        <?php
                        wp_nav_menu( array(
                            'theme_location'  => 'primary',
                            'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'navbar-nav ml-auto',
                            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                        ) );
                        ?>

                    </div>

                    <div class="mobile-body-overlay"></div>
                </nav>
            </div>
        </div>
    </div>
	<!-- Mainmenu /-->



    