<?php

/**
 * Include and setup custom metaboxes and fields.
 *
 * @category Smart Tech
 * @package  Metaboxes
 */

function cmb_lw_meta_boxes($meta_boxes)
{
  include 'utils.php';
  // Start with an underscore to hide fields from custom fields list
  $prefix = '_cmb_';

  $meta_boxes['service_page_content'] = array(
    'id'         => 'service_page_content',
    'title'      => __('Page content', 'cmb'),
    'post_types' => array('service'),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true,
    'fields'   => array(
      array(
        'name' => 'Description',
        'desc' => 'Description',
        'id' => $prefix . 'description',
        'type' => 'textarea',
      ),
      array(
        'name' => 'Icon',
        'desc' => 'Services page icon',
        'id' => $prefix . 'icon',
        'std' => 'cogs',
        'type' => 'select',
        'options' => $faItems
      ),
    ),
  );

  $meta_boxes['client_type_content'] = array(
    'id'         => 'client_type_content',
    'title'      => __('Client type content', 'cmb'),
    'post_types' => array('client'),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true,
    'fields'   => array(
      array(
        'name' => 'Is featured',
        'desc' => 'Featured clients will display in the client image footer block.',
        'id' => $prefix . 'is_featured',
        'type' => 'checkbox',
      ),
      array(
        'name' => 'Logo',
        'id'   => $prefix . 'logo',
        'type' => 'image_advanced',
        'max_file_uploads' => 1
      ),
    ),
  );

  return $meta_boxes;
}

add_filter('rwmb_meta_boxes', 'cmb_lw_meta_boxes');
