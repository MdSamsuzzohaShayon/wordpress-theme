<?php get_header('singlepost'); ?>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-5 col-sm-12">
            <h1 class="mt-md-5 pt-md-5"><?php the_title(); ?></h1>
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
                <div class="single-post-content"> <?php the_content(); ?> </div>

                <br>
                <!--Comments section -->
                <?php comments_template(); ?>


            </div>
            <div class="col-md-3 col-sm-12">
                <?php
                $cat_list = '';
                $categories = get_the_category();
                foreach($categories as $cat){
//                    echo $cat->slug;
                // Related post
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
                    echo '<ul class="list-group">';
                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                        echo '<li class="list-group-item bg-transparent"><a href="'. get_permalink() .'" class="text-decoration-none text-white">' . get_the_title() . '</a></li>';
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
                    $post_id = get_the_ID();
                    $post_tags = get_the_tags($post_id);
                    foreach ($post_tags as $tag): ?>
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
thesportsanctum_save_post_views(get_the_ID());
?>


<?php get_footer(); ?>
