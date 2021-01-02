<br><br><br>
<?php
//https://code.tutsplus.com/articles/creating-your-own-image-gallery-page-template-in-wordpress--wp-23721
$args = array(
//    'numberposts' => -1, // Using -1 loads all posts
    'orderby' => 'menu_order', // This ensures images are in the order set in the page media manager
    'order' => 'ASC',
    'post_mime_type' => 'image', // Make sure it doesn't pull other resources, like videos
    'post_parent' => $post->ID, //Global variable ->  Important part - ensures the associated images are loaded
    'post_status' => null,
    'post_type' => 'attachment'
);
//var_dump($args);

$images = get_children($args); // get_children() retrieves attachments, revisions, or sub-pages, possibly by post parent. It works similar to get_posts().
// continued below ...
?>
<br><br><br>
<h3>All Images</h3>
<pre />
<?php
print_r( $images);
//var_dump($images);

?>
<br><br><br>
<h3>Single Images</h3>
<pre />
<?php
print_r( $images[43]);

// continued from above ...
if ($images) { ?>
    <div>
        <?php foreach ($images as $image) { ?>

            <img
                    height="200px"
                    src="<?php echo $image->guid; ?>"
                    alt="<?php echo $image->post_title; ?>"
                    title="<?php echo $image->post_title; ?>"
            />
        <?php } ?>
    </div>
<?php } ?>


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

