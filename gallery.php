<?php
/*
Template Name: Gallery
*/

//Image attachment template. Used when viewing a single image attachment. If not present, attachment.php will be used.
//https://code.tutsplus.com/articles/creating-your-own-image-gallery-page-template-in-wordpress--wp-23721
//https://developer.wordpress.org/themes/functionality/media/galleries/
//https://codex.wordpress.org/Theme_Development
//https://wordpress.org/support/article/the-wordpress-gallery/
//https://www.youtube.com/watch?v=6Lo0RDRLdQc
//https://www.youtube.com/watch?v=kgiUgVr99g8



?>

<?php get_header();?>


<div class="container">
<!--    IMAGE GALLERY START-->
    <h2>Image Gallery</h2>
    <?php
//    https://developer.wordpress.org/reference/functions/get_template_part/
    get_template_part( 'template-parts/image', 'gallery');
    ?>

<!--    IMAGE GALLERY ENDS -->
</div>

<?php get_footer();?>
