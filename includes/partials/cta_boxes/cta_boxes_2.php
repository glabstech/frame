<?php 

?>
<div class="container">
    <div class="row">
        <div class="">


<h2 class="section-title text-center"><?php echo $fr_component->el_title['text'] ?></h2>
    <div class="cta-boxes-inner cta-boxes-inner-count-<?php echo count($fr_component->boxes) ?>"> 
        <?php
            $count = 0;
            foreach($fr_component->boxes as $box){
                $titleClass = "";
                $activeClass = (($count>=count($fr_component->boxes)-1))?"active":"";
                ?>
                    <div class="cta-box cta-box-<?php echo $box['color_theme'] ?>">
                        <div class="cta-box-inner">
                            <img class="cta-box__icon" src="<?php echo $box['icon'] ?>">
                            <img class="cta-box__icon hover" src="<?php echo $box['icon_hover'] ?>">
                            <?php if((int)strlen($box['el_title']['text']) > 28 ) $titleClass = "title-sm";?>
                            <div class="cta-box__title <?php echo $titleClass ?>"><?php echo $box['el_title']['text'] ?></div>
                            <div class="cta-box__description"><?php echo $box['excerpt'] ?></div>
                            <a class="btn btn-primary" href="<?php echo $box['main_cta_button_el_button']['link'] ?>" target="<?php echo $box['main_cta_button_el_button']['target'] ?>"><?php echo $box['main_cta_button_el_button']['text'] ?> <span>»</span></a>
                        </div>
                    </div>
                <?php
            }
        ?>   
        <!-- <div class="cta-box cta-box-red">
            <div class="cta-box-inner">
                <img class="cta-box__icon" src="/wp-content/uploads/2019/10/service-business-accounting.png">
                <img class="cta-box__icon hover" src="/wp-content/uploads/2019/10/service-business-accounting-active.png">
                <div class="cta-box__title">Business Accounting</div>
                <div class="cta-box__description">
                    Lorem ipsum dolor sit amet, consectetur
                </div>
                <a class="btn btn-primary" href="#">Discover More<span>»</span></a>
            </div>
        </div>
        <div class="cta-box cta-box-orange">
            <div class="cta-box-inner">
                <img class="cta-box__icon" src="/wp-content/uploads/2019/10/service-income-tax-return.png">
                <img class="cta-box__icon hover" src="/wp-content/uploads/2019/10/service-income-tax-return-active.png">
                <div class="cta-box__title">Income Tax Return</div>
                <div class="cta-box__description">
                    Lorem ipsum dolor sit amet, consectetur.
                </div>
                <a class="btn btn-primary" href="#">Discover More<span>»</span></a>
            </div>
        </div>
        <div class="cta-box active cta-box-green">
            <div class="cta-box-inner">
            <img class="cta-box__icon" src="/wp-content/uploads/2019/10/service-financial-planning.png">
            <img class="cta-box__icon hover" src="/wp-content/uploads/2019/10/service-financial-planning-active.png">
            <div class="cta-box__title">Financial Planning</div>
            <div class="cta-box__description">
                Lorem ipsum dolor sit amet, consectetur.
            </div>
            <a class="btn btn-primary" href="#">Discover More<span>»</span></a>
            </div>
        </div>
        <div class="cta-box cta-box-blue">
            <div class="cta-box-inner">
            <img class="cta-box__icon" src="/wp-content/uploads/2019/10/service-business-advisory.png">
            <img class="cta-box__icon hover" src="/wp-content/uploads/2019/10/service-business-advisory-active.png">
            <div class="cta-box__title">Business Advisory</div>
            <div class="cta-box__description">
                Lorem ipsum dolor sit amet, consectetur.
            </div>
            <a class="btn btn-primary" href="#">Discover More<span>»</span></a>
            </div>
        </div>
        <div class="cta-box cta-box-purple">
            <div class="cta-box-inner">
            <img class="cta-box__icon" src="/wp-content/uploads/2019/10/service-book-keeping.png">
            <img class="cta-box__icon hover" src="/wp-content/uploads/2019/10/service-book-keeping-active.png">
            
            <div class="cta-box__title">Book Keeping</div>
            <div class="cta-box__description">
                Lorem ipsum dolor sit amet, consectetur.
            </div>
            <a class="btn btn-primary" href="#">Discover More<span>»</span></a>
            </div>
        </div> -->
</div>



</div>
    </div>
</div>