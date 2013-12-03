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
  
  <div id="home_hero">
    <div class="wrap container">
      <div id="home_hero_slider" class="carousel fade" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#home_hero_slider" data-slide-to="0" class="active"><i class="fa fa-link"></i>Combine</li>
          <li data-target="#home_hero_slider" data-slide-to="1"><i class="fa fa-users"></i>Analyze</li>
          <li data-target="#home_hero_slider" data-slide-to="2"><i class="fa fa-signal"></i>Profit</li>
          <li class="watch">Watch <i class="fa fa-play-circle"></i></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <div class="row">
              <div class="col-lg-6 padding_right">
                <h2>Watch. Learn.<br>Decide.</h2>
                <p>Don't just guess what's going on in your stores, see it happen in real-time. Make more informed decisions and increase profitability, just by pressing 'play'.</p>
              </div>
              <div class="col-lg-6 text-center">
                <img src="assets/img/ipad.png">
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-lg-6 padding_right">
                <h2 class="smaller">Lorem Ipsum Dolor Quantas.</h2>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy sar eirmod tempor invidunt ut labore scing elitr, sed diam nonumy tempor invidunt ut labore.</p>
              </div>
              <div class="col-lg-6 text-center">
                <img src="assets/img/ipad.png">
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-lg-6 padding_right">
                <h2 class="smaller">Ipsum Dolor Isset Quantas.</h2>
                <p>Dolor ipsum qual sit amet, consetetur sadipscing exict sip ta res elitr, sed nonumy tempor invidunt ut labore scing elitr, sed diam nonumy eirmod tempor invidunt ut labore quanta.</p>
              </div>
              <div class="col-lg-6 text-center">
                <img src="assets/img/ipad.png">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="home_diagram">
    <div class="wrap container">
      <div class="row narrow_row">
        <h2>Envysion's powerful suite of tools can help any business track performance, coach employees, and prevent theft.</h2>
      </div>
      <div class="row narrow_row">
        <div class="col-lg-3">
          <div class="diagram_halves"><img src="assets/img/diagram/step1.png"></div>
          <div class="diagram_halves arrow"><img src="assets/img/diagram/arrow.png"></div>
          <div class="blurb">
            <h3>Video + Data</h3>
            <p>Lorem ipsum quanta pas a dolor quantas imigi tantas coure septum lor quantas imigi tantas coure.</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="diagram_halves"><img src="assets/img/diagram/step2.png"></div>
          <div class="diagram_halves arrow"><img src="assets/img/diagram/arrow.png"></div>
          <div class="blurb">
            <h3>Host</h3>
            <p>Lorem quanta pas a ipsum dolor quantas imigi tantas coure septum lor quantas imigi tantas coure.</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="diagram_halves"><img src="assets/img/diagram/step3.png"></div>
          <div class="diagram_halves arrow"><img src="assets/img/diagram/arrow.png"></div>
          <div class="blurb">
            <h3>Analysis</h3>
            <p>Lorem ipsum dolor quantas quanta pas a imigi tantas coure septum lor quantas imigi tantas coure.</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="diagram_halves"><img src="assets/img/diagram/step4.png"></div>
          <div class="blurb">
            <h3>Profit</h3>
            <p>Lorem ipsum dolor quantas imigi tantas coure septum quanta pas a lor quantas imigi tantas coure.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="home_industry_ticker" class="white_bg_w_arrows">
    <div class="wrap container">
      <h2>Industry Leaders Choose Envysion</h2>
      <div id="logo_ticker">
        <div class="simply-scroll-back simply-scroll-btn simply-scroll-btn-left slidecontrol"><i class="fa fa-chevron-left"></i></div>
        <div class="simply-scroll-forward simply-scroll-btn simply-scroll-btn-right slidecontrol"><i class="fa fa-chevron-right"></i></div>
        <ul id="scroller_list">
          <?php
            $logos = get_posts(array(
              'post_type'=>'customerlogos',
              'showposts'=>-1,
              'meta_key'=>'_thumbnail_id'
            ));
            foreach($logos as $l): ?>
              <li><?php echo get_the_post_thumbnail( $l->ID, 'customer_logo' ); ?></li>
            <?php              
            endforeach;
          ?>
        </ul>
      </div>
    </div>
  </div>
  <div id="home_verticals" class="gray_bg_w_arrows">
    <div class="wrap container">
      <h2>Envysion's powerful suite of tools can help any business track performance, coach employees, and prevent theft.</h2>
      <div class="verticals blue"><a href="#"><h3>Retail</h3><i class="fa fa-shopping-cart"></i></a></div>
      <div class="verticals green"><a href="#"><h3>Restaurant</h3><i class="fa fa-cutlery"></i></a></div>
      <div class="verticals warmgray"><a href="#"><h3>Cinema</h3><i class="fa fa-video-camera"></i></a></div>
      <div class="verticals magenta"><a href="#"><h3>Convenience Store</h3><i class="fa fa-truck"></i></a></div>
      <div class="verticals orange"><a href="#"><h3>Hospitality</h3><i class="fa fa-hospital-o"></i></a></div>
    </div>
  </div>
  <?php while(has_sub_field("home_page_content")): ?>
    <?php if(get_row_layout() == "callout_blocks"): // layout: Content ?>
      <div class="supporting_content">
        <div class="wrap container">
          <div class="row">
            <?php if(get_sub_field('block_alignment') == "Left"): ?>
              <div class="col-lg-5 hidden-sm">
                <?php $imgid = get_sub_field('callout_picture'); ?>
                <?php echo wp_get_attachment_image($imgid,'full',false,array('class'=>"polaroid")); ?>
              </div>
            <?php endif; ?>
            <div class="col-lg-7 more_<?php echo strtolower(get_sub_field('block_alignment')); ?>_padding">
              <h2><?php the_sub_field('headline'); ?></h2>
              <p><?php the_sub_field('excerpt'); ?></p>
              <?php if(get_sub_field('primary_button_text')):?>
                <a href="<?php the_sub_field('primary_button_link'); ?>" class="cta-btn medium primary"><i class="fa fa-play-circle"></i> <?php the_sub_field('primary_button_text'); ?></a>
              <?php endif; ?>
              <?php if(get_sub_field('secondary_button_text')):?>
              <a href="<?php the_sub_field('secondary_button_link'); ?>" class="cta-btn medium secondary"><i class="fa fa-file-text"></i> <?php the_sub_field('secondary_button_text'); ?></a>
              <?php endif; ?>
            </div>
            <?php if(get_sub_field('block_alignment') == "Right"): ?>
              <div class="col-lg-5 hidden-sm">
                <?php $imgid = get_sub_field('callout_picture'); ?>
                <?php echo wp_get_attachment_image($imgid,'full',false,array('class'=>"polaroid")); ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    <?php endif; // end if get_row_layout() == callout_blocks ?>
  <?php endwhile;  // end while has_sub_field() ?>  
  
  <div class="wrap container hidden" role="document">
    <div class="content row">
      <div class="main <?php echo roots_main_class(); ?>" role="main">
        <?php include roots_template_path(); ?>
      </div><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->
  
  <div class="message-block orangebg">
    <div class="container">
      <div class="col-lg-12">
        <h2>Envysion's powerful suite of tools can help any business track performance, coach employees, and prevent theft.</h2>
      </div>
    </div>
  </div>
  
  <?php get_template_part('templates/footer'); ?>
  </div>
</body>
</html>
