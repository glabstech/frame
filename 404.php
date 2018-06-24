<?php
get_header(); ?>

<div class="internal-page-banner internal-page main-internal-page-template">
    <section class="main-heading-wrapper" data-bgimage="<?php bloginfo('template_url'); ?>/assets/images/page-banner-default.jpg" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/images/page-banner-default.jpg); background-size: cover; background-position: center 0px; background-repeat: no-repeat;">
        <div class="susy-container">
            <div class="main-headline-wrapper">
                <h1 class="the-headline">404</h1>
            </div>
        </div>
    </section>
</div>
<div class="internal-page">
	<section id="page-not-found" class="row-content main-wrapper sd">
		<div class="susy-container">
			<div class="content clearfix">
				<h1 class="headline">404 Page Not Found</h1>
				<p>Sorry the page you requested could not be found. Please use the navigation above to try and locate it or <a href="/contact">contact us</a>.</p>
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>