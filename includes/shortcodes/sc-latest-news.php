<?php
function latest_news_func( $atts ) {
    $wp_args = array(
        'post_type'         => 'post',
        'post_status'       => 'publish',
        'orderby'           => 'date',
        'order'             =>  'ASC',
        'posts_per_page'    => 5,
        'max_num_pages'     => 5
        
    );
    $wp_query = new WP_Query($wp_args);

    ob_start();

if ( $wp_query->have_posts() ):
        echo '<div class="lates-new a-wp" data-revl-offset="80%">';
        while ( $wp_query->have_posts() ) : $wp_query->the_post(); 
            $currentExcerpt = get_field('excerpt',(string)get_the_ID());
            // var_dump($currentExcerpt);

            $articleThumb = get_field('thumbnail',(string)get_the_ID());
            if(empty($articleThumb)){
                $articleThumb = get_field('banner_background',(string)get_the_ID());
                if(empty($articleThumb)){
                    $articleThumb = wp_get_attachment_url( get_post_thumbnail_id( (string)get_the_ID() ));
                }
            }
        ?>
            <div class="news-list a-delay-1 a-fadeIn a-up">
                <div class="lates-new-cover">
                    <div class="new-img"><img src="<?php echo $articleThumb; ?>" alt=""/></div>
                    <div class="new-title">
                        <a href="<?php echo get_permalink((string)get_the_ID()); ?>">
                            <?php the_title() ?>
                        </a>
                    </div>
                    <div class="new-description">
                        <p><?php echo substr(get_the_excerpt((string)get_the_ID()), 0,80)."…"?></p>
                    </div>
                    <a class="cover-link" href="<?php echo get_permalink((string)get_the_ID()); ?>"></a>
                </div>
            </div>
            
        <?php
        endwhile;
        echo '</div>';
    endif;

    return ob_get_clean();
}
add_shortcode( 'latest_news', 'latest_news_func' );
