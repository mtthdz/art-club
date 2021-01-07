<?php 

// css & js import
function artFiles() {
  wp_enqueue_style('main_styles', get_stylesheet_uri());
}

function themeFeatures() {
  add_theme_support('post-thumbnails');
}

add_action('wp_enqueue_scripts', 'artFiles');
add_action('after_setup_theme', 'themeFeatures');
?>
