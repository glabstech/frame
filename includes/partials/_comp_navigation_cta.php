<?php 
    //var_dump($section);

?>

<div <?php echo $fr_settings->id ?>
    class="component-navigation-cta <?php echo $fr_settings->class ?> <?php echo ($fr_settings->layout_type === 'boxed')?'container':'container-fluid' ?>"
    data-section-index="<?php echo $fr_settings->index ?>" 
    style=" 
            <?php echo $fr_settings->padding ?>
            <?php echo $fr_settings->margin  ?>
            <?php echo $fr_settings->background ?>
        "
            
    >
    <div class="container">
        <div class="row">
            <div class="navigation-cta-items">
            <?php
                global $wp;
                
                foreach($section['comp_navigation_cta'] as $item){
                    $current_slug = add_query_arg( array(), $wp->request );
                    $activeClass = "";
                    if($current_slug === $item['menu']['url'] || '/'.$current_slug === $item['menu']['url']){
                        $activeClass = "current-menu";
                    }
                    echo '<div class="navigation-cta-item '.$activeClass.'"><a href="'.$item['menu']['url'].'">'.$item['menu']['title'].'</a></div>'; 
                }
            ?>
            </div>
        </div>
    </div>
</div>