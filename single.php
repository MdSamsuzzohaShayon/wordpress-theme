<?php get_header(); ?>
<div class="container">
    <h2 class="text-success">single.php</h2>
    <?php if(has_post_thumbnail()): ?>
<!--        sport-large size we have declared in our functions.php-->
        <img src="<?php the_post_thumbnail_url('sport-large'); ?>" alt="" class="img-thumbnail">
    <?php endif; ?>


    <?php the_title(); ?>

    <?php get_template_part("template-parts/content", 'blogpost'); ?>


    <?php
        thesportworship_save_post_views(get_the_ID());
        echo "Post ID " .get_the_ID();
    ?>


    <?php
    global $wp_query;
    $big = 999999999; // need an unlikely integer

    echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages
    ) );
    ?>
    <?php wp_link_pages(); ?>
</div>

<?php get_footer(); ?>
