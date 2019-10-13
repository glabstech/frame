<?php 



?>
<div class="container-fluid component-testimonials-outer"
    style=" 
        <?php echo $fr_settings->padding ?>
        <?php echo $fr_settings->margin  ?>
        <?php echo $fr_settings->background ?>
    "><div class="row">
    <div class="background-title"><?php echo $section['el_title']['text'] ?></div>
<div <?php echo $fr_settings->id ?>
    class="component-testimonials <?php echo $fr_settings->class ?> <?php echo ($fr_settings->layout_type === 'boxed')?'container':'container-fluid' ?>"
    data-section-index="<?php echo $fr_settings->index ?>" 
    >
    
    <div class="row">
        <div class="col">
            <h4 class="section-subtitle section-subtitle-top"><?php echo $section['el_title']['sub_text']?></h4>
            <h2 class="section-title section-title-lg text-left"><?php echo $section['el_title']['text'] ?></h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="testimonials-boxes">
                <div class="testimonial-box">
                    <div class="testimonial-box__photo" style="background-image: url(/wp-content/uploads/2019/10/gray-testimonila-sampler.jpg)"></div>
                    <div class="testimonial-box__statement">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."
                    </div>
                    <div class="testimonial-box__person">
                        <label>Jane Doe</label>
                        <span>House Developer</span>
                    </div>
                </div>

                <div class="testimonial-box active">
                    <div class="testimonial-box__photo" style="background-image: url(/wp-content/uploads/2019/10/gray-testimonila-sampler.jpg)"></div>
                    <div class="testimonial-box__statement">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."
                    </div>
                    <div class="testimonial-box__person">
                        <label>Jane Doe</label>
                        <span>House Developer</span>
                    </div>
                </div>

                <div class="testimonial-box">
                    <div class="testimonial-box__photo" style="background-image: url(/wp-content/uploads/2019/10/gray-testimonila-sampler.jpg)"></div>
                    <div class="testimonial-box__statement">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."
                    </div>
                    <div class="testimonial-box__person">
                        <label>Jane Doe</label>
                        <span>House Developer</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col text-center mt-5">
            <a href="#" class="btn btn-primary">View More Testimonials <span>»</span></a>
        </div>
    </div>
    
</div>

</div>

</div></div>