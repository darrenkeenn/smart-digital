<?php

/**
 * Template Name: Smart Tech Homepage
 * Description: Smart Tech Homepage
 */
?>
<?php get_header(); ?>

<section class="hero is-info is-large banner">
  <div class="hero-body" style="background-image: url(<?php echo get_theme_mod('sd-homepage-content-top-banner-image') ?>);">
    <div class="container has-text-centered">
      <h1 class="title is-1">
        <?php echo get_theme_mod('sd-homepage-content-top-banner-text') ?>
      </h1>
      <h2 class="subtitle is-3">
        <?php echo get_theme_mod('sd-homepage-content-top-banner-sub-text') ?>
      </h2>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="blocks">
      <div class="columns">
        <?php
        $service_loop = new WP_Query(
          array(
            'post_type' => 'service',
            'posts_per_page' => 3,
          )
        );

        while ($service_loop->have_posts()) : $service_loop->the_post();
          ?>
          <div class="column">
            <div class="card">
              <div class="card-image">
                <?php
                  $thumb_id = get_post_thumbnail_id();
                  $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                  ?>
                <figure class="image" style="background-image: url(<?php echo wp_get_attachment_url($thumb_id) ?>);"></figure>
              </div>
              <div class="card-content">
                <div class="content has-text-centered">
                  <h4 class="title is-5"><?php the_title(); ?></h4>
                  <?php
                    $description = rwmb_meta('_cmb_description');
                    if ($description) { ?>
                    <p><?php echo $description ?></p>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
      <div class="has-text-centered">
        <p>
          <?php
          $linkId = rwmb_meta('_cmb_link-url');
          ?>
          <?php get_the_title($linkId) ?>
          <a class="button is-primary is-large" href="<?php echo get_permalink(get_theme_mod('sd-homepage-content-service-link')) ?>">
            <?php echo get_theme_mod('sd-homepage-content-service-link-text') ?>
          </a>
        </p>
      </div>
    </div>
  </div>
</section>

<section class="hero is-info is-large banner">
  <div class="hero-body" style="background-image: url(<?php echo get_theme_mod('sd-homepage-content-mid-banner-image') ?>);">
    <div class="container has-text-centered">
      <h1 class="title  is-size-1">
        <?php echo get_theme_mod('sd-homepage-content-mid-banner-text') ?>
      </h1>
      <h2 class="subtitle is-size-3">
        <?php echo get_theme_mod('sd-homepage-content-mid-banner-sub-text') ?>
      </h2>
    </div>
  </div>
</section>

<section class="section is-primary-background">
  <div class="container">
    <?php get_template_part('template-parts/contact-promotion'); ?>
  </div>
</section>


<?php get_template_part('template-parts/client-block-footer'); ?>
<?php get_footer(); ?>
