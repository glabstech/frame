<?php
    //PROJECT GRID SHORTCODE
?>
<?php


function hashtag_block_func( $atts ) {
    global $currentID;
    global $_post;

    $noLink = false;

    $a = shortcode_atts( array(
        'post-type' => '',
        'current_post' => ''
    ), $atts );
    
    $args = [
        'taxonomy' => 'cdc_tags',
        'hide_empty' => true,
    ];

    $_postType = get_post_type($_post->ID);
    //var_dump($_postType);
    if(!empty($_postType)){
        if($_postType === "cdc_services"){
            $noLink = true;
        }
    }

    if(!empty($a['current_post'])){
        if($a['current_post'] === "true"){
            //$terms = get_the_terms($currentID, 'cdc_tags');
            // $terms = _get_terms_('cdc_tags',array(
            //     'hide_empty' => 0,
            //     'post_types' =>array($a['post-type'])
            // ));
            if(!empty($a['post-type'])){
                $terms = get_the_terms($_post->ID,'cdc_tags');
            }
            else{
                $terms = wp_get_post_terms(get_the_ID(),'cdc_tags');
            }
        }
    }
    else if(!empty($a['post-type'])){
        //$terms = get_object_taxonomies('post','objects')['cdc_tags'];
        //$terms = get_terms($args);
        $terms = _get_terms_('cdc_tags',array(
            'hide_empty' => 0,
            'post_types' =>array($a['post-type'])
        ));
    }
    else{
        $terms = _get_terms_('cdc_tags',array(
            'hide_empty' => 0,
            'post_types' =>array('post')
        ));
    }

    
    ob_start();
    //var_dump($terms);
    ?>
    <div class="tag-cover a-wp" data-revl-offset="80%">
        <div class="tag-list a-fadeIn a-up a-delay-1">
            <ul>
                <?php
                if(!empty($terms)){
                    foreach($terms as $term){
                        //var_dump($term);
                    ?>
                        <li><a href="<?php 
                            if(!$noLink){
                                echo get_site_url().'/cdc_tags/'.$term->slug; 
                            }
                            else{ 
                                echo "#";
                            } ?>"><span>#</span><?php echo $term->name ?></a></li>
                    <?php    
                    }
                }
                ?>
            </ul>
        </div>
    </div>   
    <br><br> 
    <?php
    return ob_get_clean();
}
add_shortcode( 'hashtag_block', 'hashtag_block_func' );