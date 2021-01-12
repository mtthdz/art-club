<?php 

// css & js import
function artFiles() {
  wp_enqueue_style('main_styles', get_stylesheet_uri());
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap');
}

// ability to set thumbnails for gutenberg editor
function themeFeatures() {
  add_theme_support('post-thumbnails');
}

// run functions
// custom post types found under mu-plugins folder above themes folder
add_action('wp_enqueue_scripts', 'artFiles');
add_action('after_setup_theme', 'themeFeatures');
?>
