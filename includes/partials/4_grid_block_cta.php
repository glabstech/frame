<?php
    //4 Grid Block
    $gridBlock = $section['grid_block'];
?>
<!-- 4 GRID BLOCK -->
<?php if(!empty($gridBlock)){?>
<div class="container main-body-container four-grid-block-cta a-wp ">
    <div class="row ">
        <div class="left-1 col-md-4 p-0 text-center">
            <div class="content-left-top">
                
                <?php
                    //title
                    $sec = $gridBlock[0]['title'];
                    if($sec){
                ?>
                    <h4 class="title a-fade-up a-delay-0"><?php echo $sec ?></h4>
                <?php } //end=title?>
                
                <?php
                    //content
                    $sec = $gridBlock[0]['content'];
                    if($sec){
                ?>
                <p class="section-description a-fade-up a-delay-0">
                    <?php echo $sec ?>
                </p>
                <?php } //end=content ?>

                <?php
                    //cta
                    $sec = $gridBlock[0]['cta'];
                    if($sec){
                ?>
                <div class="text-center a-fade-up a-delay-0">
                    <?php if($sec){?>
                        <a class="more-btn" href="<?php echo $sec['url'];?>"><?php echo $sec['title']?></a>
                    <?php } ?>
                </div>
                <?php } ?>
            </div>

            <?php
                //cta
                $sec = $gridBlock[2]['background_image'];
            ?>    
            <div class="content-left-bottom" style="<?php echo ($sec)?'background-image:url('.$sec.')':''; ?>">
                <img src="<?php echo ($sec)?$sec:''; ?>" alt="about">
            </div>
        </div>

        <div class="left-2 col-md-8 p-0">
            <?php
                //cta
                $sec = $gridBlock[1]['background_image'];
            ?>  
            <div class="content-right-top" style="<?php echo ($sec)?'background-image:url('.$sec.')':''; ?>">
                <div class="top-text-section a-fade-up a-delay-2">
                    <?php
                        //title
                    $sec = $gridBlock[1]['title'];
                    if($sec){
                    ?>
                        <h4 class="title"><?php echo $sec?></h4>
                    <?php } //end=title ?>

                    <?php
                        //content
                        $sec = $gridBlock[1]['content'];
                        if($sec){
                    ?>
                    <p class="section-description text-left">
                        <?php echo $sec; ?>
                    </p>
                    <?php } //end=content?>

                    <?php
                        //cta
                        $sec = $gridBlock[1]['cta'];
                        if($sec){
                    ?>
                        <div class="text-left">
                            <?php if($sec){?>
                                <a class="more-btn" href="<?php echo $sec['url'];?>"><?php echo $sec['title']?></a>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <?php
                //cta
                $sec = $gridBlock[3]['background_image'];
            ?>  
            <div class="content-right-bottom " style="<?php echo ($sec)?'background-image:url('.$sec.')':''; ?>">
                <div class="bottom-text-section text-left a-fade-up a-delay-4">

                    <?php
                        //title
                    $sec = $gridBlock[3]['title'];
                    if($sec){
                    ?>
                        <h4 class="title a-fade-up a-delay-0"><?php echo $sec?></h4>
                    <?php } //end=title ?>

                     <?php
                        //content
                        $sec = $gridBlock[3]['content'];
                        if($sec){
                    ?>
                    <p class="section-description text-left ">
                        <?php echo $sec ?>
                    </p>
                        <?php }?>
                    <?php
                        //cta
                    $sec = $gridBlock[3]['cta'];
                    if($sec){
                    ?>
                    <div class="text-left">
                        <a class="more-btn" href="<?php echo $sec['url'];?>"><?php echo $sec['title']?></a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<!-- END || 4 GRID BLOCK -->