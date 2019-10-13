<?php 
    //$fr_component
    //$fr_settings
    //var_dump($fr_settings->padding['top']);
    //var_dump($fr_component);
    //print("<pre>".print_r($fr_component,true)."</pre>");

    //var_dump('===============');
    //var_dump($fr_component->box_style);
?>

<div <?php echo $fr_settings->id ?>
    class="cta-boxes cta-boxes-<?php echo $fr_component->box_style?> <?php echo $fr_settings->class ?> <?php echo ($fr_settings->layout_type === 'boxed')?'container':'container-fluid' ?>"
    data-section-index="<?php echo $fr_settings->index ?>" 
    style=" 
            <?php echo $fr_settings->padding ?>
            <?php echo $fr_settings->margin  ?>
            <?php echo $fr_settings->background ?>
        "
            
    >

    <?php include(get_stylesheet_directory().'/includes/partials/'.$type.'/'.$type.'_'.$fr_component->box_style.'.php'); ?>

</div>