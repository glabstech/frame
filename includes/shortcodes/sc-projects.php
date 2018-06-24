<?php
    //PROJECT GRID SHORTCODE
?>
<?php


function products_grid_func( $atts ) {
    $a = shortcode_atts( array(
        'show' => 'all',
    ), $atts );
    
    query_posts(array( 
        'post_type' => 'cdc_projects'
    ) );

    ob_start();
    ?>
        <?php
            $animation = "fadeInDown"; 
            $animations = array('a-left','a-right','a-up',);
            $index=1;
            while (have_posts()) : the_post();
                //$animation = $animations($index%3);
                
            ?>
                <div class="project-item col-md-4 col-sm-6 col-xs-12 m-b-30 a-wp a-fadeIn a-delay-2 <?php echo $animations[$index%3]; $index++;  ?>" >
                    <div class="hovereffect" style="background-image:url(<?php echo get_the_post_thumbnail_url() ?>)">
                        <!-- <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url() ?>" alt=""> -->
                        <div class="overlay" >
                            <h2><?php the_title(); ?></h2>
                            <p class="info"><?php echo get_field('excerpt',get_the_ID()); ?></p>
                        </div>
                    </div>
                </div>
            <?php
                if($animation === "fadeInDown"){
                    $animation = "fadeInUp";
                }
                else{
                    $animation = "fadeInDown";    
                }
            ?>        
        <?php endwhile;?>
    <?php
    return ob_get_clean();
}
add_shortcode( 'products_grid', 'products_grid_func' );