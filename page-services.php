<?php

/**
 * Template Name: Smart Tech Services
 * Description: Smart Tech Services
 */
?>
<?php get_header(); ?>

<section class="hero is-info banner">
  <div class="hero-body" style="background-image: url('<?php echo get_theme_mod('sd-services-content-top-banner-image') ?>');">
    <div class="black-screen"></div>
    <div class="container has-text-centered">
      <h1 class="title is-1">
        <?php the_title() ?>
      </h1>
      <h2 class="subtitle is-3">
        <?php echo get_theme_mod('sd-services-content-top-banner-sub-text') ?>
      </h2>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="columns is-multiline">

      <?php
      $service_loop = new WP_Query(
        array(
          'post_type' => 'service',
          'posts_per_page' => -1,
        )
      );

      while ($service_loop->have_posts()) : $service_loop->the_post();
        ?>
        <div class="column is-4 has-text-centered">
          <?php
            $icon = rwmb_meta('_cmb_icon');
            if ($icon) {
              ?>
            <p><i class="fas <?php echo $icon ?> fa-3x"></i></p><br />
          <?php } ?>
          <h5 class="title is-5"><?php the_title(); ?></h5>
          <?php the_content(); ?>
        </div>
      <?php endwhile;
      ?>
    </div>
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
