<?php 
    $fields = $section['comp_text_image'];
    // var_dump($fr_settings);
?>
<div class="container-fluid component-text-image-outer"
    style=" 
                <?php echo $fr_settings->padding ?>
                <?php echo $fr_settings->margin  ?>
                <?php echo $fr_settings->background ?>
            "

><div class="row">

    <?php if(!empty($fr_settings->enable_background_title)){?>
    <div class="background-title"><?php echo $section['el_title']['text'] ?></div>
    <?php } ?>

<div <?php echo $fr_settings->id ?>
    class="component-text-image <?php echo $fr_settings->class ?> <?php echo ($fr_settings->layout_type === 'boxed')?'container':'container-fluid' ?>"
    data-section-index="<?php echo $fr_settings->index ?>" 
    >
    
    <div class="container-fluid">
            <div class="row">
                <div class="col">
                    
                    <h2 class="section-title"><?php echo $section['el_title']['text'] ?></h2>
                    <div class="section-content"><?php echo $fields['text'] ?></div>
                    <br><br>
                    <?php if(!empty($fields['cta'])){?>
                    <a href="<?php echo $fields['cta']['url'] ?>" class="btn btn-primary"><?php echo $fields['cta']['title'] ?> <span>»</span></a>
                    <?php } ?>
                </div>

                <div class="col image-outer image-orange image-<?php echo $fields['overlay_color'] ?>">
                    <?php if(!empty($fr_settings->enable_line_title)){?>
                    <div class="line-title"><?php echo $section['el_title']['text'] ?></div>
                    <?php }
                        $abstractBackgroundClass = !empty($fr_settings->show_abstract_background)?'':'no-abstract-bg';
                        $imageHeight = !empty($fields['image'])?'height: '.$fields['image_height'].'px;':'';
                        $orangeBGHeight = !empty($fields['overlay_height'])?'overlay-'.$fields['overlay_height']:'overlay-100';
                    ?>
                    <div class="image <?php echo $abstractBackgroundClass.' '.$orangeBGHeight ?>" style="background-image:url(<?php echo $fields['image'] ?>); <?php echo $imageHeight ?>"></div>
                </div>
            </div>
            
        </div>

    </div>

</div>

</div></div>