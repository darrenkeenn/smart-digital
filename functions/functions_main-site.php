<?php

// Homepage custom text
function sd_main_site($wp_customize) {
  $wp_customize->add_section('sd-main-site-content-section', array(
    'title' => 'Main Site Content',
    'priority' => 1,
  ));

  // Contact number
  $wp_customize->add_setting('sd-main-site-content-contact-number');

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sd-main-site-content-contact-number-control', array(
  'label' => 'Contact number',
  'section' => 'sd-main-site-content-section',
  'settings' => 'sd-main-site-content-contact-number',
  'type' => 'text'
  )));

  // Email
  $wp_customize->add_setting('sd-main-site-content-email');

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sd-main-site-content-email-control', array(
    'label' => 'Email',
    'section' => 'sd-main-site-content-section',
    'settings' => 'sd-main-site-content-email',
    'type' => 'text'
  )));

  // About us footer
  $wp_customize->add_setting('sd-main-site-content-about-us');

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sd-main-site-content-about-us-control', array(
    'label' => 'About us - footer',
    'section' => 'sd-main-site-content-section',
    'settings' => 'sd-main-site-content-about-us',
    'type' => 'textarea'
  )));

  // One liner address footer
  $wp_customize->add_setting('sd-main-site-content-address');

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'sd-main-site-content-address-control', array(
    'label' => 'One line address - footer',
    'section' => 'sd-main-site-content-section',
    'settings' => 'sd-main-site-content-address',
    'type' => 'text'
  )));
}

add_action('customize_register', 'sd_main_site');
