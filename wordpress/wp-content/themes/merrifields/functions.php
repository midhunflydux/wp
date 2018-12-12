<?php

//registering the wp nav menu
function register_menu(){
  register_nav_menu('primary','Primary Header Navigation');
  register_nav_menu('footer','Footer Header Navigation');
  add_theme_support('menus');
}
add_action( 'init', 'register_menu' );

//image croping
add_image_size( 'banner-image', 980 , 256, true );
add_image_size( 'news-front', 1145.14 , 80, true );
add_image_size( 'category-services-image', 314, 209, true );
//end
// For activating featured image option
add_theme_support('post-thumbnails');

//Custom post Type services
function services_custom_post(){
  $labels = array(
    'name' => 'services',
    'singular_name' => 'services',
    'add_new' => 'Add services',
    'all_items' => 'All services',
    'add_new_item' => 'Add services',
    'edit_item' => 'Edit services',
    'new_item' => 'New services',
    'view_item' => 'View services',
    'search_item' => 'Search services',
    'not_found' => 'No services found',
    'not_found_in_trash' => 'No services found in trash',
    'parent_item_colon' => 'Parent Item'
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'rewrite' => array('slug' => 'services'),
    'publicly_queryable' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array(
      'title',
      'editor',
      'excerpt',
      'thumbnail',
      'revisions',
      'comments',
    ),

    'menu_position' => 5,
    'menu_icon' => 'dashicons-palmtree',
    'exclude_from_search' => false
  );
  register_post_type('services',$args);
}
add_action( 'init', 'services_custom_post' );

//////////////////////////////////////////////


/**
* Add custom taxonomies
*
* Additional custom taxonomies can be defined here
* http://codex.wordpress.org/Function_Reference/register_taxonomy
*/
function add_services_taxonomies() {
  // Add new "Locations" taxonomy to Posts
  register_taxonomy('services-category', 'services', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'services Category', 'taxonomy general name' ),
      'singular_name' => _x( 'Services Category', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search services' ),
      'all_items' => __( 'All Category' ),
      'parent_item' => __( 'Parent Category' ),
      'parent_item_colon' => __( 'Parent Category:' ),
      'edit_item' => __( 'Edit Category' ),
      'update_item' => __( 'Update Category' ),
      'add_new_item' => __( 'Add New Category' ),
      'new_item_name' => __( 'New Category Name' ),
      'menu_name' => __( 'services Category' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'services-category', // This controls the base slug that will display before each term
      'with_front' => false, // Don't display the category base before "/locations/"
      'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
    ),
  ));
}
add_action( 'init', 'add_services_taxonomies', 0 );


 ?>
