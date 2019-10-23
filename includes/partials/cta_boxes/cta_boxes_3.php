<?php 

?>

<div class="cta-boxes-inner">
    <?php
        //var_dump($fr_component->boxes);
        $count = 0;
        foreach($fr_component->boxes as $box){
            $activeClass = (($count>=count($fr_component->boxes)-1))?"active":"";
            ?>
                <div class="cta-box <?php echo $activeClass ?>" data-image="<?php echo $box['background'] ?>" style="background-image:url(<?php echo $box['background'] ?>)">
                    <div class="cta-box-inner">
                        <div class="cta-box__subTitle text-center"><?php echo $box['el_title']['sub_text'] ?></div>
                        <div class="cta-box__title text-center"><?php echo $box['el_title']['text'] ?></div>
                        <div class="cta-box__description">
                            <?php echo $box['excerpt'] ?>
                        </div>
                        <a target="<?php echo $box['main_cta_button_el_button']['target'] ?>" class="btn btn-primary btn-block" href="<?php echo $box['main_cta_button_el_button']['link'] ?>"><?php echo $box['main_cta_button_el_button']['text'] ?> <span>»</span></a>
                    </div>
                </div>
            <?php
            $count++;
        }
    ?>
        
</div>