<?php get_header('singlepost'); ?>

<!--    https://dribbble.com/shots/4206746-Ramp-Space-Single-blog-post-->
<!--    https://dribbble.com/shots/7598388-Blog-Post-->
<!--    https://dribbble.com/shots/4349968/attachments/4349968-MITALENT-Single-Blog?mode=media-->

<div class="container">
    <div class="row mt-5">
        <div class="col-md-5 col-sm-12">
            <h2 class="mt-md-5 pt-md-5"><?php the_title(); ?></h2>
            <div class="d-inline-block">
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        $fname = get_the_author_meta('first_name');
                        $lname = get_the_author_meta('last_name');
                        echo "<p class='author-name'>" . $fname . " " . $lname . "</p>";
                        ?>
                        <p>Category</p>
                        <?php
                        $categories = get_the_category();
                        foreach ($categories as $cat): ?>
                            <?php $cat_link = get_category_link($cat->term_id); ?>
                            <a href="<?php $cat_link; ?>" class="badge bg-danger"><?php echo $cat->name; ?></a>
                        <?php endforeach; ?>
                        <?php
                    }
                }
                ?>
                <p> <?php echo get_the_date('d/m/Y'); // Use php date format ?></p>
            </div>
        </div>
    </div>
</div>
</div>
<!--Single post landing image end-->


<div class="container text-white">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <p><?php the_content(); ?></p>

                <br>
                Comment section
                <!--Comments section -->
                <?php comments_template(); ?>


            </div>
            <div class="col-md-3 col-sm-12">
                <?php
                $cat_list = '';
                $categories = get_the_category();
                foreach($categories as $cat){
//                    echo $cat->slug;
                    $cat_list .= $cat->slug . ',';
                }
                ?>
                <?php

                $args = array(
                    'category_name' => $cat_list,
                    'posts_per_page' => 8
                );


                // The Query
                $the_query = new WP_Query($args);

                // The Loop
                if ($the_query->have_posts()) {
                    echo '<ul>';
                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                        echo '<li>' . get_the_title() . '</li>';
                    }
                    echo '</ul>';
                } else {
                    // no posts found
                }
                /* Restore original Post Data */
                wp_reset_postdata();
                ?>
                <br>
                Share button
                <br>

                <p>Tags</p>
                <div class="all-tags d-flex justify-content-between flex-wrap">
                    <?php
                    $tags = get_tags();
                    foreach ($tags as $tag): ?>
                        <?php $tag_link = get_tag_link($tag->term_id); ?>
                        <a href="<?php echo $tag_link; ?>"
                           class="badge bg-secondary py-2 px-3 rounded-0 my-1 text-decoration-none text-light"><?php echo $tag->name; ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    <?php endwhile; else: endif; ?>
</div>


<?php
/**
 * @views count
 * Save views from this single post page to show the same post in popular post
 */
thesportworship_save_post_views(get_the_ID());
?>


<?php get_footer(); ?>
