<?php get_header('home'); ?>
<!-- <div class="main-header-body-wrapper" style="background-image: url(<?php //echo get_theme_mod("thesportworship_banner"); ?>);"> -->




    <!-- MAIN SECTION START  -->
    <main class="main-body background-transparent">
        <?php get_template_part('template-parts/content', 'caption'); ?>

        <?php get_sidebar(); ?>
        <?php get_template_part('template-parts/segment', 'featurepost'); ?>


    <!--    POST -->
        <?php get_template_part('template-parts/content', 'post'); ?>

    </main>
    <!-- MAIN SECTION ENDS  -->

</div>
<!--    End landing-->

</div>

<?php get_footer(); ?>
