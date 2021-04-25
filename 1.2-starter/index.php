<?php get_header(); ?>

<!-- CONENT START -->
<div class="content">
  <!-- Template Tags -->
  <!-- https://codex.wordpress.org/Template_Tags -->
  <!-- LOOPING START  -->
  <!-- https://codex.wordpress.org/The_Loop -->
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article <?php post_class(); ?>>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>

      <footer>
        <p class="byline">
          Author:
          <a href="<?php echo get_author_posts_url($post->post_author); ?>">
            <?php the_author(); ?>
          </a>
          Date:
          <?php the_time('M, J, Y'); ?>
          Categories:
          <?php the_category(', '); ?>
          Tags:
          <?php the_tags('', ',', ''); ?>
        </p>
      </footer>
    </article>
  <?php endwhile; else: ?>
    <h2><?php esc_html_e('404 Error', 'php for wp') ?></h2>
    <?php esc_html_e("Sorry! No content found", "phpforwp"); // TEXT DOMAIN FROM STYLE.CSS ?>
  <?php endif; ?>

  <!-- LOOPING ENDS  -->
</div>
<!-- CONTENT ENDS  -->

<?php get_footer(); ?>
