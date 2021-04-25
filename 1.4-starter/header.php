<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Wordpress</title>
  <?php wp_head(); ?>
</head>
<!-- https://developer.wordpress.org/reference/functions/body_class/ -->
<body <?php body_class(); ?>>
  <header id="masthead">
    <h1><a href="#"><?php bloginfo('name'); ?></a></h1>
  </header>
___
