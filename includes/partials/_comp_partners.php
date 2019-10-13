<?php

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
    <h2 class="section-title section-title-sm text-center"><?php echo $section['el_title']['text'] ?></h2>
    <div class="owl-partners owl-carousel owl-theme">
    <?php
        $partners = get_field('partners','options');
        // var_dump($partners);

        foreach($partners as $partner){
            echo '<div class="item"><a href="'.$partner['link'].'"><img src="'.$partner['logo'].'"></a></div>';
        }
    ?>
    </div>
</div>