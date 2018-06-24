<?php
    //GALLERY MODULE
    $gallery = get_field('gallery','option');
    //var_dump($gallery);

    $totalImages = 0;
    $totalCollections = count($gallery);
    $galleryDisplayFormat = $section['display_format'];
    
    if($galleryDisplayFormat === 'masonry'){
        $html_images = renderByMasonry($gallery);
    }
    else if($galleryDisplayFormat === 'by_collection'){
        $html_images = renderByCollection($gallery);
    }

    
    /*
        RENDER BY MASONRY
    */
    function renderByMasonry($gallery){
        global $totalImages;
        $ret = "";

        foreach($gallery as $galleryItem){
            $totalImages += count($galleryItem['images']);
    
            //loop images inside a gallery
            foreach($galleryItem['images'] as $images){
                
                $ret .=     '<div class="image-grid__item">
                                            <img style="width:100%; height:auto;" class="image-grid__image" alt="" src="'.$images['url'].'">
                                    </div>';  
            }
        }


        $ret =  '<div class="image-grid are-images-unloaded" data-js="image-grid">
                    <div class="image-grid__col-sizer"></div>
                    <div class="image-grid__gutter-sizer"></div>'. $ret .'</div>';
        return $ret;
    }

    /*
        RENDER BY COLLECTION
    */
    function renderByCollection($gallery){
        global $totalImages;
        $ret = "";
        //var_dump($gallery);
        ob_start();
        foreach($gallery as $galleryItem){
            $totalImages += count($galleryItem['images']);
    
            //loop images inside a gallery
            

            //foreach($galleryItem['images'] as $images){
                
            ?>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="collection-cover">
                        <div class="collection-inner">
                            <div class="main-collection-img" style="background-image:url(<?php echo $galleryItem['images'][0]['url']?>)"><img src="<?php echo $galleryItem['images'][0]['url']?>" alt="g-guide-1"/></div>
                            <div class="s-t-cover side-collection-img">
                                <div class="second-collection-img" style="background-image:url(<?php echo $galleryItem['images'][1]['url']?>);"><img src="<?php echo $galleryItem['images'][1]['url']?>" alt="g-guide-2"/></div>
                                <div class="third-collection-img" style="background-image:url(<?php echo $galleryItem['images'][2]['url']?>)"><img src="<?php echo $galleryItem['images'][2]['url']?>" alt="g-guide-3"/></div>
                            </div>
                            <div class="gallery-collection-title"><h3><a href="">A GUIDE TO MRI SCANS</a></h3></div>
                            <div class="gallery-collection-count"><h6><?php echo count($galleryItem['images']); ?> Photos</h6></div>
                        </div>
                    </div>
                </div> 
            <?php
            //}
            
        }
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
                <nav class="services-menu">
                    <ul>
                        <?php
                            $currentPage = get_the_ID();
                            $collectionPageObj  = get_field('assign_collections_page','option');
                            $galleryPageObj     = get_field('assign_gallery_page','option')
                        ?>
                        <li class="<?php echo ($currentPage == reset($galleryPageObj)->ID)?'active':'' ?>"><a href="<?php echo get_permalink(reset($galleryPageObj)->ID) ?>"><?php echo $totalImages ?> Photos</a></li>
                        <li class="<?php echo ($currentPage == reset($collectionPageObj)->ID)?'active':'' ?>"><a href="<?php echo get_permalink(reset($collectionPageObj)->ID) ?>"><?php echo $totalCollections ?> Collections</a></li>
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