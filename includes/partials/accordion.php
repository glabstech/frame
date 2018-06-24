<?php
    //ACCORDION
    $hideOuter = false;

    $currentPostType = get_post_type();
    if($currentPostType==="post"){
        $hideOuter = true;    
    }
?>

<section class="toggle_section">
    <?php if($hideOuter == false){?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
    <?php } ?>
                <div class="subhead_section">
                    <div class="subhead_content a-wp a-fadeIn a-delay-0">
                        <h3 class="a-fadeIn a-delay-1 a-up"><?php echo $section['title'] ?></h3>
                        <div class="a-fadeIn a-delay-2 a-down content_section font-16 black">
                            <?php echo $section['content']; ?>
                        </div>
                    </div>

                    <!--accordian-->
                    <?php
                        if(!empty($section['accordion_item'])){
                            $indexAccordion = 0;
                        ?>
                            <div id="accordion" class="a-wp a-fadeIn a-delay-0">
                                <?php
                                    $index = 1;
                                    foreach($section['accordion_item'] as $item){
                                    ?>
                                        <div class="card a-fadeIn a-up a-delay-<?php echo ($index++) ?>">
                                            <div class="card-header" id="heading-<?php echo $indexAccordion ?>">
                                                <h5 class="mb-0">
                                                    <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-<?php echo $indexAccordion ?>" aria-expanded="false" aria-controls="collapse-<?php echo $indexAccordion ?>">
                                                        <?php echo $item['title']; ?>
                                                    </a>
                                                </h5>
                                            </div>

                                            <div id="collapse-<?php echo $indexAccordion ?>" class="collapse" aria-labelledby="heading-<?php echo $indexAccordion ?>" data-parent="#accordion">
                                                <div class="card-body">
                                                    <?php echo $item['content']; ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                        $indexAccordion++;
                                    }
                                ?>
                            </div>
                        <?php
                        }
                    ?>
                </div>
    <?php if($hideOuter == false){?>
            </div>
        </div>
    </div>
    <?php } ?>
</section>