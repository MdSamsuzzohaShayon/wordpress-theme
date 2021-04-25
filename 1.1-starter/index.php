<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Wordpress</title>
</head>
<body>
  <header id="masthead">
    <h1><a href="#">Php for wordpress</a></h1>
  </header>

<!-- CONENT START -->
<div class="content">
  <?php
  $name = "Shayon";
  $post_titles = [
    "Ronaldo",
    "Neymar",
    "Hazard"
  ];

  foreach($post_titles as $post_title){
    display_post($post_title);
  }


  function display_post($title){
    echo "<h3>$title</h3>";
    echo "<h5>" . $title . "</h5>";
  }

  echo "<br> <hr> <br>" ;

// https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/
// Some parts of the WordPress code structure for PHP markup are inconsistent in their style. WordPress is working to gradually improve this by helping users maintain a consistent style so the code can become clean and easy to read at a glance.
  // https://make.wordpress.org/core/handbook/best-practices/coding-standards/php/


  ?>
  <h2>Welcome</h2>
  <p>My name is "<?php echo $name;  ?>"</p>


<br>
<hr>

  <!-- LOOPING START  -->
  <!-- https://codex.wordpress.org/The_Loop -->
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
  <?php endwhile; else: ?>
    <?php _e("Sorry! No content found", "phpforwp"); // TEXT DOMAIN FROM STYLE.CSS ?>
  <?php endif; ?>

  <!-- LOOPING ENDS  -->
</div>
<!-- CONTENT ENDS  -->

</body>
</html>
