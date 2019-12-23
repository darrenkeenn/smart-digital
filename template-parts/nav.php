<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item" href="/">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logoPNG.png'); ?>" width="240">
      </a>

      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="main-nav">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
    <div class="navbar-end">
      <?php
      wp_nav_menu(
        array(
          'theme_location'    => 'primary',
          'depth'             => 2,
          'container'         => false,
          // 'items_wrap'     => 'div',
          'menu_class'        => 'navbar-menu',
          'menu_id'           => 'main-nav',
          'after'             => "</div>",
          'walker'            => new Navwalker()
        )
      );
      ?>
    </div>
  </div>
</nav>
