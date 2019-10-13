<?php

function social_links_func( $atts ) {
    $a = shortcode_atts( array(
        'show' => 'all',
    ), $atts );

    $socialIconMap = [
        'facebook'  => '<i class="fab fa-facebook-f"></i>',
        'instagram' => '<i class="fab fa-instagram"></i>',
        'youtube'   => '<i class="fab fa-youtube"></i>' 
    ];
    $social = get_field('social_media','option');

    //var_dump($social);
    ob_start();
    if(!empty($social)){
    ?>
        <div class="social-links">
            <?php
                foreach($social as $soc){
            ?>
                <a target="_blank" href="<?php echo $soc['profile_url'] ?>"><?php echo $socialIconMap[$soc['social_media_channel']]?></a>
            <?php }?>
        </div>
    <?php
    }
    return ob_get_clean();
}
add_shortcode( 'SocialLinks', 'social_links_func' );

