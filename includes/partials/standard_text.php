<?php
    //standard text
    //var_dump($section['disable_outer_wrapper']);
    $outer = $section['disable_outer_wrapper'];
    $hideOuter = false;
    if($outer == true){
        $hideOuter = true;
    }

    $currentPostType = get_post_type();
    if($currentPostType==="post" || $currentPostType ==="cdc_services"){
        $hideOuter = true;    
    }
?>
<?php if($hideOuter == false){?>
<section class="standard-text a-wp">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 a-delay-0 a-fadeIn a-down">
                    <div class="<?php echo $section['content_wrapper_class']; ?>">
<?php }?>
                        <?php echo $section['content']; ?>
<?php if($hideOuter == false){?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }?>