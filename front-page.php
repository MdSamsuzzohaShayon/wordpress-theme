<?php get_header(); ?>
<!-- <div class="main-header-body-wrapper" style="background-image: url(<?php //echo get_theme_mod("thesportworship_banner"); ?>);"> -->




<!-- MAIN SECTION START  -->
<main class="main-body background-transparent">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 text-white">
                <h2 class="text-uppercase heading-caption"> TItle Title goes here</h2>
                <p >Description</p>
            </div>

        </div>
    </div>
</main>
<!-- MAIN SECTION ENDS  -->

</div>
<!--    End landing-->

</div>
<?php if (get_theme_mod('author-callout-display') == 'Yes') { ?>
    <div class="row row-padding author">
        <div class="col-6 author-image">
            <img src="<?php echo wp_get_attachment_url(get_theme_mod('author-callout-image')) ?>" alt="Author Image">
        </div>
        <div class="col-6 author-content">
            <?php
            $authorText = "AUthor text - ";
            $authorText .= get_theme_mod('author-callout-text');
            if ($authorText != '') {
                echo wpautop($authorText);
            } else {
                echo "Edit this by going to your Dashboard -> Appearance -> Customise -> Author Editor";
            }
            ?>
        </div>
    </div>
<?php } ?>
<?php get_footer(); ?>
