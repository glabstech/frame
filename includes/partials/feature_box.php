<?php

//var_dump($section);
//$filename = pathinfo(__FILE__)['filename'];
//$_section = $section;

//var_dump($_section);
?>

<!-- FEATURE BOX SECTION -->
<section id="services" class="a-wp">
    <div class="container wow fadeIn">
        <div class="section-header">
            <h3 class="section-title a-fade-up a-delay-0"><?php echo _value_($section['title']); ?></h3>
            <p class="section-description a-fade-up a-delay-1"><?php echo _value_($section['content']); ?></p>
        </div>
        <?php if(!empty($section['box'])){?>
        <div class="services-box-m">
            <div class="row">
                <?php $index = 0; foreach($section['box'] as $box){ ?>
                <div class="service-boxs col-lg-4 col-md-6 box a-fadeIn a-right a-delay-<?php echo ($index++)*2 ?>">
                    <div class="icon"><img src="<?php echo _value_($box['icon']) ?>" alt="mini" /></div>
                    <h4 class="title"><a href="<?php echo _value_($box['link']) ?>"><?php echo _value_($box['title']) ?></a></h4>
                    <p class="description"><?php echo _value_($box['content']) ?></p>
                </div>
                <?php } ?>
                <!-- <div class="service-boxs col-lg-4 col-md-6 box wow fadeInUp" data-wow-delay="0.2s">
                    <div class="icon"><img src="img/labour.png" alt="labour"/></div>
                    <h4 class="title"><a href="">Labour hire</a></h4>
                    <p class="description">Duis tempor ipsum nec mi interdum, id pharetra enim lacinia. Quisque nec massa nec erat imperdiet iaculis. Maecenas hendrerit in nulla a condimentum.</p>
                </div>
                <div class="service-boxs col-lg-4 col-md-6 box border-0 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="icon"><img src="img/equipement.png" alt="equipement" /></div>
                    <h4 class="title"><a href="">Equipment</a></h4>
                    <p class="description">Mauris ipsum felis, auctor et felis vehicula, faucibus aliquam magna. Integer tempor euismod malesuada. Donec vitae eros porta ligula.</p>
                </div> -->

            </div>
        </div>
        <?php } ?>
    </div>
</section><!-- END :: FEATURE BOX SECTION -->