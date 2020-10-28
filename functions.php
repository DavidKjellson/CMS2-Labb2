<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');

function includeStyles()
{
  wp_enqueue_style('bootstrap-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
  wp_enqueue_style('style', get_template_directory_uri().'/style.css', [], '28october');
}

add_action('wp_enqueue_scripts', 'includeStyles');
