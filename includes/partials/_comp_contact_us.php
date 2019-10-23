<?php 
    $contactFields = get_field('contact','option');
?>

<div <?php echo $fr_settings->id ?>
    class="component-contact-us <?php echo $fr_settings->class ?> <?php echo ($fr_settings->layout_type === 'boxed')?'container':'container-fluid' ?>"
    data-section-index="<?php echo $fr_settings->index ?>" 
    style=" 
            <?php echo $fr_settings->padding ?>
            <?php echo $fr_settings->margin  ?>
            <?php echo $fr_settings->background ?>
            position:relative; z-index:1;
        "
            
    >
    
    <div class="card shadow b1 p-2 rounded-0">
        <div class="">
            <div class="row">
                <div class="col-md-4">
                    <div class="card border-0 rounded-0 p-5 contact-details">
                        <a class="contact-details-phone" href="<?php echo $contactFields['phone']['url'] ?>"><i class="fa fa-phone"></i><?php echo $contactFields['phone']['title'] ?></a>
                        <?php //var_dump($contactFields); ?>
                        <label>Office Address</label>
                        <?php echo $contactFields['office_address'] ?>
                        <img src="<?php echo $contactFields['map_image'] ?>" />
                        <label>Social Media</label>
                        <?php echo do_shortcode('[SocialLinks]') ?>
                    </div>
                </div>
                <div class="col-md-8 contact-form">
                    <div class="p-4">
                        <?php echo do_shortcode($contactFields['form_shortcode']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>