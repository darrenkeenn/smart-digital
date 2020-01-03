<?php

// Homepage custom text
function sd_homepage_content($wp_customize) {
  $wp_customize->add_panel('panel_id', array(
  'priority' => 10,
  'capability' => 'edit_theme_options',
  'title' => __('Theme Options', 'smartdigital'),
  'description' => __('Several settings pertaining my theme', 'smartdigital'),
  ));

  $wp_customize->add_section('sd-homepage-content-section', array(
  'title' => 'Homepage Content',
  'panel' => 'panel_id',
  ));

  // Top banner text
  $wp_customize->add_setting('sd-homepage-content-top-banner-text');

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sd-homepage-content-top-banner-text-control', array(
  'label' => 'Top banner text',
  'section' => 'sd-homepage-content-section',
  'settings' => 'sd-homepage-content-top-banner-text',
  'type' => 'text'
  )));

  // Top banner sub text
  $wp_customize->add_setting('sd-homepage-content-top-banner-sub-text');

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sd-homepage-content-top-banner-sub-text-control', array(
  'label' => 'Top banner sub text',
  'section' => 'sd-homepage-content-section',
  'settings' => 'sd-homepage-content-top-banner-sub-text',
  'type' => 'text'
  )));

  // Top banner image
  $wp_customize->add_setting('sd-homepage-content-top-banner-image');

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sd-homepage-content-top-banner-image-control', array(
  'label' => 'Top banner image',
  'section' => 'sd-homepage-content-section',
  'settings' => 'sd-homepage-content-top-banner-image',
  )));

  // Mid banner text
  $wp_customize->add_setting('sd-homepage-content-mid-banner-text');

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sd-homepage-content-mid-banner-text-control', array(
  'label' => 'Mid banner text',
  'section' => 'sd-homepage-content-section',
  'settings' => 'sd-homepage-content-mid-banner-text',
  'type' => 'text'
  )));

  // Mid banner sub text
  $wp_customize->add_setting('sd-homepage-content-mid-banner-sub-text');

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sd-homepage-content-mid-banner-sub-text-control', array(
  'label' => 'Mid banner sub text',
  'section' => 'sd-homepage-content-section',
  'settings' => 'sd-homepage-content-mid-banner-sub-text',
  'type' => 'text'
  )));

  // Mid banner image
  $wp_customize->add_setting('sd-homepage-content-mid-banner-image');

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sd-homepage-content-mid-banner-image-control', array(
  'label' => 'Mid banner image',
  'section' => 'sd-homepage-content-section',
  'settings' => 'sd-homepage-content-mid-banner-image',
  )));

  // Service link text
  $wp_customize->add_setting('sd-homepage-content-service-link-text');

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sd-homepage-content-service-link-text-control', array(
  'label' => 'Service link text',
  'section' => 'sd-homepage-content-section',
  'settings' => 'sd-homepage-content-service-link-text',
  'type' => 'text'
  )));

  // Service link
  $wp_customize->add_setting('sd-homepage-content-service-link');

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sd-homepage-content-service-link-control', array(
  'label' => 'Service link',
  'section' => 'sd-homepage-content-section',
  'settings' => 'sd-homepage-content-service-link',
  'type' => 'dropdown-pages'
  )));
}

add_action('customize_register', 'sd_homepage_content');
