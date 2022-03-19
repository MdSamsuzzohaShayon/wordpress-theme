<?php get_header(); ?>
<div class="container">
    <h1>Cricket.php</h1>
    <?php get_template_part("template-parts/content", 'archive'); ?>

    <!--    Pagination-->
    <?php //previous_posts_link(); ?>
    <?php //next_posts_link(); ?>
    <br>
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
</div>

<?php get_footer(); ?>
