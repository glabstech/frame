<?php
    //Video Section Template
?>
<section class="video_section a-wp a-fadeIn a-delay-0">
    <div class="video_section-background" style="background-image:url(<?php echo $section['background_image'] ?>)"></div>
    <div class="container">
        <div class="row">
        <div class="col-sm-12 text-center ">
            <h2 class="a-fadeIn a-delay-2 a-up"><?php echo $section['title']; ?></h2>
            <div class="a-fadeIn a-delay-4 a-up content_section font-16 white">
                <?php echo $section['content']; ?>
            </div>
            <?php //var_dump($section); ?>
            <button class="a-fadeIn a-delay-6 a-up btn btn-default btn-lg video" data-video="<?php echo $section['video_link']; ?>" data-toggle="modal" data-target="#videoModal">&nbsp;</button>
        </div>
        </div>
    </div>
</section>