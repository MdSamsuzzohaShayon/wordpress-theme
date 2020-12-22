<?php
get_header();
?>


<article class="content px-3 py-5 p-md-5">
    <h2>this is archive.php</h2>
    <?php
    //    if(have_posts()){
    //        while (have_posts()){
    //            the_post();
    //            get_template_part('template-parts/content', 'archive');
    //        }
    //    }
    ?>
    <div id="container">
        <div id="content" role="main">

            <?php the_post(); ?>
            <h1 class="entry-title"><?php the_title(); ?></h1>

            <?php get_search_form(); ?>

            <h2>Archives by Month:</h2>
            <ul>
                <?php wp_get_archives('type=monthly'); ?>
            </ul>

            <h2>Archives by Subject:</h2>
            <ul>
                <?php wp_list_categories(); ?>
            </ul>

        </div><!-- #content -->
    </div><!-- #container -->
</article>

<?php
get_footer();
?>
