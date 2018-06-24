<?php
    // Services list based on Services Custom Post type

    //fetch services post types
    $wp_args = array(
        'post_type'         => 'cdc_services',
	 	'post_status'       => 'publish',
		'orderby'           => 'date',
		'order'             =>'DESC',
		//'caller_get_posts' 	=> 1,
	 	// 'paged'                 => /*$paged*/,
        //'tax_query' 						=> 	$taxQuery,
		//'post_parent' => 0,
		'posts_per_page' => -1,
		
	);
    $wp_query = new WP_Query($wp_args);
    
    $currentPageID = get_the_ID();
    //var_dump($wp_query->posts);
?>

<section id="featured" class="services-alt-list">
    <div class="container">
        <div class="row">
            <?php
                $i=0;
                foreach($wp_query->posts as $_post){
                    $orientation    = ((($i+1)%2)==0)?'right-service-img':'left-service-img';
                    $imagePull      = ((($i+1)%2)==0)?'pull-right':'pull-left';
                    $descriptionPull= ((($i+1)%2)==0)?'pull-left':'pull-right';  

                    $animDirection  = ((($i+1)%2)==0)?'a-right':'a-left';
                ?>
                    <div class="<?php echo $orientation ?> service-item a-wp">
                        <a href="<?php echo get_permalink($_post->ID) ?>" class="cover-link"></a>
                        <div class="service-image-outer col-md-6 col-sm-6 col-xs-6 <?php echo $imagePull ?>">
                            <div class="services-image a-delay-0 a-fadeIn a-up">
                                <div class="services-img"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $_post->ID )) ?>" alt=""/></div>
                                <?php
                                    $numbering = $i+1;
                                    if($numbering < 10){
                                        $numbering = '0'.$numbering;
                                    }

                                ?>
                                <div class="services-date a-delay-2 a-fadeIn <?php echo $animDirection; ?>"><?php echo $numbering ?></div>
                            </div>
                        </div>
                        <div class="service-content-outer col-md-6 col-sm-6 col-xs-6 <?php echo $descriptionPull ?> ">
                            <div class="services-content-hole-cover">
                                <div class="services-title a-delay-2 a-fadeIn a-down"><h3><?php echo $_post->post_title ?></h3></div>
                                <div class="services-description a-delay-4 a-fadeIn a-down">
                                    <p><?php echo get_field('excerpt',$_post->ID) ?></p>
                                </div>
                                <div class="read-more a-delay-6 a-fadeIn a-down"><a href="<?php echo get_permalink($_post->ID) ?>">MORE <span>&#8594;</span></a></div>
                            </div>
                        </div>
                    </div>
                <?php
                    $i++;
                }
            ?>
        </div>
    </div>
</section>
<br><br>
