<?php
    //var_dump($section['text_left']);
?>

<section class="title-section a-wp" data-revl-offset="80%">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 a-delay-0 a-fadeIn a-down intro_content">
                <div class="<?php echo $section['content_class'];?>">
                    <?php echo $section['content']; ?>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="left-text-right-image image_section a-wp">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 a-right a-delay-1 a-fadeIn">
                <div class="content_section left-content font-16 black">
                    <?php echo $section['text_left'] ?>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="image_section_right">
                    <div class="stock_standard_image a-left a-delay-2 a-fadeIn">
                        <img alt="<?php echo $section['image_right_large'] ?>" src="<?php echo $section['image_right_large'] ?>" />
                    </div>
                    <div class="stock_position_image a-up a-delay-4 a-fadeIn">
                        <img alt="<?php echo $section['image_right_large'] ?>" src="<?php echo $section['image_right_small'] ?>" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

