<?php 



?>
<div class="container-fluid component-team-outer"
    style=" 
        <?php echo $fr_settings->padding ?>
        <?php echo $fr_settings->margin  ?>
        <?php echo $fr_settings->background ?>
    "><div class="row">
    <div class="background-title"><?php echo $section['el_title']['text'] ?></div>
<div <?php echo $fr_settings->id ?>
    class="component-team <?php echo $fr_settings->class ?> <?php echo ($fr_settings->layout_type === 'boxed')?'container':'container-fluid' ?>"
    data-section-index="<?php echo $fr_settings->index ?>" 
    >
    
    <div class="row">
        <div class="col">
            
            <h2 class="section-title text-center"><?php echo $section['el_title']['text'] ?></h2>
            <div class="section-title-sub text-center"><?php echo $section['el_title']['sub_text']?></div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="team-boxes">
                <?php
                    //testimonials    
                    $query = new WP_Query( array(
                        'post_type' => 'team',
                        'posts_per_page' => 5
                    ) );
                    $count = 0;
                    foreach($query->posts as $_post){
                        $image = get_field('photo',$_post->ID);
                        $position = get_field('position',$_post->ID);
                        $achievements = get_field('achievements',$_post->ID);
   
                        ?>
                            <div class="team-box">
                                <div class="team-box__photo" style="background-image: url(<?php echo $image ?>)"></div>
                                <div class="team-box__name">
                                    <?php echo $_post->post_title ?>
                                </div>
                                <div class="team-box__position">
                                    <?php echo $position ?>
                                </div>
                                <div class="team-box__achievements">
                                   <?php echo $achievements ?>
                                </div>
                            </div>
                        <?php
                        $count++;
                    }
                ?>
                

            </div>
        </div>
    </div>
</div>

</div>

</div></div>