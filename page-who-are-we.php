<?php

/**
 * Template Name: Smart Tech Who are we
 * Description: Smart Tech Who are we
 */
?>
<?php get_header(); ?>

<section class="hero is-info banner">
  <div class="hero-body" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/banner.jpg'); ?>');">
    <div class="container has-text-centered">
      <h1 class="title is-1">
        Who are we
      </h1>
      <h2 class="subtitle is-3">
        Web, Mobile, Immersive Reality & Social Media Marketing
      </h2>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <?php while (have_posts()) : the_post(); ?>
      <div class="columns is-vcentered">
        <div class="column">
          <div class="cms-content">
            <?php the_content(); ?>
          </div>
        </div>
        <div class="column is-4-desktop is-6-tablet">
          <?php
            $thumb_id = get_post_thumbnail_id();
            $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
          ?>
          <img src="<?php echo wp_get_attachment_url($thumb_id) ?>" alt="<?php echo $alt ?>" />
        </div>
      </div>
    <?php endwhile;
    ?>
  </div>
</section>

<section class="section is-primary-background">
  <div class="container">
    <?php get_template_part('template-parts/contact-promotion'); ?>
  </div>
</section>

<?php get_template_part('template-parts/custom/back-to-top'); ?>
<?php get_footer(); ?>
