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
    <?php //load up our variables:
          $herostyle = get_field('hero_style');
          $headline = get_field('hero_headline');
          $blurb = get_field('hero_blurb');
          $button_p_text = get_field('hero_button');
          $button_p_link = get_field('hero_button_link');
          $button_s_text = get_field('hero_button_secondary');
          $button_s_link = get_field('hero_button_secondary_link');
          $bgimg = get_field('hero_image_background');
          $highlightimg = get_field('hero_image');
          $bgcolor = get_field('hero_background_color');
          
          if($herostyle == 'split'):
    ?>
    
      <div class="page_hero bluebg">
        <div class="wrap container extra_padding">
          <div class="row">
            <div class="col-lg-6 page_hero_content">
              <h1><?php
                if($headline) echo $headline;
                else the_title()
              ?></h1>
              <?php if($blurb): ?><p><?php echo $blurb; ?></p><?php endif; ?>
              <?php if($button_p_text): ?>
                <a href="<?php echo $button_p_link; ?>" class="cta-btn primary"><?php echo $button_p_text; ?></a>
              <?php endif; ?>
              <?php if($button_s_text): ?>
                <a href="<?php echo $button_s_link; ?>" class="cta-btn"><?php echo $button_s_text; ?></a>
              <?php endif; ?>
            </div>
            <div class="col-lg-6 page_hero_graphic">
              <?php if($highlightimg): ?>
                <?php echo wp_get_attachment_image($highlightimg,'full'); ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <?php elseif($herostyle == 'center'): ?>
      
      <div class="page_hero bluebg" style="background:url('<?php $bgimgsrc = wp_get_attachment_image_src($bgimg, 'full'); echo $bgimgsrc[0]; ?>');background-position:cover">
        <?php $bgcolor_opacity = hex2rgba( $bgcolor, 0.8); ?>
        <div style="background-color:<?php echo $bgcolor_opacity; ?>">
          <style>
            .page_hero.bluebg:after {
              border-color: <?php echo $bgcolor; ?> transparent;
            }
          </style>
          <div class="wrap container extra_padding">
            <div class="row">
              <div class="col-lg-12 page_hero_content text-center">
                <h1><?php
                  if($headline) echo $headline;
                  else the_title()
                ?></h1>
                <?php if($blurb): ?><p><?php echo $blurb; ?></p><?php endif; ?>
                <?php if($button_p_text): ?>
                  <a href="<?php echo $button_p_link; ?>" class="cta-btn primary"><?php echo $button_p_text; ?></a>
                <?php endif; ?>
                <?php if($button_s_text): ?>
                  <a href="<?php echo $button_s_link; ?>" class="cta-btn"><?php echo $button_s_text; ?></a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <?php endif; ?>
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
