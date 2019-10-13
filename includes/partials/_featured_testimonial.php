<?php 

?>

<div <?php echo $fr_settings->id ?>
    class="featured-testimonial <?php echo $fr_settings->class ?> <?php echo ($fr_settings->layout_type === 'boxed')?'container':'container-fluid' ?>"
    data-section-index="<?php echo $fr_settings->index ?>" 
    style=" 
            <?php echo $fr_settings->padding ?>
            <?php echo $fr_settings->margin  ?>
            <?php echo $fr_settings->background ?>
        "
            
    >
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                    <div class="inner">
                        <div class="line-title">Testimonial</div>
                        <div class="photo" style="background-image: url(http://profacc.local/wp-content/uploads/2019/10/gray-testimonila-sampler.jpg)"></div>  
                        <div class="content">
                            <div class="statement">
                                John and Monica have supported EY's efforts to develop world-class business
                                development and negotiation skills in our professionals over the past 4 years and have become
                                trusted extensions to our EY team across Asia Pacific    
                            </div>
                            <div class="person">
                                - Jane Doe, TheCompany
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

</div>