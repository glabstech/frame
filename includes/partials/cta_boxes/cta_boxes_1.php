<?php 

?>
<h2 class="section-title text-center"><?php echo $fr_component->el_title['text'] ?></h2>
<div class="cta-boxes-inner">
    <?php
        $count = 0;
        foreach($fr_component->boxes as $box){

            $activeClass = (($count>=count($fr_component->boxes)-1))?"active":"";
            ?>

            <div class="cta-box <?php echo  $activeClass ?>" >
                <img class="cta-box__icon" src="<?php echo $box['icon'] ?>">
                <div class="cta-box__subTitle"><?php echo $box['el_title']['sub_text'] ?></div>
                <div class="cta-box__title"><?php echo $box['el_title']['text'] ?></div>
                <div class="cta-box__description"><?php echo $box['excerpt'] ?></div>
                <a class="btn btn-primary" href="<?php echo $box['main_cta_button_el_button']['link'] ?>" target="<?php echo $box['main_cta_button_el_button']['target'] ?>"><?php echo $box['main_cta_button_el_button']['text'] ?> <span>»</span></a>
                <?php
                    if(!empty($box['secondary_button_el_button']['text'])){
                        echo '<a target="'.$box['secondary_button_el_button']['target'].'" class="cta-link" href="'.$box['secondary_button_el_button']['link'].'">'.$box['secondary_button_el_button']['text'].' <span>»</span></a>';
                    }
                ?>
            </div>

            <?php
            $count++;
        }
    ?>
        
        <!-- <div class="cta-box active">
            <img style="margin-top:-26px;" class="cta-box__icon" src="/wp-content/uploads/2019/10/icon-financial-planning.png">
            <div class="cta-box__subTitle">Profacc</div>
            <div class="cta-box__title">Financial Planning</div>
            <div class="cta-box__description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </div>
            <a class="btn btn-primary" href="#">Discover More<span>»</span></a>
            <a class="cta-link" href="#">View Financial Services Guide<span>»</span></a>
        </div> -->
</div>