<!-- What are Sidebars #What are Sidebars -->
<!-- A sidebar is any widgetized area of your theme. Widget areas are places in your theme where users can add their own widgets.  -->

<!--
<ul class="nav flex-column">

</ul>
-->

<?php
// GOT TO APPREANCE -> WIDGETS -> CREATE A NEW WIDGETS INSIDE MAIN SIDEBAR 
// Determines whether a sidebar contains widgets.
if (! is_active_sidebar( 'main-sidebar' )) {
  return;
}
 ?>

 <ul class="nav flex-column">
   <?php dynamic_sidebar( 'main-sidebar' ); ?>
 </ul>
