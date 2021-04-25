<!-- Load an alternate header file by using the $name param: -->
<!-- https://developer.wordpress.org/reference/functions/get_header/ -->
<!-- <?php //get_header('splash'); ?>  -->

<?php get_header(''); ?>

  <!-- MAIN CONTENT START  -->
  <div class="row">
    <div class="col-md-9">
      <div class="content-area" id="primary">
        <main id="primary" >
          <?php
          if (have_posts()) {
            while (have_posts()) {
              the_post();
              // Loads a template part into a template.
              // The template is included using require, not require_once, so you may include the same template part multiple times.
              // https://developer.wordpress.org/reference/functions/get_template_part/
              get_template_part( 'template-parts/content' );
            }
          }else{
            // Loads a template part into a template.
            get_template_part( 'template-parts/content', 'none' );
          }
          ?>
          <p class="lead">Template: singular.php</p>
        </main>
      </div>
    </div>
    <div class="col-md-3">
      <!-- SIDEBAR START  -->
      <?php
      // get_sidebar('splash');
      get_sidebar();
      ?>
      <!-- SIDEBAR ENDS  -->
    </div>
  </div>
  <!-- MAIN CONTENT ENDS  -->





<?php get_footer( 'splash'); ?>
