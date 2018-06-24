<?php

function social_links_func( $atts ) {
    $a = shortcode_atts( array(
        'show' => 'all',
    ), $atts );
    
    $social = get_field('social','option');
    if(!empty($social)){
        $social = $social['social_media_account'];
    }

    //var_dump($social);
    ob_start();
    if(!empty($social)){
    ?>
        <div class="social-links">
            <?php
                $index = 3;
                foreach($social as $soc){
            ?>
                <a href="<?php echo $soc['link']['url'] ?>" class="a-delay-<?php echo $index++; ?> a-fadeIn a-up"><i class="<?php echo $soc['icon'] ?>"></i></a>
            <?php }?>
        </div>
    <?php
    }
    return ob_get_clean();
}
add_shortcode( 'SocialLinks', 'social_links_func' );

