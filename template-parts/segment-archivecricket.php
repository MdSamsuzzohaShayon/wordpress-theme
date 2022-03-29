<div class="row">

<?php if(have_posts()): while(have_posts()) : the_post(); ?>
    <div class="col-md-6 col-sm-12 mb-5 post">
        <?php if(has_post_thumbnail()): ?>
            <!--        sport-large size we have declared in our functions.php-->
            <img src="<?php the_post_thumbnail_url('sport-small'); ?>" alt="" class="img img-fluid">
        <?php else: ?>
            <img src="<?php echo get_template_directory_uri() . '/assets/img/no-image.jpg'; ?>" alt="" class="img img-fluid">
        <?php endif; ?>
        <h3><?php the_title(); ?></h3>
        <!--    --><?php //the_content(); ?>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn text-danger bg-secondary rounded-0 text-capitalize">See more</a>
    </div>
<?php endwhile; else: ?>
    <h2>No posts found!!</h2>
<?php endif; ?>
</div>

