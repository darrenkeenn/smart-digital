<section class="section">
  <div class="container">
    <h3 class="title is-3 has-text-centered has-text-grey">Trusted by</h3>
    <div class="client-block-footer">
      <?php
      $client_loop = new WP_Query(
        array(
          'post_type' => 'client',
          'orderby' => '_cmb_is_featured',
          'meta_key'     => '_cmb_is_featured',
          'meta_value'   => true,
          'meta_compare' => '=',
        )
      );

      while ($client_loop->have_posts()) : $client_loop->the_post();
        $thumb_id = get_post_thumbnail_id();
        $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
        ?>
        <div>
          <img src="<?php echo wp_get_attachment_url($thumb_id) ?>" />
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
