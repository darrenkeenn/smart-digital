<?php

/**
 * Template Name: Smart Tech Clients
 * Description: Smart Tech Clients
 */
?>
<?php get_header(); ?>

<section class="hero is-info banner">
  <div class="hero-body" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/banner.jpg'); ?>');">
    <div class="black-screen"></div>
    <div class="container has-text-centered">
      <h1 class="title is-1">
        <?php the_title() ?>
      </h1>
      <h2 class="subtitle is-3">
        Web, Mobile, Immersive Reality & Social Media Marketing
      </h2>
    </div>
  </div>
</section>

<section>
  <div class="columns is-gapless is-multiline client-list">
    <?php
    $client_loop = new WP_Query(
      array(
        'post_type' => 'client',
        'posts_per_page' => -1,
      )
    );

    while ($client_loop->have_posts()) : $client_loop->the_post();
      $thumb_id = get_post_thumbnail_id();
      $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
      ?>
      <div class="is-6 column client-item__feature-image is-relative" style="background: url(<?php echo wp_get_attachment_url($thumb_id) ?>) no-repeat top left / cover">
        <div class="black-screen"></div>
        <div class="client-item__feature-image__title">
          <h3 class="is-1 title"><?php the_title(); ?></h3>
        </div>
      </div>
      <div class="is-6 column">
        <div class="client-item__content section cms-content">
          <?php the_content(); ?>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</section>

<section class="hero is-info is-large banner">
  <div class="hero-body" style="background-image: url(<?php echo get_theme_mod('sd-services-content-mid-banner-image') ?>);">
    <div class="black-screen"></div>
    <div class="container has-text-centered">
      <h1 class="title  is-size-1">
        <?php echo get_theme_mod('sd-services-content-mid-banner-text') ?>
      </h1>
      <h2 class="subtitle is-size-3">
        <?php echo get_theme_mod('sd-services-content-mid-banner-sub-text') ?>
      </h2>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2 class="title is-size-2">Additional content</h2>
    <p>To be decided</p>
  </div>
</section>

<section class="section is-primary-background">
  <div class="container">
    <?php get_template_part('template-parts/contact-promotion'); ?>
  </div>
</section>

<?php get_template_part('template-parts/custom/back-to-top'); ?>
<?php get_footer(); ?>
