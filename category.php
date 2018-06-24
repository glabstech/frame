<?php get_header(); ?>

<div class="internal-page-banner internal-page main-internal-page-template">
    <section class="main-heading-wrapper" data-bgimage="<?php bloginfo('template_url'); ?>/assets/images/page-banner-default.jpg" style="background-image: url(<?php bloginfo('template_url'); ?>/assets/images/page-banner-default.jpg); background-size: cover; background-position: center 0px; background-repeat: no-repeat;">
        <div class="susy-container">
            <div class="main-headline-wrapper">
                <h1 class="the-headline"><?php the_title(); ?></h1>
            </div>
        </div>
    </section>
</div>

<div class="internal-page blog categories">



	<section class="main-content">
		<div class="susy-container clearfix">
<div class="feed">

<h2 class="headline">Category: <?php single_cat_title(); ?></h2>

<?php
$post_counter = 0;
 if (have_posts()) : while (have_posts()) : the_post(); 

?>

<?php $post_counter++; ?>

<article class="clearfix <?php if( $post_counter == count( $posts ) ) echo 'last'; ?>">
<?php if ( has_post_thumbnail() ) : ?>
<div class="image-wrapper">
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
</div>
<?php endif; ?>

<div class="text-wrapper">
<div class="clearfix">

<div class="txt-left">
<h2 class="subhead"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>


<?php if ( get_the_author_meta('is_featured', get_the_author_meta( 'ID' ) ) == 'Yes' ) : ?>

<div class="time-wrapper"><time><?php the_time( get_option( 'date_format' ) ); ?></time> by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="author"><?php the_author(); ?></a> <a href="#" class="comments" style="display:none;">Comments (0)</a></div>

<?php else: ?>

<div class="time-wrapper"><time><?php the_time( get_option( 'date_format' ) ); ?></time> by <div class="author"><?php the_author(); ?></a></div> <a href="#" class="comments" style="display:none;">Comments (0)</a></div>

<?php endif; ?>




</div>
</div>


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
</aside>
		</div>
	</section>

</div>

<?php get_footer(); ?>