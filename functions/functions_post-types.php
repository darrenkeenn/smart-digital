
<?php

function z_create_site_content_post_type()
{
  // Creates Site Content post type

  $labels = array(
    'name'                => 'Site Content', 'Post Type General Name',
    'singular_name'       => 'Site Content Item', 'Post Type Singular Name',
    'menu_name'           => 'Site Content',
    'parent_item_colon'   => 'Parent Site Content Item',
    'all_items'           => 'All Site Content',
    'view_item'           => 'View Site Content',
    'add_new_item'        => 'Add New Site Content Item',
    'add_new'             => 'Add New',
    'edit_item'           => 'Edit Site Content Item',
    'update_item'         => 'Update Site Content Item',
    'search_items'        => 'Search Site Content Item',
    'not_found'           => 'Not Found',
    'not_found_in_trash'  => 'Not found in Trash',
  );

  $args = array(
    'label' => 'Site Content',
    'labels' => $labels,
    'public' => false,
    'show_ui' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'rewrite' => array('slug' => 'site-content'),
    'query_var' => true,
    'supports' => array(
      'title',
      'editor',
      'revisions',
      'thumbnail',
    )
  );

  register_post_type('site-content', $args);
}

function z_create_client_custom_post_type()
{
  // Creates Client post type

  // Set UI labels for Custom Post Type
  $labels = array(
    'name'                => 'Clients', 'Post Type General Name',
    'singular_name'       => 'Client', 'Post Type Singular Name',
    'menu_name'           => 'Clients',
    'parent_item_colon'   => 'Parent Client',
    'all_items'           => 'All Clients',
    'view_item'           => 'View Client',
    'add_new_item'        => 'Add New Client',
    'add_new'             => 'Add New',
    'edit_item'           => 'Edit Client',
    'update_item'         => 'Update Client',
    'search_items'        => 'Search Client',
    'not_found'           => 'Not Found',
    'not_found_in_trash'  => 'Not found in Trash',
  );

  // Set args
  $args = array(
    'label' => 'Client',
    'labels' => $labels,
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 6,
    'capability_type' => 'page',
    'has_archive' => false,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'rewrite' => array('slug' => 'clients'),
    'query_var' => true,
    'menu_icon' => 'dashicons-format-status',
    'supports' => array(
      'title',
      'editor',
      'revisions',
      'thumbnail',
    ),
  );

  // register custom post type
  register_post_type('client', $args);
}

function z_create_service_custom_post_type()
{
  // Creates Service post type

  // Set UI labels for Custom Post Type
  $labels = array(
    'name'                => 'Services', 'Post Type General Name',
    'singular_name'       => 'Service', 'Post Type Singular Name',
    'menu_name'           => 'Services',
    'parent_item_colon'   => 'Parent Service',
    'all_items'           => 'All Services',
    'view_item'           => 'View Service',
    'add_new_item'        => 'Add New Service',
    'add_new'             => 'Add New',
    'edit_item'           => 'Edit Service',
    'update_item'         => 'Update Service',
    'search_items'        => 'Search Service',
    'not_found'           => 'Not Found',
    'not_found_in_trash'  => 'Not found in Trash',
  );

  // Set args
  $args = array(
    'label' => 'Service',
    'labels' => $labels,
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 6,
    'capability_type' => 'page',
    'has_archive' => false,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'rewrite' => array('slug' => 'services'),
    'query_var' => true,
    'menu_icon' => 'dashicons-awards',
    'supports' => array(
      'title',
      'editor',
      'revisions',
      'thumbnail',
    ),
  );

  // register custom post type
  register_post_type('service', $args);
}

/* Hook into the 'init' action so that the function containing
*  the post type registration is not unnecessarily executed.
*/

add_action('init', 'z_create_site_content_post_type', 0);
add_action('init', 'z_create_client_custom_post_type', 0);
add_action('init', 'z_create_service_custom_post_type', 0);

?>
