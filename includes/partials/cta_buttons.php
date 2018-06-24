<?php
    //CTA Buttons
    //var_dump($section['title']);
?>
<section class="cta-section toggle_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="subhead_section mt0">
                    <div class="download_content mt0">  
                        <h3 class="a-wp a-fadeIn a-delay-0 a-down"><?php echo $section['title'] ?></h3>
                        <div class="a-wp a-fadeIn a-delay-1 a-up content_section font-16 black">
                            <?php echo $section['content'] ?>        
                        </div>
                        <?php if(!empty($section['cta'])){?>
                        <div class="download_buttons a-wp" data-revl-offset="70%">
                            <div class="btn-group">
                                <?php
                                    $index = 2;
                                    foreach($section['cta'] as $cta){
                                        //var_dump($cta);
                                        ?>
                                            <a class="a-right a-fadeIn a-delay-<?php echo $index++; ?> btn btn-default download-btn" target="<?php echo $cta['link']['target']?>" href="<?php echo $cta['link']['url']?>"><?php echo $cta['link']['title']?></a>
                                        <?php
                                    }
                                ?>
                                
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>