<div class="feature-post-segment">
    <div class="feature-post-shape container">
        <!--        custom post category feature start-->
        <div class="row cat-features">
            <?php wp_nav_menu( array(
                    'theme_location' => 'feature_menu' ,
                    'container' => '',
                    'menu_class' => 'nav col-12 col-lg-auto my-2 justify-content-between my-md-0 text-small',
                    'walker' => new Thesportworship_Feature_Menu_Walker()
            ) ); ?>
        </div>
        <!--        custom post category feature end-->

        <div class="row features mt-5">
            <h2 class="text-danger text-center">Features</h2>
            <!--            Make a category of feature and add them -->
            <div class="col-md-4">
                <img src="<?php echo get_theme_file_uri('assets/img/default-bg.jpg') ?>"
                     class="card-img-top large-card-image" alt="...">
                <h5 class="card-title text-danger">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
            <div class="col-md-4">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo get_theme_file_uri('assets/img/default-bg.jpg') ?>" class="card-img-top"
                             alt="...">
                    </div>
                    <div class="col-md-8">
                        <p class="my-0">This is a wider card with supporting text below.</p>
                        <p class="my-0"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="row g-0 mt-2">
                    <div class="col-md-4">
                        <img src="<?php echo get_theme_file_uri('assets/img/default-bg.jpg') ?>" class="card-img-top"
                             alt="...">
                    </div>
                    <div class="col-md-8">
                        <p class="my-0">This is a wider card with supporting text below.</p>
                        <p class="my-0"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="row g-0 mt-2">
                    <div class="col-md-4">
                        <img src="<?php echo get_theme_file_uri('assets/img/default-bg.jpg') ?>" class="card-img-top"
                             alt="...">
                    </div>
                    <div class="col-md-8">
                        <p class="my-0">This is a wider card with supporting text below.</p>
                        <p class="my-0"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="row g-0 mt-2">
                    <div class="col-md-4">
                        <img src="<?php echo get_theme_file_uri('assets/img/default-bg.jpg') ?>" class="card-img-top"
                             alt="...">
                    </div>
                    <div class="col-md-8">
                        <p class="my-0">This is a wider card with supporting text below.</p>
                        <p class="my-0"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="row g-0 mt-2">
                    <div class="col-md-4">
                        <img src="<?php echo get_theme_file_uri('assets/img/default-bg.jpg') ?>" class="card-img-top"
                             alt="...">
                    </div>
                    <div class="col-md-8">
                        <p class="my-0">This is a wider card with supporting text below.</p>
                        <p class="my-0"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="row g-0 mt-2">
                    <div class="col-md-4">
                        <img src="<?php echo get_theme_file_uri('assets/img/default-bg.jpg') ?>" class="card-img-top"
                             alt="...">
                    </div>
                    <div class="col-md-8">
                        <p class="my-0">This is a wider card with supporting text below.</p>
                        <p class="my-0"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?php echo get_theme_file_uri('assets/img/default-bg.jpg') ?>" class="card-img-top"
                             alt="...">
                    </div>
                    <div class="col-md-8">
                        <p class="my-0">This is a wider card with supporting text below.</p>
                        <p class="my-0"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="row g-0 mt-2">
                    <div class="col-md-4">
                        <img src="<?php echo get_theme_file_uri('assets/img/default-bg.jpg') ?>" class="card-img-top"
                             alt="...">
                    </div>
                    <div class="col-md-8">
                        <p class="my-0">This is a wider card with supporting text below.</p>
                        <p class="my-0"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="row g-0 mt-2">
                    <div class="col-md-4">
                        <img src="<?php echo get_theme_file_uri('assets/img/default-bg.jpg') ?>" class="card-img-top"
                             alt="...">
                    </div>
                    <div class="col-md-8">
                        <p class="my-0">This is a wider card with supporting text below.</p>
                        <p class="my-0"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="row g-0 mt-2">
                    <div class="col-md-4">
                        <img src="<?php echo get_theme_file_uri('assets/img/default-bg.jpg') ?>" class="card-img-top"
                             alt="...">
                    </div>
                    <div class="col-md-8">
                        <p class="my-0">This is a wider card with supporting text below.</p>
                        <p class="my-0"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="row g-0 mt-2">
                    <div class="col-md-4">
                        <img src="<?php echo get_theme_file_uri('assets/img/default-bg.jpg') ?>" class="card-img-top"
                             alt="...">
                    </div>
                    <div class="col-md-8">
                        <p class="my-0">This is a wider card with supporting text below.</p>
                        <p class="my-0"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="row g-0 mt-2">
                    <div class="col-md-4">
                        <img src="<?php echo get_theme_file_uri('assets/img/default-bg.jpg') ?>" class="card-img-top"
                             alt="...">
                    </div>
                    <div class="col-md-8">
                        <p class="my-0">This is a wider card with supporting text below.</p>
                        <p class="my-0"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>

        <!--        popular posts start -->
<!--        <h2 class="mt-5">ABC</h2>-->
<!--        --><?php
//        echo "ABC";
//        if (have_posts()): while (have_posts()) : the_post();
//            thesportworship_save_post_views(get_the_ID());
//            the_content();
//        endwhile;
//        else: endif;
//        ?>
        <!--        popular posts end -->
    </div>
</div>