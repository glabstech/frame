<?php 



?>
<div class="container-fluid component-testimonials-outer"
    style=" 
        <?php echo $fr_settings->padding ?>
        <?php echo $fr_settings->margin  ?>
        <?php echo $fr_settings->background ?>
    "><div class="row">
    <div class="background-title"><?php echo $section['el_title']['text'] ?></div>
<div <?php echo $fr_settings->id ?>
    class="component-testimonials <?php echo $fr_settings->class ?> <?php echo ($fr_settings->layout_type === 'boxed')?'container':'container-fluid' ?>"
    data-section-index="<?php echo $fr_settings->index ?>" 
    >
    
    <div class="row">
        <div class="col">
            <h4 class="section-subtitle section-subtitle-top"><?php echo $section['el_title']['sub_text']?></h4>
            <h2 class="section-title section-title-lg text-left"><?php echo $section['el_title']['text'] ?></h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="testimonials-boxes">
                <?php
                    //testimonials    
                    $query = new WP_Query( array(
                        'post_type' => 'testimonials',
                        'posts_per_page' => 3
                    ) );
                    $count = 0;
                    foreach($query->posts as $_post){
                        $image = get_field('image',$_post->ID);
                        $position = get_field('position',$_post->ID);
                        $activeClass = "";
                        if($count == 1) $activeClass = "active";
                        //var_dump($image);
                        ?>
                            <div class="testimonial-box <?php echo $activeClass ?>">
                                <div class="testimonial-box__photo" style="background-image: url(<?php echo $image ?>)"></div>
                                <div class="testimonial-box__statement">
                                    <?php echo $_post->post_content ?>
                                </div>
                                <div class="testimonial-box__person">
                                    <label><?php echo $_post->post_title ?></label>
                                    <span><?php echo $position ?></span>
                                </div>
                            </div>
                        <?php
                        $count++;
                    }
                ?>
                

            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col text-center mt-5">
            <a href="/testimonials" class="btn btn-primary">View More Testimonials <span>»</span></a>
        </div>
    </div>
    
</div>

</div>

</div></div>