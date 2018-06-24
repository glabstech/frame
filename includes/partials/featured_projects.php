<?php
//FEATURED PROJECTS

?>

<!-- FEATURED PROJECTS - BLOCK -->
<section id="featured" class="featured-projects a-wp">
    <div class="container-fluid full-w-container">
        <div class="section-header">
            <h3 class="section-title a-fade-up a-delay-0"><?php echo _value_($section['title']) ?></h3>
            <p class="section-description a-fade-up a-delay-2">
                <?php echo _value_($section['content']) ?>
            </p>
        </div>
        <div class="cta-btn-container text-center">
            <a class="view-btn a-fade-up a-delay-4" href="<?php echo _value_($section['projects_list_page']['url']) ?>"><?php echo _value_($section['projects_list_page']['title']) ?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        </div> 
    </div>
    <?php if(!empty($section['projects'])){?>
    <div class="container-fluid">
        <div class="row">
            <?php
            $wow = 'fadeInDown';
            $index = 2;
            foreach($section['projects'] as $project){
                
                if($wow === 'fadeInDown a-fade-down'){
                    $wow = "fadeInUp a-fade-up";
                }
                else{
                    $wow = 'fadeInDown a-fade-down';
                }
            ?>

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 p-0  a-fadeIn a-right a-delay-<?php echo ($index++) ?> <?php //echo $wow ?>">
                <div class="hovereffect featured-project" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $project->ID ))?>) ">
                    <a class="featured-project-anchor" href="<?php echo get_permalink($project->ID) ?>"></a>
                    <!-- <img class="img-responsive" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $project->ID ))?>" alt=""> -->
                    <div class="overlay featured-project-content-wrapper">
                        <h2><?php echo _value_($project->post_title) ?></h2>
                        <p class="info">
                            <?php echo _value_($project->post_excerpt) ?> 	
                        </p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php } ?>
</section><!-- END :: FEATURED PROJECTS - BLOCK -->

