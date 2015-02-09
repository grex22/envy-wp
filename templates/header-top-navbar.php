<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TXC8LN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TXC8LN');</script>
<!-- End Google Tag Manager -->
<div id="more-nav-overlay" class="more-nav-menu">
<div class="container">
  <a href="#" class="close_mn"><i class="fa fa-times-circle"></i></a>
  <div class="row">
    <div class="col-sm-3">
      <h4>Company</h4>
      <?php
        if (has_nav_menu('more_nav_col_1')) :
          wp_nav_menu(array('theme_location' => 'more_nav_col_1', 'menu_class' => 'more_nav_nav'));
        endif;
      ?>
    </div>
    <div class="col-sm-3">
      <h4>Products</h4>
      <?php
        if (has_nav_menu('more_nav_col_2')) :
          wp_nav_menu(array('theme_location' => 'more_nav_col_2', 'menu_class' => 'more_nav_nav'));
        endif;
      ?>
    </div>
    <div class="col-sm-3">
      <h4>Solutions</h4>
      <?php
        if (has_nav_menu('more_nav_col_3')) :
          wp_nav_menu(array('theme_location' => 'more_nav_col_3', 'menu_class' => 'more_nav_nav'));
        endif;
      ?>
    </div>
    <div class="col-sm-3">
      <h4>More...</h4>
      <?php
        if (has_nav_menu('more_nav_col_4')) :
          wp_nav_menu(array('theme_location' => 'more_nav_col_4', 'menu_class' => 'more_nav_nav'));
        endif;
      ?>
    </div>
  </div>
</div>
</div>
<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
  <div id="more-nav" class="more-nav-menu">
    <div class="container">
      <a href="#" class="close_mn"><i class="fa fa-times-circle"></i></a>
      <div class="row">
        <div class="col-sm-3">
          <h4>Company</h4>
          <?php
            if (has_nav_menu('more_nav_col_1')) :
              wp_nav_menu(array('theme_location' => 'more_nav_col_1', 'menu_class' => 'more_nav_nav'));
            endif;
          ?>
        </div>
        <div class="col-sm-3">
          <h4>Products</h4>
          <?php
            if (has_nav_menu('more_nav_col_2')) :
              wp_nav_menu(array('theme_location' => 'more_nav_col_2', 'menu_class' => 'more_nav_nav'));
            endif;
          ?>
        </div>
        <div class="col-sm-3">
          <h4>Solutions</h4>
          <?php
            if (has_nav_menu('more_nav_col_3')) :
              wp_nav_menu(array('theme_location' => 'more_nav_col_3', 'menu_class' => 'more_nav_nav'));
            endif;
          ?>
        </div>
        <div class="col-sm-3">
          <h4>More...</h4>
          <?php
            if (has_nav_menu('more_nav_col_4')) :
              wp_nav_menu(array('theme_location' => 'more_nav_col_4', 'menu_class' => 'more_nav_nav'));
            endif;
          ?>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="navbar-header">
      <a href="#leadform" class="cta-btn orange headerbtn pull-right mobile-headerbtn"> Demo </a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    </div>
    <ul class="nav navbar-nav pull-right hidden-sm hidden-xs">
      <li class=""><a href="#leadform" class="cta-btn orange headerbtn"> Request Demo </a></li>
      <li class="gbb-client-login"><a href="https://video.envysion.com/auth/login.jsp" id="client_login_link"><i class="fa fa-user"></i>&nbsp; Client Login </a></li>
      
    </ul>
    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav', 'depth' => 2));
        endif;
      ?>
    </nav>
  </div>
  
  
  <?php if(is_front_page() && get_field('show_homepage_annoucement','option')): ?>
    <div id="announcement_wrap">
      <div class="container">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <div class="pull-left">
          <?php echo get_field('announcement_message','option'); ?>
          </div>
          <a href="#" id="announcement_close" style="margin-left:10px;" class="pull-right"><i class="fa fa-times"></i></a>
          <a href="<?php echo get_field('announcement_button_link','option'); ?>" class="cta-btn secondary pull-right"><?php echo get_field('announcement_button_text','option'); ?></a>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  <?php endif; ?>
</header>

