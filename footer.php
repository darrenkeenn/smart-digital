	<footer class="footer footer__main">
	  <div class="container">
	    <div class="columns">
	      <div class="column is-6">
	        <h3 class="is-size-3 has-text-weight-bold">About us</h3>
	        <p>
	          <?php echo get_theme_mod('sd-main-site-content-about-us') ?>
	        </p>
	      </div>
	      <div class="column">
	        <h3 class="is-size-3 has-text-weight-bold">Useful Links</h3>
	        <ul>
	          <li><a href="#">Consulting</a></li>
	          <li><a href="#">Privacy Policy</a></li>
	          <li><a href="https://modeltheme.com/mt_yankee/blog/">Blog</a></li>
	        </ul>
	      </div>
	      <div class="column">
	        <h3 class="is-size-3 has-text-weight-bold	">Contact Us</h3>
	        <div class="contact-details">
	          <p></p>
	          <p>
	            <a href="tel:<?php echo get_theme_mod('sd-main-site-content-contact-number') ?>">
	              <?php echo get_theme_mod('sd-main-site-content-contact-number') ?>
	            </a>
	          </p>
	          <p>
	            <a href="mailto:<?php echo get_theme_mod('sd-main-site-content-email') ?>">
	              <?php echo get_theme_mod('sd-main-site-content-email') ?>
	            </a>
	          </p>
	          <p><?php echo get_theme_mod('sd-main-site-content-address') ?></p>
	        </div>
	      </div>
	    </div>
	    <div class="footer__block">
	      <div class="columns is-vcentered">
	        <div class="column">
	          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logoWhitePNG.png'); ?>" width="200">
	        </div>
	        <div class="column has-text-right">
	          <p>
	            &copy; Copyright Smart Digital 2020
	            <script>
	              new Date().getFullYear() > 2020 && document.write("- " + new Date().getFullYear());
	            </script>
	          </p>
	        </div>
	      </div>
	    </div>
	  </div>
	</footer>
	<?php wp_footer(); ?>

	</body>

	</html>
