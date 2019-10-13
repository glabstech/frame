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
            <div class="stat">
                <div class="stat-figure">55K<sup>+</sup></div>
                <div class="stat-label">Number of People Helped</div>
            </div>

            <div class="stat">
                <div class="stat-figure">9.6</div>
                <div class="stat-label">Average Workshop Rating Out of 10</div>
            </div>

            <div class="stat">
                <div class="stat-figure">90%</div>
                <div class="stat-label">Clients that Come from Referrals</div>
            </div>

        </div>

    </div>

</div>