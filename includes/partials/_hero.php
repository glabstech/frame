<?php 
    //$fr_component
    //$fr_settings
    //var_dump($fr_settings->padding['top']);
?>
<div <?php echo $fr_settings->id ?>
    class="hero <?php echo $fr_settings->class ?> <?php echo ($fr_settings->layout_type === 'boxed')?'container':'container-fluid' ?>"
    data-section-index="<?php echo $fr_settings->index ?>" 
    style=" 
            <?php echo $fr_settings->padding ?>
            <?php echo $fr_settings->margin  ?>
            <?php echo $fr_settings->background ?>
        "
    <?php echo $fr_settings->background_mobile ?>
    <?php echo $fr_settings->main_background ?>
            
    >
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="hero__subtitle"><?php echo $fr_component->sub_title?></h3>
                <h1 class="hero__title"><?php echo $fr_component->title ?></h1>
                <div class="hero__excerpt"><?php echo $fr_component->excerpt ?></div>

                <a class="btn btn-primary btn-lg hero__button" target="<?php echo $fr_component->hero_button['target'] ?>" href="<?php echo $fr_component->hero_button['url'] ?>"><?php echo $fr_component->hero_button['title'] ?></a>
                <div class="hero__call"><?php echo $fr_component->call_button['label'] ?>
                    <a  class="hero__call-link"
                        href="<?php echo $fr_component->call_button['link']['url'] ?>"
                        target="<?php echo $fr_component->call_button['link']['target'] ?>">
                        <?php echo $fr_component->call_button['link']['title'] ?>
                    </a>
                </div>
            </div>
            
            <div class="col"></div>

        </div>
        <div class="row" style="position:relative;">
            <div class="mouse-indicator abs">
                <button class="mouse m-1"><i class="fas fa-chevron-down"></i></button>
            </div>
        </div>
    </div>

</div>