<?php

remove_action('shutdown', 'wp_ob_end_flush_all', 1);

// Add stylesheet
function sd_scripts()
{
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(), 1.0, true);
}
add_action('wp_enqueue_scripts', 'sd_scripts');

function sd_admin_scripts()
{
  wp_enqueue_script('custom_script', get_bloginfo('template_url') . '/js/admin-script.js', array('jquery'));
}
add_action('admin_enqueue_scripts', 'sd_admin_scripts');

// Add support for featured images
add_theme_support('post-thumbnails');

// Add post types
require_once('functions/functions_post-types.php');
require_once('functions/functions_metabox.php');
require_once('functions/functions_main-site.php');
require_once('functions/functions_homepage_options.php');
require_once('functions/functions_services_options.php');
require_once('functions/functions_nav-walker.php');
