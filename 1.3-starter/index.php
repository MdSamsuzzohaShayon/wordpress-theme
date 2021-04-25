<?php get_header(); ?>

<!-- CONENT START -->
<div class="content">
  <!-- Conditional Tags -->
  <!-- The Conditional Tags can be used in your Template files to change what content is displayed and how that content is displayed on a particular page depending on what conditions that page matches. For example, you might want to display a snippet of text above the series of posts, but only on the main page of your blog. -->

  <!-- CREATE A HOME PAGE  -->
  <!-- STATIC FRONT PAGE  -->
  <?php if(is_front_page() && !is_home()): ?>
    <h2>Static front page</h2>
  <?php endif; ?>

  <!-- HOME PAGE  -->
  <?php if(is_home()): ?>
    <h2>Blog</h2>
  <?php endif; ?>


  <!-- PAGE (NOT FRANT PAGE) -->
  <?php if(is_page() && !is_front_page()): ?>
    <h2>Page</h2>
  <?php endif; ?>


  <!-- SINGLE POST  -->
  <?php if(is_single() && !is_attachment()): ?>
    <!-- FROM DASHBOARD VIEW ANY POST  -->
    <h2>Latest post</h2>
  <?php endif; ?>


  <!-- SINGLE ATTACHMENT (MEDIA) -->
  <?php if(is_attachment()): ?>
    <!-- FROM DASHBOARD VIEW ANY POST  -->
    <h2>Attachment</h2>
  <?php endif; ?>



<!-- GO TO SETTING -> PERMALINKS -> SET DAY AND NAME -->
<!-- POSTS -> CATEGORY -> ADD SOME CATEGORY -> VIEW THOSE -->
<!-- DO SAME FOR TAGS  -->
  <!-- CATEGORY ARCHIVE   -->
  <?php if(is_category()): ?>
    <h2><?php single_cat_title(); ?></h2>
  <?php endif; ?>


  <!-- TAG ARCHIVE   -->
  <?php if(is_tag()): ?>
    <h2><?php single_tag_title(); ?></h2>
  <?php endif; ?>


  <!-- AUTHOR ARCHIVE   -->
  <!-- VISIT THE URL http://wordpress.local/author/admin/ -->
  <?php if(is_author()): ?>
    <h2><?php the_archive_title(); ?></h2>
  <?php endif; ?>



  <!-- DATE ARCHIVE   -->
  <!-- VISIT http://wordpress.local/2021/ -->
  <?php if(is_date()): ?>
    <h2><?php the_archive_title(); ?></h2>
  <?php endif; ?>


  <!-- 404 PAGE   -->
  <!-- VISIT SOME PAGE WHICH IS NOT EXIST http://wordpress.local/404zx -->
  <?php if(is_404()): ?>
    <h2>404</h2>
  <?php endif; ?>

</div>
<!-- CONTENT ENDS  -->

<?php get_footer(); ?>
