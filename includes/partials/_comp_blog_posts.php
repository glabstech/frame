<?php 

?>

<div class="container-fluid component-blog-posts-outer"
    style=" 
        <?php echo $fr_settings->padding ?>
        <?php echo $fr_settings->margin  ?>
        <?php echo $fr_settings->background ?>
    "><div class="row">
    <div class="background-title"><?php echo $section['el_title']['text'] ?></div>
<div <?php echo $fr_settings->id ?>
    class="component-blog-posts <?php echo $fr_settings->class ?> <?php echo ($fr_settings->layout_type === 'boxed')?'container':'container-fluid' ?>"
    data-section-index="<?php echo $fr_settings->index ?>" 
    >

    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="section-title section-title-lg text-left"><?php echo $section['el_title']['text'] ?></h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="blog-posts">
                <div class="blog-post" style="background-image:url(http://profacc.local/wp-content/uploads/2019/10/blog-1-bg.jpg)">
                    <div class="blog-post__title">Adipiscing Elit, Sed Diam Nonummy Nibh</div>
                    <div class="blog-post__excerpt">
                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    </div>
                    <a href="#" class="btn btn-primary">View Full Case Study<span>»</span></a>
                </div>
                <div class="blog-post active" style="background-image:url(http://profacc.local/wp-content/uploads/2019/10/blog-1-bg.jpg)">
                    <div class="blog-post__title">Adipiscing Elit, Sed Diam Nonummy Nibh</div>
                    <div class="blog-post__excerpt">
                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    </div>
                    <a href="#" class="btn btn-primary">View Full Case Study<span>»</span></a>
                </div>
                <div class="blog-post" style="background-image:url(http://profacc.local/wp-content/uploads/2019/10/blog-1-bg.jpg)">
                    <div class="blog-post__title">Adipiscing Elit, Sed Diam Nonummy Nibh</div>
                    <div class="blog-post__excerpt">
                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    </div>
                    <a href="#" class="btn btn-primary">View Full Case Study<span>»</span></a>
                </div>
            </div>
            <div class="blog-posts-view-all text-center">
                <a href="#"class="btn btn-primary">View More Case Studies<span>»</span></a>
            </div>
        </div>
    </div>


</div>
</div>
</div>