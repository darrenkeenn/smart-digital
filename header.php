<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<body id="<?php echo (is_front_page()) ? "home" : ((is_page()) ? get_query_var('name') : ((is_home()) ? "home" : ((is_single()) ? "single" : ((is_category()) ? single_cat_title() : ((is_archive()) ? "archive" : ""))))); ?>" <?php body_class(); ?>>

  <?php
  wp_body_open();
  ?>

  <header role="banner">
    <?php get_template_part('template-parts/nav'); ?>
  </header><!-- #site-header -->
