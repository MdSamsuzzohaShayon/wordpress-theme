<?php get_header('home'); ?>
<!-- <div class="main-header-body-wrapper" style="background-image: url(<?php //echo get_theme_mod("thesportworship_banner"); ?>);"> -->


<!-- MAIN SECTION START  -->
<div class="main-body background-transparent">

    <?php get_template_part('template-parts/content', 'caption'); ?>

    <?php // get_sidebar(); ?>


    <div class="feature-post-segment">
        <div class="feature-post-shape container">
            <!--                category of posts start -->
            <?php get_template_part('template-parts/segment', 'featurecat'); ?>
            <!--                category of posts end -->

            <!--                all feature post start -->
            <?php get_template_part('template-parts/segment', 'feature'); ?>
            <!--                all feature post end -->

        </div>
    </div>


    <!--        latest and popular start -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 latest-post">
                <?php get_template_part('template-parts/segment', 'latest'); ?>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <h2 class="text-danger text-capitalize">Popular posts</h2>
                    <?php dynamic_sidebar('sidebar-popular'); ?>
                </div>
            </div>
        </div>
    </div>
    <!--        latest and popular end -->

</div>
<!-- MAIN SECTION ENDS  -->

</div>
<!--    End landing-->

</div>
<!--    landing container end-->


<?php get_footer(); ?>
