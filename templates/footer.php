
<div id="footer-wrap">
  <footer class="content-info container" role="contentinfo">
    <div class="row more_bottom_margin">
      <div class="col-md-6 col-sm-6">
        <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('title'); ?>" class="footer_brand"></a>
      </div>
      <div class="col-md-6 col-sm-6 text-right social_icons">
      	<a href="http://envysion.com/feed" title="Envysion RSS" class="rss"><img src="<?php bloginfo('template_url'); ?>/assets/img/social/rss.png"></a>
        <a href="https://www.youtube.com/channel/UC5i9iOmnp620B0m0QyjvEoQ" title="Envysion on YouTube" class="youtube"><img src="<?php bloginfo('template_url'); ?>/assets/img/social/youtube.png"></a>
        <a href="https://www.linkedin.com/company/envysion" title="Envysion on LinkedIn" class="linkedin"><img src="<?php bloginfo('template_url'); ?>/assets/img/social/linkedin.png"></a>
        <a href="https://www.facebook.com/pages/Envysion/128871923883924" title="Envysion on Facebook" class="facebook"><img src="<?php bloginfo('template_url'); ?>/assets/img/social/facebook.png"></a>
        <a href="https://twitter.com/Envysion" title="Envysion on Twitter" class="twitter"><img src="<?php bloginfo('template_url'); ?>/assets/img/social/twitter.png"></a>
        
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3 col-xs-6">
        <h5>Contact</h5>
        <?php the_field('footer_contact_block','option'); ?>
        <h5>Legal</h5>
        <?php the_field('footer_legal_block','option'); ?>
      </div>
      <div class="col-sm-3 col-xs-6">
        <h5>Products</h5>
        <?php
          if (has_nav_menu('footer_sitemap_navigation')) :
            wp_nav_menu(array('theme_location' => 'footer_sitemap_navigation', 'menu_class' => 'footer_nav'));
          endif;
        ?>
      </div>
      <div class="clearfix visible-xs"></div>
      <div class="col-sm-3 col-xs-6">
        <h5>Solutions</h5>
        <?php
          if (has_nav_menu('footer_industries_navigation')) :
            wp_nav_menu(array('theme_location' => 'footer_industries_navigation', 'menu_class' => 'footer_nav'));
          endif;
        ?>
      </div>
      <div class="col-sm-3 col-xs-6">
      	<h5>Company</h5>
        <?php
          if (has_nav_menu('footer_column_4')) :
            wp_nav_menu(array('theme_location' => 'footer_column_4', 'menu_class' => 'footer_nav'));
          endif;
        ?>
        
      </div>
  </footer>
</div>
<?php get_template_part('templates/eloqua','form'); ?>

<?php wp_footer(); ?>