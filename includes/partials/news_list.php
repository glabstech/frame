<?php
    $outer = $section['disable_outer_wrapper'];
    $hideOuter = false;
    if($outer == true){
        $hideOuter = true;
    }
?>
<?php if($hideOuter == false){?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 post-contents">
<?php } ?>
            <div class="right-news-list-cover">
                <?php echo do_shortcode('[news_list]'); ?>
            </div>
<?php if($hideOuter == false){?>
        </div>
    </div
<?php } ?>