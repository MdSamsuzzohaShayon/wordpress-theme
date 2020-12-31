<?php get_header();


//CREATING VARIABLE
$title = get_field('page_title');
$description = get_field('descriptions');
?>


    <section class="page">
        <div class="container">


            <h1><?php the_title(); ?></h1>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

            <?php endwhile; else: endif; ?>


            <!--        page_title         GET THIS ID FROM WORDPRESS DASHBOARD -> CUSTOM FILEDS -> FILED GROUP -> NAME IS THE ID HERE -->
            <?php
            //                FIRST WAY OF SHOWING TITLE
            //                the_field("page_title");

            //                ANOTHER WAY OF SHOWING TITLE
            //                $title = get_field('page_title'); // GET DATA AND STORE INTO THE DATABASE
            if ($title) {
                echo "<h1>$title</h1>";
            }
            ?>


            <?php if ($description): ?>
                <?php echo nl2br($description); ?>
            <?php endif; ?>


        </div>
    </section>

<?php get_footer(); ?>