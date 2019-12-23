<?php

/**
 * The template for displaying 404 pages (not found).
 *
 */

get_header(); ?>

<!-- Page content -->
<div class="section is-large">
  <div class="container has-text-centered">
    <h1 class="title is-1">404, Page not found</h1>
    <h3 class="is-size-5"><?php esc_html_e('The link you clicked might be corrupted, or the page may have been removed.', 'smartech'); ?></h3>
  </div>
</div>

<?php get_footer(); ?>
