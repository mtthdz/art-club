<?php

function post_types() {

  register_post_type('place', array(
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

  register_post_type('art', array(
    'public' => true,
    'show_in_rest' => true,
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

add_action('init', 'post_types');