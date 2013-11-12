
<div id="footer-wrap">
  <footer class="content-info container" role="contentinfo">
    <div class="row more_bottom_margin">
      <div class="col-lg-6">
        <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('title'); ?>" class="footer_brand"></a>
      </div>
      <div class="col-lg-6 text-right social_icons">
        <a href="#" title="Envysion on LinkedIn" class="linkedin"><img src="assets/img/social/linkedin.png"></a>
        <a href="#" title="Envysion RSS" class="rss"><img src="assets/img/social/rss.png"></a>
        <a href="#" title="Envysion on Facebook" class="facebook"><img src="assets/img/social/facebook.png"></a>
        <a href="#" title="Envysion on Twitter" class="twitter"><img src="assets/img/social/twitter.png"></a>
        <a href="#" title="Envysion on YouTube" class="youtube"><img src="assets/img/social/youtube.png"></a>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3">
        <h5>Contact</h5>
        Envysion, Inc.<br>
        400 Centennial Pkwy<br>
        Suite 201<br>
        Louisville, CO 80027<br><br>

        303.590.2350 (Local)<br>
        877.258.9441 (Toll Free)<br>
        303.590.2351 (Fax)<br>
        contact@envysion.com
      </div>
      <div class="col-lg-3">
        <h5>Sitemap</h5>
        <?php
          if (has_nav_menu('footer_sitemap_navigation')) :
            wp_nav_menu(array('theme_location' => 'footer_sitemap_navigation', 'menu_class' => 'footer_nav'));
          endif;
        ?>
      </div>
      <div class="col-lg-3">
        <h5>Who We Help</h5>
        <?php
          if (has_nav_menu('footer_industries_navigation')) :
            wp_nav_menu(array('theme_location' => 'footer_industries_navigation', 'menu_class' => 'footer_nav'));
          endif;
        ?>
      </div>
      <div class="col-lg-3">
        <h5>Legal</h5>
      </div>
  </footer>
</div>
</div>
<?php wp_footer(); ?>