<?php
    //NEWS LIST Shortcode
?>
<?php


function news_list_func( $atts ) {
    $a = shortcode_atts( array(
        'show' => 'all',
        'cdc_tag' => ''//,
        //'post_type' =>''
    ), $atts );
    
    $taxQuery = null;
    if($a['cdc_tag'] != ''){
        $taxQuery = array(
            array(
              'taxonomy' => 'cdc_tags',
              'field' => 'slug',
              'terms' => $a['cdc_tag'],
              'include_children' => true
            )
        );
    }

    query_posts(array( 
        'post_type' => 'post',
        'tax_query' => $taxQuery
    ) );

    ob_start();
    ?>
        <?php while (have_posts()) : the_post(); ?>
                
        <div class="new_covers a-wp a-delay-1 a-up a-fadeIn" data-revl-offset="80%">
            <div class="list-news-img"><img src="<?php echo get_field('thumbnail') ?>" alt="" /></div>
            <div class="lnews-des-cover">
                <div class="list-news-title">
                    <h3><a href="<?php the_permalink() ?>" ><?php the_title() ?></a></h3>
                </div>
                <div class="list-news-description">
                    <p>
                        <?php echo get_the_excerpt(); ?>
                    </p>
                </div>
                <div style="text-transform:uppercase;" class="list-news-published-date"><?php echo get_the_date( 'd M Y' ); ?><!--09 JUL 2018--></div>
            </div>
            <a class="cover-link" href="<?php the_permalink() ?>" ></a>
        </div>
                
        <?php endwhile;?>
    <?php
    return ob_get_clean();
}
add_shortcode( 'news_list', 'news_list_func' );