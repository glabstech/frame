<?php

//Company Logos

?>

<!--Company Logos - Block-->
<section id="companylogos" class="a-wp">
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="cmp-logos-title"><h3 class="a-fadeIn a-up a-delay-0"><?php echo _value_($section['content']) ?></h3></div>
                <?php if(!empty($section['logo'])){
                    $index = 2;     
                ?>
                <ul class="com-logo-ul">
                    <?php foreach($section['logo'] as $logo){?>
                    <li><img class="a-fadeIn a-up a-delay-<?php echo ($index++) ?>" src="<?php echo $logo['logo'] ?>" alt="logo-<?php echo _value_($logo['company'])?>"/></li>
                    <?php } ?>
                    
                </ul>
                <?php } ?>
            </div>
        </div>
    </div>
</section><!-- End :: Company Logos - Block-->