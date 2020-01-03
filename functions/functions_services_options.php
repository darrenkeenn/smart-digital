<?php

// Services custom text
function sd_services_content($wp_customize) {

  $wp_customize->add_section('sd-services-content-section', array(
  'title' => 'Services Content',
  'panel' => 'panel_id',
  ));

  // Top banner sub text
  $wp_customize->add_setting('sd-services-content-top-banner-sub-text');

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sd-services-content-top-banner-sub-text-control', array(
    'label' => 'Top banner sub text',
    'section' => 'sd-services-content-section',
    'settings' => 'sd-services-content-top-banner-sub-text',
    'type' => 'text'
  )));

  // Top banner image
  $wp_customize->add_setting('sd-services-content-top-banner-image');

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sd-services-content-top-banner-image-control', array(
    'label' => 'Top banner image',
    'section' => 'sd-services-content-section',
    'settings' => 'sd-services-content-top-banner-image',
  )));

  // Mid banner text
  $wp_customize->add_setting('sd-services-content-mid-banner-text');

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sd-services-content-mid-banner-text-control', array(
  'label' => 'Mid banner text',
  'section' => 'sd-services-content-section',
  'settings' => 'sd-services-content-mid-banner-text',
  'type' => 'text'
  )));

  // Mid banner sub text
  $wp_customize->add_setting('sd-services-content-mid-banner-sub-text');

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sd-services-content-mid-banner-sub-text-control', array(
  'label' => 'Mid banner sub text',
  'section' => 'sd-services-content-section',
  'settings' => 'sd-services-content-mid-banner-sub-text',
  'type' => 'text'
  )));

  // Mid banner image
  $wp_customize->add_setting('sd-services-content-mid-banner-image');

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sd-services-content-mid-banner-image-control', array(
  'label' => 'Mid banner image',
  'section' => 'sd-services-content-section',
  'settings' => 'sd-services-content-mid-banner-image',
  )));
}

add_action('customize_register', 'sd_services_content');
