<?php 

// css & js import
function artFiles() {
  wp_enqueue_style('main_styles', get_stylesheet_uri());
}

function placesPostType() {
  register_post_type('place', array(
    'public' => true,
    'labels' => array(
      'name' => 'Places',
      'add_new_item' => 'Add a New Place',
      'edit_item' => 'Edit Place',
      'all_items' => 'All Places',
      'singular_name' => 'Place'
    ),
    'menu_icon' => 'dashicons-location'    
  ));
}

function artistsPostType() {
  register_post_type('artist', array(
    'public' => true,
    'labels' => array(
      'name' => 'Artists',
      'add_new_item' => 'Add a New Artist',
      'edit_item' => 'Edit Artist',
      'all_items' => 'All Artists',
      'singular_name' => 'Artist'
    ),
    'menu_icon' => 'dashicons-admin-users'    
  ));
}

function artPostType() {
  register_post_type('art', array(
    'public' => true,
    'labels' => array(
      'name' => 'Art',
      'add_new_item' => 'Add New Art',
      'edit_item' => 'Edit Art',
      'all_items' => 'All Art',
      'singular_name' => 'Art'
    ),
    'menu_icon' => 'dashicons-admin-customizer'    
  ));
}

add_action('wp_enqueue_scripts', 'artFiles');
add_action('init', 'placesPostType');
add_action('init', 'artistsPostType');
add_action('init', 'artPostType');
?>
