
<br><br><br>
<?php

$args = array(
    'numberposts' => -1, // Using -1 loads all posts
    'orderby' => 'menu_order', // This ensures images are in the order set in the page media manager
    'order'=> 'ASC',
    'post_mime_type' => 'image', // Make sure it doesn't pull other resources, like videos
    'post_parent' => $post->ID, // Important part - ensures the associated images are loaded
    'post_status' => null,
    'post_type' => 'attachment'
);

$images = get_children( $args );
// continued below ...
var_dump($args);
// continued from above ...
if($images){ ?>
    <div >
        <?php foreach($images as $image){ ?>
                <img height="200px" src="<?php echo $image->guid; ?>" alt="<?php echo $image->post_title; ?>" title="<?php echo $image->post_title; ?>" />
        <?php    } ?>
    </div>
<?php } ?>
?>



<!--<div class="row">-->
<!--    <div class="col-md-4">-->
<!--        <img src="https://www.w3schools.com/w3css/img_lights.jpg" alt="" class="img-fluid border">-->
<!--    </div>-->
<!--    <div class="col-md-4">-->
<!--        <img src="https://www.w3schools.com/w3css/img_lights.jpg" alt="" class="img-fluid border">-->
<!--    </div><div class="col-md-4">-->
<!--        <img src="https://www.w3schools.com/w3css/img_lights.jpg" alt="" class="img-fluid border">-->
<!--    </div>-->
<!--</div>-->
<!--<div class="row">-->
<!--    <div class="col-md-4">-->
<!--        <img src="https://www.w3schools.com/w3css/img_lights.jpg" alt="" class="img-fluid border">-->
<!--    </div>-->
<!--    <div class="col-md-4">-->
<!--        <img src="https://www.w3schools.com/w3css/img_lights.jpg" alt="" class="img-fluid border">-->
<!--    </div><div class="col-md-4">-->
<!--        <img src="https://www.w3schools.com/w3css/img_lights.jpg" alt="" class="img-fluid border">-->
<!--    </div>-->
<!--</div>-->

