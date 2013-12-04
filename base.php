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
    <?php if(get_field('display_page_header')): ?>
    <div class="page_hero bluebg">
      <div class="wrap container extra_padding">
        <div class="row">
          <div class="col-lg-6 page_hero_content">
            <h1><?php
              if(get_field('hero_headline')) the_field('hero_headline');
              else the_title()
            ?></h1>
            <p><?php the_field('hero_blurb'); ?></p>
            <?php if(get_field('hero_button')): ?>
            <a href="<?php the_field('hero_button_link'); ?>" class="cta-btn primary"><?php the_field('hero_button'); ?></a>
            <?php endif; ?>
          </div>
          <div class="col-lg-6 page_hero_graphic">
            <?php if(get_field('hero_image')): ?>
              <?php echo wp_get_attachment_image(get_field('hero_image'),'full'); ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <div class="wrap container extra_padding" role="document">
      <div class="content row">
        <?php if (roots_display_sidebar()) : ?>
          <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
            <?php include roots_sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
        <div class="main <?php echo roots_main_class(); ?>" role="main">
          
          <?php include roots_template_path(); ?>
          
        </div><!-- /.main -->
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php if(get_field('display_page_footer')): ?>
    <div class="message-block graybg leading_arrow">
      <div class="container">
        <div class="col-lg-12">
          <h2><?php the_field('footer_headline'); ?></h2>
          
          <?php if(get_field('f_primary_button_text')): ?>
          <a href="<?php the_field('f_primary_button_link'); ?>" class="cta-btn medium primary"><i class="fa fa-play-circle"></i> <?php the_field('f_primary_button_text'); ?></a>
          <?php endif; ?>
          <?php if(get_field('f_secondary_button_text')): ?>
          <a href="<?php the_field('f_secondary_button_link'); ?>" class="cta-btn medium secondary"><i class="fa fa-file-text"></i> <?php the_field('f_secondary_button_text'); ?></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <?php endif; ?>
    

    <?php get_template_part('templates/footer'); ?>
  </div>
</body>
</html>
