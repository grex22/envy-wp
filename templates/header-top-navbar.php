<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
  <div id="more-nav">
    <div class="container">
      <a href="#" id="close"><i class="fa fa-times-circle"></i></a>
      <div class="row">
        <div class="col-lg-3">
          <h4>Industries</h4>
          <?php
            if (has_nav_menu('more_nav_col_1')) :
              wp_nav_menu(array('theme_location' => 'more_nav_col_1', 'menu_class' => 'more_nav_nav'));
            endif;
          ?>
          <ul class="more_nav_nav">
            <li><a href="#">Links to be determined</a></li>
            <li><a href="#">Verticals</a></li>
            <li><a href="#">Testing link</a></li>
            <li><a href="#">Links coming soon</a></li>
            <li><a href="#">Testing link</a></li>
          </ul>
        </div>
        <div class="col-lg-3">
          <h4>Products</h4>
          <?php
            if (has_nav_menu('more_nav_col_2')) :
              wp_nav_menu(array('theme_location' => 'more_nav_col_2', 'menu_class' => 'more_nav_nav'));
            endif;
          ?>
          <ul class="more_nav_nav">
            <li><a href="#">Links to be determined</a></li>
            <li><a href="#">Verticals</a></li>
            <li><a href="#">Testing link</a></li>
            <li><a href="#">Links coming soon</a></li>
            <li><a href="#">Testing link</a></li>
          </ul>
        </div>
        <div class="col-lg-3">
          <h4>Solutions</h4>
          <?php
            if (has_nav_menu('more_nav_col_3')) :
              wp_nav_menu(array('theme_location' => 'more_nav_col_3', 'menu_class' => 'more_nav_nav'));
            endif;
          ?>
          <ul class="more_nav_nav">
            <li><a href="#">Testing link</a></li>
            <li><a href="#">Verticals</a></li>
            <li><a href="#">Links coming soon</a></li>
            <li><a href="#">Links to be determined</a></li>
            <li><a href="#">Testing link</a></li>
          </ul>
        </div>
        <div class="col-lg-3">
          <h4>Contact us</h4>
          <?php
            if (has_nav_menu('more_nav_col_4')) :
              wp_nav_menu(array('theme_location' => 'more_nav_col_4', 'menu_class' => 'more_nav_nav'));
            endif;
          ?>
          <ul class="more_nav_nav">
            <li><a href="#">Testing link</a></li>
            <li><a href="#">Verticals</a></li>
            <li><a href="#">Testing link</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    </div>
    <ul class="nav navbar-nav pull-right">
      <li class="gbb-client-login"><a href="#"><i class="fa fa-user"></i>&nbsp; Client Login </a></li>
    </ul>
    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav', 'depth' => 2));
        endif;
      ?>
    </nav>
  </div>
  
  
  <?php if(is_front_page()): //this will change! ?>
    <div id="announcement_wrap">
      <div class="container">
        <div class="col-sm-12 col-md-12 col-lg-12">
          Check out our new blog post <a href="#">How to Survive the MVaaS Revolution</a>
          <a href="#" id="announcement_close" class="cta-btn small pull-right"><i class="fa fa-times"></i> Close</a>
          <a href="#" class="cta-btn small primary pull-right"><i class="fa fa-play-circle"></i> Primary Link</a>
        </div>
      </div>
    </div>
  <?php endif; ?>
</header>

