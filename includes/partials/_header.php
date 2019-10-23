<?php  
    $height = $titleOption['heading_height'];
    // var_dump($titleOption);
    if(empty($height)) $height = '';
    else {
        $height = 'height:'.$height.'px';
    }   
?>

<div class="page-header-title-outer test" style="background-image:url(<?php echo $titleOption['background'] ?>); <?php echo $height; ?>">
    <div class="container">
        <div class="row">
            <div class="col">
                <h4 class="page-header-subtitle"><?php echo $titleOption['sub_title'] ?></h4>
                <h1 class="page-header-title"><?php echo $titleOption['title'] ?></h1>
            </div>
        </div>
    </div>
</div>