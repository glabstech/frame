<?php 
 get_header();
?>
<?php
	
	$background = get_field('background_image');

	if(empty($background)){
		$background = 'background-image: url("")';
	}
	else{
		$background = 'background-image: url('.$background.')';
	}
?>
<section id="hero" class="banner" style="<?php echo $background.';' ?>">
	<div class="hero-container">
		<h1>
		<?php 
			$page_title = get_field('title');
			if(empty($page_title)){
				echo the_title();	
			}
			else{
				echo get_field('title'); 	
			}
			
		?>
		</h1>
	</div>
</section>

<main id="main">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 post-contents test">
      <?php
              echo do_shortcode('[news_list cdc_tag=test]');
      ?>	
      </div>
      <div class="col-lg-4 col-md-4 widget-area">
        <?php dynamic_sidebar('blog-side'); ?>    
      </div>
    </div>
  </div>
</main>
<?php dynamic_sidebar('pre-footer'); ?>
<?php get_footer(); ?>