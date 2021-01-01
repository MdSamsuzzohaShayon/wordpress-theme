<?php
//TEMPLATE NAME: CONTENT PAGE
get_header();

$image = get_field('featured_image');
//$picture = $image['sizes']['large'];
$picture = $image['sizes']['my_custom_size'];
$alt = $image['alt'];
$title = $image['title'];
$file = get_field('upload_a_file');
$filename = $file['filename'];
$fileurl = $file['url'];


$embed = get_field('embed_a_video');

?>


    <section class="page">
        <div class="container">


            <h1><?php the_title(); ?></h1>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

            <?php endwhile; else: endif; ?>


            <!--            SHOWING IMAGES -->
            <?php if ($image): ?>
                <br>
                <?php echo $image['alt']; ?>
                <br>

                <img src="<?php echo $picture; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>"
                     class="img-fluid">

                <br>
                <!--            ALL INFORMATIONS ABOUT IMAGE-->
                <?php var_dump($image); ?>
            <?php endif; ?>


            <!--            DOWNLOAD FILE-->
            <hr>
            <br><br>
            <h3>File </h3>
            <?php if ($file): ?>
                <?php var_dump($file); ?>
                <br>
                <a href="<?php echo $fileurl ?>" download><?php echo $filename; ?></a>
            <?php endif; ?>



            <!--            EMBED A VIDEO-->
            <hr>
            <br><br>
            <h3>Video Embed </h3>
<!--            https://wordpress.org/support/article/embeds/-->
            <?php if ($embed): ?>
                <?php var_dump($file); ?>
                <br>
            <?php echo $embed; ?>
            <?php endif; ?>

        </div>
    </section>

<?php get_footer(); ?>