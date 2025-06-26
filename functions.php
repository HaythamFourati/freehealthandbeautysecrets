<?php

function freehealthandbeautysecrets_features() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'freehealthandbeautysecrets' ) );
  register_nav_menu( 'footer', __( 'Footer Menu', 'freehealthandbeautysecrets' ) );
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'freehealthandbeautysecrets_features');

function boilerplate_load_assets() {
  wp_enqueue_script('ourmainjs', get_theme_file_uri('/build/index.js'), array('wp-element'), '1.0', true);
  wp_enqueue_style('ourmaincss', get_theme_file_uri('/build/index.css'));

  // Load Instagram embed script only on the front page where the reel is present.

}
add_action('wp_enqueue_scripts', 'boilerplate_load_assets');