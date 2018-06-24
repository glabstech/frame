<?php get_header(); ?>


<section id="hero" class="articel-banner" style="background-image: url(<?php echo get_field('banner_background') ?>)">
	<div class="hero-container a-wp">
		<h1 class="a-delay-0 a-fadeIn a-up" style="max-width:75%;"><?php echo get_the_title(); ?></h1>
		<div class="artical-hr"></div>
		<div class="a-delay-1 a-fadeIn a-up post-published-date"><?php echo get_the_date( 'd M Y' ) ?></div>
		<div class="share-post-icons">
			<?php echo do_shortcode('[SocialLinks]'); ?>
		</div>
	</div>
</section>

<main id="main">
	<?php  if (have_posts()) : while (have_posts()) : the_post(); ?>
	
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 post-contents">
				<?php include_once('includes/partials/partials.php'); ?>
			</div>
			<div class="col-lg-4 col-md-4 widget-area">
				<?php dynamic_sidebar('article-side'); ?>
			</div>
		</div>
	</div>

	<?php
		$currentFields = get_fields();
	?>
	<div class="container-fluid" id="post-navigation">
		<div class="pre-post-cover">
			<?php
			$prev_post = get_previous_post();
			$prevBG = get_field('banner_background',$prev_post->ID);

			if(empty($prev_post)){
				$prev_post = getNewestPost();	
				$prevBG = get_field('banner_background',$prev_post->ID);
			}
			if(!empty( $prev_post )){
			?>
			<div class="pre-post-fetcher post-fetcher" style="background-image: url(<?php echo $prevBG ?>)">
				<!-- <img src="<?php echo $currentFields['banner_background'] ?>" alt=""/> -->
				<div class="pre-post-nav bottom-post-nav"><span><a href="<?php echo get_permalink($prev_post->ID); ?>">Previous Article</a></span></div>
				<div class="pre-post-title bottom-post-title"><h1><?php echo $prev_post->post_title; ?></h1></div>
				<a class="cover-link" href="<?php echo get_permalink($prev_post->ID); ?>"></a>
			</div>
			<?php }
			else{
				//var_dump(getOldestPost());
			}?>
		</div>
		<div class="next-post-cover">
		<?php
			$next_post = get_next_post();
			//var_dump($next_post);
			$nextBG = get_field('banner_background',$next_post->ID);
			//var_dump($nextBG);
			if(empty($next_post)){
				$next_post = getOldestPost();	
				$nextBG = get_field('banner_background',$next_post->ID);
			}
			if(!empty( $next_post )){
		?>
			<div class="next-post-fetcher post-fetcher" style="background-image:url(<?php echo $nextBG ?>);">
				<div class="next-post-nav bottom-post-nav"><span><a href="<?php echo get_permalink($next_post->ID) ?>">Next Article</a></span></div>
				<div class="next-post-title bottom-post-title"><h1><?php echo $next_post->post_title ?></h1></div>
				<a class="cover-link" href="<?php echo get_permalink($next_post->ID); ?>"></a>
			</div>
			<?php } ?>
		</div>
	</div>
	
	<?php endwhile; endif; ?>
</main>

<?php dynamic_sidebar('pre-footer'); ?>
<?php get_footer(); ?>

<?php
	function getOldestPost(){
		$args = array(
			'offset'           => 0,
			'order'            => 'ASC',
			'post_type'        => 'post',
			'post_status'      => 'publish',
			'suppress_filters' => true 
		);
		$posts_array = get_posts( $args );
		return (reset($posts_array));
	}

	function getNewestPost(){
		$args = array(
			'offset'           => 0,
			'order'            => 'DESC',
			'post_type'        => 'post',
			'post_status'      => 'publish',
			'suppress_filters' => true 
		);
		$posts_array = get_posts( $args );
		return (reset($posts_array));
	}
?>

