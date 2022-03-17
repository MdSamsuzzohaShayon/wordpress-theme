<?php
/*
 Template Name: Contact
 */
//Set default template to contact from page edit option
?>

<?php get_header('secondary'); ?>

<div class="container">
    <?php the_title(); ?>
    <?php if(have_posts()): while(have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; else: endif; ?>
</div>

<?php get_footer(); ?>

