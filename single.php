<?php get_header(); ?>

<!-- ALL IMPORTENT FUNCTION OF WORDPRESS   -->
<!-- https://developer.wordpress.org/themes/getting-started/ -->
      <div class="row">

        <div class="col-sm-8 blog-main">
          <?php if(have_posts()) : ?>
              <?php while(have_posts()) : the_post(); ?>
                <?php get_template_part('content'); ?>
              <?php endwhile; ?>
          <?php else : ?>
              <p><?php __('No posts found'); ?></p>
          <?php endif; ?>



        </div><!-- /.blog-main -->

 <?php get_footer(); ?>