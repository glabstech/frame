<?php 
    $fields = $section['comp_fullwidth_cta'];
    // var_dump($fields['color_theme']);
?>
<div class="container-fluid component-fullwidth-cta-outer theme-<?php echo $fields['color_theme'] ?>" style=""><div class="row">

<div <?php echo $fr_settings->id ?>
    class="component-fullwidth-cta <?php echo $fr_settings->class ?> <?php echo ($fr_settings->layout_type === 'boxed')?'container':'container-fluid' ?>"
    data-section-index="<?php echo $fr_settings->index ?>" 
    style=" 
            <?php echo $fr_settings->padding ?>
            <?php echo $fr_settings->margin  ?>
            <?php echo $fr_settings->background ?>
        "
    >
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-7">
                <h3 class="fullwidth-cta-title"><?php echo $section['el_title']['text']  ?></h3>
                <h4 class="fullwidth-cta-subtitle"><?php echo $section['el_title']['sub_text'] ?></h4>
            </div> 
            <div class="col-sm-5">
                <a class="btn btn-primary btn-block btn-lg" href="<?php echo $fields['cta_button']['url'] ?>"><?php echo $fields['cta_button']['title'] ?><span>»</span></a>
                <div class="fullwidth-cta-phone-outer">OR CALL <a class="cta-phone" href="<?php echo $fields['cta_phone']['url'] ?>"><?php echo $fields['cta_phone']['title'] ?></a></div>
            </div>   
        </div>

    </div>

</div>

</div></div>