<?php
    //HORIZONTAL SERVICE PANEL
?>

<section id="featured">
    <div class="container">
        <div class="row">
            <?php
                $len = count($section['service']);
                if($len > 0){
                    for($i=0;$i<$len;$i++){
                        //var_dump($section['service'][$i]['name']);
                        $orientation    = ((($i+1)%2)==0)?'right-service-img':'left-service-img';
                        $imagePull      = ((($i+1)%2)==0)?'pull-right':'pull-left';
                        $descriptionPull= ((($i+1)%2)==0)?'pull-left':'pull-right';  
                    ?>
                        <div class="<?php echo $orientation ?> service-item">
                            <div class="col-md-6 col-sm-6 col-xs-6 <?php echo $imagePull ?> wow bounceInLeft">
                                <div class="services-image">
                                    <div class="services-img"><img src="<?php echo $section['service'][$i]['image'] ?>" alt=""/></div>
                                    <div class="services-date"><?php echo $i+1 ?></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 <?php echo $descriptionPull ?> wow bounceInRight">
                                <div class="services-content-hole-cover">
                                    <div class="services-title"><h3><?php echo $section['service'][$i]['name'] ?></h3></div>
                                    <div class="services-description">
                                        <?php echo $section['service'][$i]['service_description'] ?>
                                    </div>
                                    <div target="<?php echo $section['service'][$i]['cta']['target'] ?>" class="read-more"><a href="<?php echo $section['service'][$i]['cta']['url'] ?>"><?php echo $section['service'][$i]['cta']['title'] ?> <span>&#8594;</span></a></div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                }
            ?>
        </div>
    </div>
</section>