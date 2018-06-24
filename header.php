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
        <?php wp_title(''); ?>
    </title>

    <!-- <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/dist/css/font-awesome.min.css"> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script> -->

 	<link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">


	<!-- favicon -->
	<link rel="shortcut icon" href="<?php echo _value_(get_field('favicon','option')) ?>">
	<link rel="icon" href="<?php echo _value_(get_field('favicon','option')) ?>">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>


<!--==========================
Header
============================-->
<header id="header">
	<div class="container-fluid top-logo-m">

		<div id="logo" class="pull-left">
			<a href="<?php echo get_home_url(); ?>">
				<?php 
					$_field = (get_field('header_options','option')); 
				?>
				<img class="normal-logo" src="<?php echo $_field['logo_secondary']; ?>" alt="cdc-logo" title="" />
				<img class="fixed-logo" src="<?php echo $_field['logo_default']; ?>" alt="cdc-logo-hover" title="" />
			</a>
		</div>

		<nav id="nav-menu-container">
		<?php 
			wp_nav_menu( array(
				'theme_location'  => 'primary',
				'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
				'container'       => '',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => 'nav-menu',
				'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
				'walker'          => new WP_Bootstrap_Navwalker(),
			) );
		?>

			<!-- <ul class="nav-menu">
				<li class="menu-has-children"><a href="">Services</a>
					<ul>
						<li><a href="#">Drop Down 1</a></li>
						<li class="menu-has-children"><a href="#">Drop Down 2</a>
							<ul>
								<li><a href="#">Deep Drop Down 1</a></li>
								<li><a href="#">Deep Drop Down 2</a></li>
								<li><a href="#">Deep Drop Down 3</a></li>
								<li><a href="#">Deep Drop Down 4</a></li>
								<li><a href="#">Deep Drop Down 5</a></li>
							</ul>
						</li>
						<li><a href="#">Drop Down 3</a></li>
						<li><a href="#">Drop Down 4</a></li>
						<li><a href="#">Drop Down 5</a></li>
					</ul>
				</li>
				<li><a href="#about">About</a></li>
				<li><a href="#portfolio">Safety</a></li>
				<li><a href="#team">Projects</a></li>
				<li><a href="#services">Gallery</a></li>
				<li><a href="#team">News</a></li>
				<li><a href="#contact">Contact Us</a></li>
			</ul> -->
		</nav><!-- #nav-menu-container -->
		<div class="enquire-section">
		<div class="support-number"><a target="<?php echo $_field['contact']['target']; ?>" href="<?php echo $_field['contact']['url']; ?>"><i class="fa fa-phone" aria-hidden="true"></i><span><?php echo $_field['contact']['title']; ?></span></a></div>
			<a href="<?php echo $_field['cta']['url']; ?>" <?php if($_field['cta']['target']){ echo 'target="'.$_field['cta']['target'].'"';}?> class="enquire-btn"><span><?php echo $_field['cta']['title'] ?></span></a>
				
		</div>
	</div>
</header><!-- #header -->


    