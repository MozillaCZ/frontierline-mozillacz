    </main>

  <?php get_sidebar(); ?>

  <?php if (get_theme_mod('frontierline_category_drawer') === '1') : ?>
    <?php get_template_part('includes/categories'); ?>
  <?php endif; ?>

  <?php if (!is_singular()) : ?>
    <?php get_template_part('includes/newsletter-form'); ?>
  <?php endif; ?>

  </div><!-- /.site-wrap -->



<footer id="site-info" class="section">
  <div class="content">
    <nav class="primary">
      <section>
        <a href="/" title="Mozilla.cz">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/MozillaCZ-02-512-white.png" alt="Mozilla.cz" style="max-width: 150px;"/>
        </a>
        <ul class="social-links">
          <li><a class="twitter" href="https://twitter.com/MozillaCZ">Twitter<span> (MozillaCZ)</span></a></li>
          <li><a class="facebook" href="https://www.facebook.com/MozillaCZ">Facebook<span> (MozillaCZ)</span></a></li>
          <li><a class="telegram" href="https://t.me/MozillaCZ">Telegram<span> (MozillaCZ)</span></a></li>
        </ul>
      </section>
    </nav>

    <nav class="secondary">
        <div class="small-links">
          <ul>
            <li><a rel="nofollow" href="https://www.mozilla.org/privacy/" data-link-type="footer" data-link-name="Privacy"><?php _e('Website Privacy Notice', 'frontierline'); ?></a></li>
            <li><a rel="nofollow" href="https://www.mozilla.org/privacy/websites/#cookies" data-link-type="footer" data-link-name="Cookies"><?php _e('Cookies', 'frontierline'); ?></a></li>
            <li><a rel="nofollow" href="https://www.mozilla.org/about/legal/" data-link-type="footer" data-link-name="Legal"><?php _e('Legal', 'frontierline'); ?></a></li>
          </ul>
          <p class="license">
          <?php printf(__('Portions of this content are ©1998-%1s by individual contributors. Content available under a <a href="%2s" rel="external license">Creative Commons license</a>.', 'frontierline'), date('Y'), esc_attr('https://www.mozilla.org/foundation/licensing/website-content/')); ?>
          </p>
        </div>
    </nav>
  </div>
</footer>

  <!--[if IE 9]>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/matchMedia.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/matchMedia.addListener.js"></scrip>
  <![endif]-->

  <?php wp_footer(); ?>
</body>
</html>
