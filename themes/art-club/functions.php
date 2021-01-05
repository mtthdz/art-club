<?php 

// css & js import
function art_files() {
  wp_enqueue_style('main_styles', get_stylesheet_uri());
}

// actions
add_action('wp_enqueue_scripts', 'art_files');
?>
