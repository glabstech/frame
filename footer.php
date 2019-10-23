<?php
    $footer_settings = get_field('prefooter_settings','option')['settings'];
    $footer_settings['copyright'] = get_field('footer','option')['copyright'];
    $footer_settings = (object)$footer_settings;
?>


<footer id="main-footer" >
    <section class="global-pre-footer">
    
        <?php
            // include_once('includes/partials/frame-partials.php');
            // dynamic_sidebar('global-pre-footer');
            
            $exclude = get_field('do_not_show_cta','option');
            $exclude = empty($exclude)?[]:$exclude;
            $ctaBoxes = get_field('cta_box','option');
            //var_dump(__DIR__);
            if(!in_array(get_the_id(),$exclude)){
                $boxes = get_field('cta_boxes','option')['boxes'];
                $fr_component['boxes'] = $boxes;
                $fr_component = (object)$fr_component;

                echo '<div style="margin-bottom:-60px;" class="cta-boxes cta-boxes-'.$ctaBoxes['cta_boxes']['box_style'].'  container">';
                include(__DIR__.'/includes/partials/cta_boxes/cta_boxes_'.$ctaBoxes['cta_boxes']['box_style'].'.php');
                echo '</div>';
            }
        ?>
    </section>
    <section class="pre-footer" style="background-color:<?php echo $footer_settings->background_color ?>">
        <!-- dynamic -->
        <div class="container ">
            <div class="row">
                <div class="col-md-3">
                    <?php dynamic_sidebar('footer_col_1'); ?>
                    <!-- <div class="to-top-btn">
                        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
                    </div> -->
                </div>   

                <div class="col-md-3">
                    <?php dynamic_sidebar('footer_col_2'); ?>
                </div>

                <div class="col-md-6 footer-col-3">
                    <?php dynamic_sidebar('footer_col_3'); ?>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col business-info">
                    <?php dynamic_sidebar('footer_post_pre_footer_left'); ?>
                </div>
                <div class="col footer-logo">
                    <?php dynamic_sidebar('footer_post_pre_footer_right'); ?>
                </div>
            </div>
        </div>
    </section>
    
    <section class="copyright">
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php echo $footer_settings->copyright ?>
                </div>
            </div>
        </div>
    </section>

</footer>
					
<?php wp_footer(); ?>


</body>
</html>