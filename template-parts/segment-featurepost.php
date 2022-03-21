<div class="feature-post-segment">
    <div class="feature-post-shape container">
        <!--        custom post category feature start-->
        <div class="row cat-features">
            <?php wp_nav_menu(array(
                'theme_location' => 'feature_menu',
                'container' => '',
                'menu_class' => 'nav col-12 col-lg-auto my-2 justify-content-between my-md-0 text-small',
                'walker' => new Thesportworship_Feature_Menu_Walker()
            )); ?>
        </div>
        <!--        custom post category feature end-->

        <div class="row features mt-5">
            <h2 class="text-danger text-center">Features</h2>
            <!--            Make a category of feature and add them -->
            <?php
            // Arguments
            $args = array('category_name' => 'featured', 'posts_per_page' => 13);
            // The Query
            $the_query = new WP_Query($args);
            $index = 0;
            $chunk = 7;

            $output_in_row = '';
            // The Loop
            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();
//                    $img_url= the_post_thumbnail_url('sport-large');
                    if ($index === 0) {
                        ?>
                        <div class="col-md-4">
                            <a class="stretched-link text-white" href="<?php echo the_permalink(); ?>">
                                <?php
                                    if(has_post_thumbnail()){
//                                        sport-large size we have declared in our functions.php
                                        ?><img src="<?php echo the_post_thumbnail_url('sport-large'); ?>" alt="" class="card-img-top large-card-image"><?php
                                    }else{
                                        ?><img src="<?php echo get_theme_file_uri('assets/img/no-image.jpg'); ?>" alt="" class="card-img-top large-card-image"><?php
                                    }
                                ?>

                                <h5 class="card-title text-danger"><?php echo get_the_title(); ?></h5>
                                <p class="text-white"><?php the_excerpt(); ?></p>
                                <p class="my-0"><small class="text-muted">Posted: <?php the_date('F j, Y') ; ?>  at <?php the_time('g:i a'); ?></small></p>
                            </a>

                        </div>
                        <?php
                    } else {
                        $img_url =  get_theme_file_uri('assets/img/no-image.jpg');
                        if(has_post_thumbnail()){
                            $img_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'full' )[0];
                        }
//                        $post_date = the_time('g:i a') ;
                        $post_date = get_the_modified_date( 'F j, Y' ) ;
                        $post_time = get_the_modified_date( 'g:i a' );

                        if ($index === $chunk) {
                            if ($chunk === 12) {
                                $output_in_row .= '
                                    <div class="row g-0 mb-2">
                                        <div class="container-fluid">
                                            <a class="stretched-link text-white row p-0 m-0" href="' . get_permalink() . '">
                                                <div class="col-md-4 m-0 p-0">
                                                    <img src="' . $img_url . '" class="card-img-top"
                                                         alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <p class="my-0">' . get_the_title() . '</p>
                                                    <p class="my-0"><small class="text-muted">Posted: ' . $post_date .  ' at ' . $post_time . '</small></p>
                                                </div>                                    
                                            </a>
                                        </div>
                                    </div>
                                    ';
                                echo '<div class="col-md-4">' . $output_in_row . '</div>';
                            } else {
                                echo '<div class="col-md-4">' . $output_in_row . '</div>';
                                $output_in_row = '
                                    <div class="row g-0 mb-2">
                                        <div class="container-fluid">
                                            <a class="stretched-link text-white row p-0 m-0" href="' . get_permalink() . '">
                                                <div class="col-md-4 m-0 p-0">
                                                    <img src="' . $img_url . '" class="card-img-top"
                                                         alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <p class="my-0">' . get_the_title() . '</p>
                                                    <p class="my-0"><small class="text-muted">Posted: ' . $post_date .  ' at ' . $post_time . '</small></p>
                                                </div>                                    
                                            </a>
                                        </div>
                                    </div>
                                    ';
                            }
                            $chunk = 12;

                        } else {
                            $output_in_row .= '
                                    <div class="row g-0 mb-2">
                                        <div class="container-fluid">
                                            <a class="stretched-link text-white row p-0 m-0" href="' . get_permalink() . '">
                                                <div class="col-md-4 m-0 p-0">
                                                    <img src="' . $img_url . '" class="card-img-top"
                                                         alt="...">
                                                </div>
                                                <div class="col-md-8">
                                                    <p class="my-0">' . get_the_title() . '</p>
                                                    <p class="my-0"><small class="text-muted">Posted: ' . $post_date .  ' at ' . $post_time . '</small></p>
                                                </div>                                    
                                            </a>
                                        </div>
                                    </div>
                                    ';

                        }

                    }

                    $index++;
                }
            } else {
                // no posts found
                echo "<div class='alert alert-danger'>No Post found</div>";
            }

            /* Restore original Post Data */
            wp_reset_postdata();
            ?>


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