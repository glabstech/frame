<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            <?php wp_title(''); ?>
        </title>

        <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,600' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>
	  	
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
		
				<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/dist/css/font-awesome.min.css">
	  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
      
        <?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-5928790-105', 'auto');
  ga('send', 'pageview');

</script>
    </head>

    <body <?php body_class(); ?>>

        <div class="isMobile"></div>
        <div class="isMobileNormal"></div>
        <div class="isWideDesktop"></div>
	  	<div class="isGTOE601"></div>
	  	<div class="isGTOE768"></div>
	  	<div class="isGTOE820"></div>
	  	<div class="isGTOE860"></div>
	  	<div class="isGTOE960"></div>

	  <div class="main-header-section-wrapper">
	  
        <header id="main-header" data-adminbarshowing="<?php echo is_admin_bar_showing(); ?>">
            <div class="susy-container clearfix">
			  
			  <div class="logo-wrapper">
                  <a href="/" class="desktop"><img class="logo" src="<?php bloginfo('template_url'); ?>/assets/images/logo-header.png" alt="Pilates on 88 Bay" /></a>
                  <a href="/" class="mobile"><img class="logo" src="<?php bloginfo('template_url'); ?>/assets/images/logo-footer.png" alt="Pilates on 88 Bay" /></a>
              </div>
			  
			  
			  	<div class="text-wrapper">
		
				  <div class="main-nav-wrapper">
					
					<div class="mobile-menu-btn-wrapper">
					  <button class="mobile-menu-btn">Menu</button>
					</div>
		  
					<nav class="main-nav">
						<?php
  
						  // initiates the Navigation menu
						  wp_nav_menu( array(
							'menu'              => 'Main Navigation',
							'menu_class'        => 'nav-list',
							'theme_location'    => 'Main Navigation',
							'container'         => 'div',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker()
						  ));
						?>
					 </nav> <!-- .main-nav -->
				 </div> <!-- .main-nav-wrapper -->
			  </div> <!-- .text-wrapper -->
			  
            </div> <!-- .susy-container -->
		  
        </header>
		
	  </div> <!-- .main-header-section-wrapper -->
			
		<!--<aside id="lets-have-coffee">
			<a href="#" class="trigger-popup-class"><img src="/wp-content/uploads/2016/08/button-lets-have-coffee-vertical.gif" /></a>

				<div id="lets-have-a-coffee-popup">
					<div class="text">
						<h2>
							<strong>Have a Coffee</strong> <br>and chat with us
						</h2>

						<span class="list-item">It's no obligation and no rush</span><br>
						<span class="list-item">Get to know us and our services</span><br>
						<span class="list-item">Plan your next steps</span>

						<p>Getting in touch with us is easy… <br>Shoot us an email. Call. Send a courier pigeon… we always have time for a coffee and chat.</p>

						<a href="/contact-us/" class="btn white-bg">Get in Touch</a>
					</div>
					<a href="#" class="close"></a>
				</div>
		</aside>-->
	  

        