<?php get_header(); ?>

<!-- ALL IMPORTENT FUNCTION OF WORDPRESS   -->
<!-- https://developer.wordpress.org/themes/getting-started/ -->
      <div class="row">

        <div class="col-sm-8 blog-main">
          <?php if(have_posts()) : ?>
              <?php while(have_posts()) : the_post(); ?>

              <div class="blog-post">
                  <h2 class="blog-post-title">
                    <?php the_title(); ?>
                  </h2>
                  <!-- the_date();  -->
                  <?//php the_content();?>
                  <!-- for limited text in the body -->
                  <?php the_content();?>
              </div><!-- /.blog-post -->
              <?php endwhile; ?>
          <?php else : ?>
              <p><?php __('No page found'); ?></p>
          <?php endif; ?>



        </div><!-- /.blog-main -->

 <?php get_footer(); ?>