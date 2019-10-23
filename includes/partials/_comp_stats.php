<?php 
    // var_dump($section);
?>

<div <?php echo $fr_settings->id ?>
    class="component-stats <?php echo $fr_settings->class ?> <?php echo ($fr_settings->layout_type === 'boxed')?'container':'container-fluid' ?>"
    data-section-index="<?php echo $fr_settings->index ?>" 
    style=" 
            <?php echo $fr_settings->padding ?>
            <?php echo $fr_settings->margin  ?>
            <?php echo $fr_settings->background ?>
        "
            
    >
    
    <div class="container">
        <h2 class="section-title text-center"><?php echo $section['el_title']['text'] ?></h2>
        <h4 class="section-title-sub text-center"><?php echo $section['el_title']['sub_text'] ?></h4>

        <div class="stats-inner">
            <?php 
                //var_dump($fr_component);
                foreach($fr_component as $stat){
                    ?>
                        <div class="stat">
                            <div class="stat-figure"><?php echo $stat['stat'] ?></div>
                            <div class="stat-label"><?php echo $stat['label']?></div>
                        </div>
                    <?php
                }
            ?>

        </div>

    </div>

</div>