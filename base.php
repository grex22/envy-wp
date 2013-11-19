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
    <div class="page_hero graybg">
      <div class="wrap container extra_padding">
        <div class="row">
          <div class="col-lg-6 page_hero_content">
            <h1>Envysion Video</h1>
            <p>Seamlessly cloudburst from data center to clouds. Avoid service outages to ensure availability of your deep-dive static applications lorem ipsum dolor quantas wasi.</p>
            <a href="#" class="cta-btn primary">Learn More</a>
          </div>
          <div class="col-lg-6 page_hero_graphic">
            ff
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
          <h2 class="section_header">Ad Hoc Motion Search</h2>
          <?php include roots_template_path(); ?>
        </div><!-- /.main -->
      </div><!-- /.content -->
    </div><!-- /.wrap -->

    <?php get_template_part('templates/footer'); ?>
  </div>
</body>
</html>
