<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');

function includeStyles()
{
  wp_enqueue_style('bootstrap-style', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
  wp_enqueue_style('w3-style', 'https://www.w3schools.com/w3css/4/w3.css');
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css', [], '28october');
}

add_action('wp_enqueue_scripts', 'includeStyles');
