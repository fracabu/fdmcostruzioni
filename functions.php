<?php

function simple_setup()
{
  // enable title in header
  add_theme_support('title-tag');
  // enable featured image
  add_theme_support('post-thumbnails');
  //custom menu areas
  register_nav_menus(array(
    'header' => esc_html__( 'Header' ,' slug-theme'),
  ));
}

add_action('after_setup_theme', 'simple_setup');


/**
 * Enqueue scripts and styles.
 */
function simple_styles()
{
  wp_enqueue_style('simple-style', get_template_directory_uri().'/style.css');
}

add_action('wp_enqueue_scripts', 'simple_styles');

