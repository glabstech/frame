<?php 
    $fields = $section['featured_testimonial'];
    //var_dump(get_field('image',$fields['featured']->ID));
?>

<div <?php echo $fr_settings->id ?>
    class="featured-testimonial <?php echo $fr_settings->class ?> <?php echo ($fr_settings->layout_type === 'boxed')?'container':'container-fluid' ?>"
    data-section-index="<?php echo $fr_settings->index ?>" 
    style=" 
            <?php echo $fr_settings->padding ?>
            <?php echo $fr_settings->margin  ?>
            <?php echo $fr_settings->background ?>
        "
            
    >
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                    <div class="inner">
                        <?php
                            $lineTitleHeight = !empty( $fields['line_title_height'] )?'line-title-height-'.$fields['line_title_height']:'';
                        ?>
                        <div class="line-title <?php echo $lineTitleHeight ?>">Testimonial</div>
                        <div class="photo" style="background-image: url(<?php echo get_field('image',$fields['featured']->ID) ?>)"></div>  
                        <div class="content">
                            <div class="statement"><?php echo $fields['featured']->post_content ?></div>
                            <div class="person">
                                - <?php echo $fields['featured']->post_title.', '.get_field('company',$fields['featured']->ID) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

</div>