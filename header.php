<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="background-color: <?php the_field('bakgrundsfarg'); ?>;">
  <?php while (have_rows('header')) {
    the_row(); ?>
    <div class="jumbotron myhero" style="background-image:url('<?php echo get_sub_field('bild')['url']; ?>'); background-position: center;">
      <h1 class="display-4 mydisplay" style="color: <?php echo get_sub_field('farg'); ?>;"><?php the_sub_field('titel'); ?></h1>
    </div>
  <?php } ?>