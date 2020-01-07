<?php 
    $paged = (isset($_GET['page']) && !empty($_GET['page']))?$_GET['page']:1;
?>

<div class="container-fluid component-blog-list-outer"
    style=" 
        <?php echo $fr_settings->padding ?>
        <?php echo $fr_settings->margin  ?>
        <?php echo $fr_settings->background ?>
        <?php echo $fr_settings->zindex ?>
     ;position:relative; "><div class="row">
    <div class="background-title"><?php echo $section['el_title']['text'] ?></div>
<div <?php echo $fr_settings->id ?>
    class="component-blog-posts <?php echo $fr_settings->class ?> <?php echo ($fr_settings->layout_type === 'boxed')?'container':'container-fluid' ?>"
    data-section-index="<?php echo $fr_settings->index ?>" 
    >

    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="section-title section-title-lg text-left"><?php echo $section['el_title']['text'] ?></h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="blog-list">
                <?php
                    //testimonials    
                    $query = new WP_Query( array(
                        'post_type' => 'post',
                        'posts_per_page' => 10,
                        'paged' => $paged
                    ) );
                    $count = 0;
                    foreach($query->posts as $_post){
                        $activeClass = "";
                        
                        ?>
                            <article>
                                <div class="blog-thumb" style="background-image:url(<?php echo get_the_post_thumbnail_url($_post->ID,'full') ?>)"></div>
                                <div class="blog-details">
                                    <div class="blog-title"><a href="<?php echo get_permalink($_post->ID)?>"><?php echo $_post->post_title ?></a></div>
                                    <div class="blog-excerpt"><?php echo $_post->post_excerpt ?>  &nbsp; &nbsp;<a href="<?php echo get_permalink($_post->ID)?>">Read More...</a></div>
                                    
                                </div>
                            </article>

                        <?php
                        $count++;
                    }
                ?>
            </div>
            <div class="blog-list-pagination">
                <!-- TODO  max_num_pages-->
            </div>
        </div>
    </div>


</div>
</div>
</div>