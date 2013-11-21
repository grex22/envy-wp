<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]><div class="alert alert-warning"><?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?></div><![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>
  <div id="main_wrap">
    <div class="page_hero bluebg">
      <div class="wrap container extra_padding">
        <div class="row">
          <div class="col-lg-6 page_hero_content">
            <h1>Envysion Video</h1>
            <p>Seamlessly cloudburst from data center to clouds. Avoid service outages to ensure availability of your deep-dive static applications lorem ipsum dolor quantas wasi.</p>
            <a href="#" class="cta-btn primary">Learn More</a>
          </div>
          <div class="col-lg-6 page_hero_graphic">
            <img src="http://creative.figleaf.com/orcc/prototype/images/home_rotator_test.png">
          </div>
        </div>
      </div>
    </div>
    <div class="wrap container extra_padding" role="document">
      <div class="content row">
        <?php if (roots_display_sidebar()) : ?>
          <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
            <?php include roots_sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
        <div class="main <?php echo roots_main_class(); ?>" role="main">
          <h2>Ad Hoc Motion Search</h2>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Set justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
          <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum.</p>
          
          <h2>Ad Hoc Motion Search</h2>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Set justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
          <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum.</p>
          
          <h2>Ad Hoc Motion Search</h2>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Set justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
          <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum.</p>
          <?php include roots_template_path(); ?>
          
        </div><!-- /.main -->
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    
    <div class="message-block graybg leading_arrow">
      <div class="container">
        <div class="col-lg-12">
          <h2>Envysion's powerful suite of tools can help any business track performance, coach employees, and prevent theft.</h2>
          <button class="cta-btn medium primary"><i class="fa fa-play-circle"></i> Primary Link</button>
          <button class="cta-btn medium secondary"><i class="fa fa-file-text"></i> Secondary Link</button>
        </div>
      </div>
    </div>
    

    <?php get_template_part('templates/footer'); ?>
  </div>
</body>
</html>
