<section class="section">
  <div class="container">
    <h3 class="title is-3 has-text-centered has-text-grey">Trusted by</h3>
    <div class="client-block-footer">
      <?php
      $client_loop = new WP_Query(
        array(
          'post_type' => 'client',
          'orderby' => '_cmb_is_featured',
          'meta_query' => array(
            'relation' => 'AND',
            array(
                'key'   => '_cmb_is_featured',
                'compare' => '=',
                'value' => true
            ),
            array(
                'key'   => '_cmb_logo',
                'value' => array(),
                'compare' => 'NOT LIKE',
            )
          ),
          // 'meta_key'     => '_cmb_is_featured',
          // 'meta_value'   => true,
          // 'meta_compare' => '=',
        )
      );

      while ($client_loop->have_posts()) : $client_loop->the_post();
        $images = rwmb_meta('_cmb_logo', array('limit' => 1, 'size' => 'large'));
        $image = reset($images);
        ?>
        <div>
          <img src="<?php echo $image['url'] ?>" alt="<?php $image['alt'] ?>" />
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
