<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category Smart Tech
 * @package  Metaboxes
 */

function cmb_lw_meta_boxes( $meta_boxes ) {

  // Start with an underscore to hide fields from custom fields list
  $prefix = '_cmb_';

  $meta_boxes['page_content'] = array(
    'id'         => 'page_content',
    'title'      => __( 'Page content', 'cmb' ),
    'post_types' => array( 'service' ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true,
    'fields'	 => array (
      array(
        'name' => 'Description',
        'desc' => 'Description',
        'id' => $prefix . 'description',
        'type' => 'textarea',
      ),
    ),
  );

  $meta_boxes['homepage_content'] = array(
    'id'         => 'homepage_content',
    'title'      => __('Homepage content', 'cmb'),
    'include' => array(
      'template' => array('page-services.php'),
    ),
    'fields'   => array(
      array(
        'name' => 'Name',
        'id'   => 'name',
        'type' => 'text',
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
    ),
  );

  return $meta_boxes;
}

add_filter( 'rwmb_meta_boxes', 'cmb_lw_meta_boxes' );
