<?php get_header(); ?>

<div class="internal-page blog">
  
 	<?php $page_for_posts = get_option('page_for_posts'); ?>
	<?php $banner_url = wp_get_attachment_url( get_post_thumbnail_id( $page_for_posts ) );  ?>
  
	<section class="main-heading-wrapper blog-heading-wrapper" data-bgimage="<?php echo $banner_url; ?>" style="background-repeat:no-repeat; background-position:27% 0; background-size:cover;">
		<div class="susy-container">
		  <div class="main-headline-wrapper">
		  <?php if ( !empty( get_field ('custom_h1', $page_for_posts) ) ) : ?>
				  	<h1 class="sr-only"><?php echo get_field('custom_h1', $page_for_posts); ?></h1>
				  	<h2 class="large-headline">Blog</h2>
				  
				  <?php elseif ( empty(get_field('custom_h1', $page_for_posts) ) ) : ?>
				  	<h1 class="large-headline">Blog</h1>
				  <?php endif; ?>
		  
		  </div>
		</div>
	  
	  	<?php if ( function_exists('yoast_breadcrumb') ) {
		yoast_breadcrumb('<nav class="breadcrumbs"><div class="susy-container">','</div></nav>');
	} ?>
	  
	</section>
	
	
	
	

	<section class="main-content">
		<div class="susy-container clearfix">
<div class="feed">
			<?php
$post_counter = 0;
 if (have_posts()) : while (have_posts()) : the_post(); 

?>

<?php $post_counter++; ?>

<article class="clearfix <?php if( $post_counter == count( $posts ) ) echo 'last'; ?>">
<div class="image-wrapper">
<?php if ( has_post_thumbnail() ) : ?>
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
<?php else: ?>
<a href="<?php the_permalink(); ?>"><img src="/wp-content/uploads/2015/12/image-blog-post-placeholder.png" /></a>
<?php endif; ?>
</div>

<div class="text-wrapper">
<div class="clearfix">
<div class="img-left">
<?php echo get_avatar( get_the_author_email(), '65' ); ?>
</div>

<div class="txt-left">
<h2 class="subhead"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

  <?php//  if ( get_the_author_meta('is_featured', get_the_author_meta( 'ID' ) ) == 'Yes' ) : ?>

<div class="time-wrapper"><time><?php the_time( get_option( 'date_format' ) ); ?></time> by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="author"><?php the_author(); ?></a> <a href="#" class="comments" style="display:none;">Comments (0)</a></div>

  <?php// else: ?>

<!--<div class="time-wrapper"><time><?php the_time( get_option( 'date_format' ) ); ?></time> by <div class="author"><?php the_author(); ?></a></div> <a href="#" class="comments" style="display:none;">Comments (0)</a></div>-->

  <?php // endif; ?>
</div>
</div>

<!-- <div class="author-wrapper">
<a class="author" href="#">
<?php // echo get_avatar( get_the_author_email(), '25' ); ?>
<strong><?php the_author(); ?></strong>
</a>
</div>-->


<p><?php echo excerpt(200); ?></p>
<a href="<?php the_permalink(); ?>" class="basic-btn">Read More</a>
</div>
</article>

			<?php endwhile; endif; ?>

<div class="pagination-wrapper">
<?php get_numeric_posts_nav(); // see functions.php ?>
</div>


</div>

<aside class="optins">
<?php dynamic_sidebar('blog-page-sidebar-optins'); ?>

<div class="social-media-share">
<strong>Sharing</strong>
<?php echo do_shortcode('[widget id="synved_social_share-2"]'); ?>
</div>
</aside>
		</div>
	</section>
  
  
  <?php get_template_part('content', 'ask-a-health-question'); ?>
  <?php get_template_part('content', 'footer-logos'); ?>

</div>

<?php get_footer(); ?>