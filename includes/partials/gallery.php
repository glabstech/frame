<?php
    // Gallery Section - based on custom post type 'gallery'

    //fetch gallery post types
    $wp_args = array(
        'post_type'         => 'cdc_gallery',
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
    

    $totalImages = 0;
    $totalCollections = 0;//count($gallery);
    $galleryDisplayFormat = $section['display_format'];
    $currentPageID = get_the_ID();
    //var_dump($wp_query);

    if($galleryDisplayFormat === 'masonry'){
        $html_images = _renderMasonry($wp_query);
    }
    else if($galleryDisplayFormat === 'by_collection'){
        $html_images = _renderCollections($wp_query);
    }

    function _renderMasonry($wp_query){
        global $totalImages,$totalCollections;
        $ret = "";
        
        
        if ( $wp_query->have_posts() ):
            
            while ( $wp_query->have_posts() ) : $wp_query->the_post(); 
                
                $images = get_field('images');
                $totalImages += count($images);
                if(!empty($images)){
                    $totalCollections += 1;
                    foreach($images as $image){
                        //var_dump($image['url']);
                        $ret .= '<div class="image-grid__item">
                                    <img style="width:100%; height:auto;" class="image-grid__image" alt="" src="'.$image['url'].'">
                                </div>';  
                    }
                }
            endwhile;
        else :
            ?> <p><?php _e( 'Sorry, currently you have no gallery post types.' ); ?></p> <?php
        endif;

        $ret =  '<div class="image-grid are-images-unloaded" data-js="image-grid">
                    <div class="image-grid__col-sizer"></div>
                <div class="image-grid__gutter-sizer"></div>'. $ret .'</div>';
        return $ret;
    }

    function _renderCollections($wp_query){
        global $totalImages, $totalCollections;
        $ret = "";
        //var_dump($gallery);
        ob_start();
        
        if ( $wp_query->have_posts() ):
            $imagesJSON = [];
            $collectionIndex = 0;
            while ( $wp_query->have_posts() ) : $wp_query->the_post(); 
                
                $images = get_field('images');
                
                $totalImages += count($images);
                if(!empty($images)){
                    $totalCollections += 1;
                    $imagesJSON['images-collection-'.((string)++$collectionIndex)] = $images;
                    //$collectionIndex;
                ?>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="collection-cover a-wp" data-revl-offset="70%">
                            <div class="collection-inner" data-image-collection="<?php echo 'images-collection-'.$collectionIndex ?>">
                                <div data-collection-index="0" class="a-fadeIn a-delay-<?php echo $collectionIndex ?> a-up main-collection-img collection-trigger" style="background-image:url(<?php echo $images[0]['url']?>)"><img src="<?php echo $images[0]['url']?>" alt="g-guide-1"/></div>
                                <div class="s-t-cover side-collection-img">
                                    <div data-collection-index="1" class="a-fadeIn a-delay-<?php echo $collectionIndex + 1 ?> a-up second-collection-img collection-trigger" style="background-image:url(<?php echo $images[1]['url']?>);"><img src="<?php echo $images[1]['url']?>" alt="g-guide-2"/></div>
                                    <div data-collection-index="2" class="a-fadeIn a-delay-<?php echo $collectionIndex + 2 ?> a-up third-collection-img collection-trigger" style="background-image:url(<?php echo $images[2]['url']?>)"><img src="<?php echo $images[2]['url']?>" alt="g-guide-3"/></div>
                                </div>
                                <div class="a-fadeIn a-delay-<?php echo $collectionIndex + 3 ?> a-up gallery-collection-title"><h3><a style="color:#000;"><?php the_title(); ?></a></h3></div>
                                <div class="a-fadeIn a-delay-<?php echo $collectionIndex + 4 ?> a-up gallery-collection-count"><h6><?php echo count($images); ?> Photos</h6></div>
                            </div>
                        </div>
                    </div> 
                <?php
                }
            endwhile;
            echo '<script>var gallery_collections = '.json_encode($imagesJSON).';</script>';
        else :
            ?> <p><?php _e( 'Sorry, currently you have no gallery post types.' ); ?></p> <?php
        endif;

        $ret = ob_get_clean();
        $ret =  '<div class="row gallery-entire-cover">'
                    . $ret .
                '</div>';
        return $ret;
    }
?>

<div class="container-fluid services-menu-cover">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <nav class="services-menu a-wp" data-revl-offset="80%">
                    <ul>
                        <?php
                            
                            $galleryPageObj         = get_field('gallery_settings','option')['assign_gallery_page'];
                            $collectionPageObj      = get_field('gallery_settings','option')['assign_collections_page'];
                        ?>
                        <li class="a-delay-1 a-right a-fadeIn <?php echo ($currentPageID == reset($galleryPageObj)->ID)?'active':'' ?>"><a href="<?php echo get_permalink(reset($galleryPageObj)->ID) ?>"><?php echo $totalImages ?> Photos</a></li>
                        <li class="a-delay-2 a-right a-fadeIn <?php echo ($currentPageID == reset($collectionPageObj)->ID)?'active':'' ?>"><a href="<?php echo get_permalink(reset($collectionPageObj)->ID) ?>"><?php echo $totalCollections ?> Collections</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>


<section id="image_set_section">
    <div class="container-fluid">
        <div class="container">
                <?php echo $html_images; ?>
        </div>
    </div>    
</section>

<?php // Modal ?>

<div role="dialog"  class="modal fade" id="gallery-collection-modal" tabindex="-1" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
		<div class="modal-body"></div>
		</div>
	</div>
</div>
