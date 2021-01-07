<?php

function post_types() {

  register_post_type('place', array(
    'rewrite' => array('slug' => 'places'),
    'has_archive' => true,
    'public' => true,
    'show_in_rest' => true,
    'labels' => array(
      'name' => 'Places',
      'add_new_item' => 'Add a New Place',
      'edit_item' => 'Edit Place',
      'all_items' => 'All Places',
      'singular_name' => 'Place'
    ),
    'menu_icon' => 'dashicons-location'    
  ));

  register_post_type('artist', array(
    'rewrite' => array('slug' => 'artists'),
    'has_archive' => true,
    'public' => true,
    'show_in_rest' => true,
    'labels' => array(
      'name' => 'Artists',
      'add_new_item' => 'Add a New Artist',
      'edit_item' => 'Edit Artist',
      'all_items' => 'All Artists',
      'singular_name' => 'Artist'
    ),
    'menu_icon' => 'dashicons-admin-users'    
  ));

  // register_post_type('artwork', array(
  //   'public' => true,
  //   'show_in_rest' => true,
  //   'labels' => array(
  //     'name' => 'Artwork',
  //     'add_new_item' => 'Add New Artwork',
  //     'edit_item' => 'Edit Artwork',
  //     'all_items' => 'All Artwork',
  //     'singular_name' => 'Artwork'
  //   ),
  //   'menu_icon' => 'dashicons-admin-customizer'    
  // ));
}

add_action('init', 'post_types');