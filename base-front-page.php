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
  
    
      <?php if( get_field('slide') ): ?>
      
          <div id="home_hero_slider" class="carousel fade" data-ride="carousel">
      
          <?php $controls = '<ol class="carousel-indicators home_hero_controls">'; ?>
          <?php $slides .= '<div class="carousel-inner">'; ?>
          <?php $i=0; ?>
         
          <?php while( has_sub_field('slide') ): ?>
            <?php if($i == 0) $class = ' active';
                  else $class = ""; ?>
            <?php $slidebg = get_sub_field('slide_background'); ?>
            <?php $highlightimg = get_sub_field('slide_highlight_image'); ?>
            <?php $controls.='<li data-target="#home_hero_slider" data-slide-to="'.$i.'" class="'.$class.'"><i class="fa '.get_sub_field('slide_button_icon').'"></i>'.get_sub_field('slide_button_text').'</li>'; ?>
            <?php $slides .= '<div class="home_hero_slide item'.$class.'" style="background:url('.$slidebg[url].') bottom center no-repeat">'; ?>
            <?php $slides .= '<div class="wrap container">'; ?>
            <?php $slides .= '<div class="row">'; ?>
            <?php $slides .= '<div class="col-lg-6 padding_right">'; ?>
            <?php $slides .= '<h2>'.get_sub_field('slide_headline').'</h2>'; ?>
            <?php $slides .= '<p>'.get_sub_field('slide_blurb').'</p>'; ?>
            <?php $slides .= '</div>'; ?>
            <?php $slides .= '<div class="col-lg-6 text-center">'; ?>
            <?php if($highlightimg) $slides .= '<img src="'.$highlightimg[url].'">'; ?>
            <?php $slides .= '</div>'; ?>
            <?php $slides .= '</div>'; ?>
            <?php $slides .= '</div>'; ?>
            <?php $slides .= '</div>'; ?>
            
            <?php $i++; ?>
          
          <?php endwhile; ?>
          
          <?php $controls .='<li class="watch">Watch <i class="fa fa-play-circle"></i></li></ol>'; ?>
          <?php $slides .='</div>'; ?>

        <?php endif; ?>
        <div class="wrap container"><div class="row"><div class="col-lg-12 indicators_wrap">
        <?php echo $controls; ?>
        </div></div></div>
        <?php echo $slides; ?>
        
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
