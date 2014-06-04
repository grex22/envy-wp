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
            <?php $slides .= '<div class="home_hero_slide item'.$class.'" style="background:url('.$slidebg[url].')" id="frosted-'.$i.'">'; ?>
            <?php $slides .= '<div class="wrap container">'; ?>
            <?php $slides .= '<div class="row">'; ?>
            <?php $slides .= '<div class="col-sm-6 padding_right">'; ?>
            <?php echo "<style>#frosted-".$i.":before{background-image: url(\'data:image/svg+xml,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22UTF-8%22%3F%3E%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20version%3D%221.1%22%20width%3D%221920%22%20height%3D%221120%22%3E%3Cdefs%3E%3Cfilter%20id%3D%22blur%22%3E%3CfeGaussianBlur%20stdDeviation%3D%225%22%2F%3E%3C%2Ffilter%3E%3C%2Fdefs%3E%3Cimage%20xlink%3Ahref%3D%22http%3A%2F%2Fplacekitten.com%2F1920%2F1120%22%20width%3D%221920%22%20height%3D%221120%22%20filter%3D%22url%28%23blur%29%22%2F%3E%3C%2Fsvg%3E\'), url('".$slidebg[url]."');
            }</style>"; ?>
            <?php $slides .= '<h2>'.get_sub_field('slide_headline').'</h2>'; ?>
            <?php $slides .= '<p>'.get_sub_field('slide_blurb').'</p>'; ?>
            <?php $slides .= '</div>'; ?>
            <?php $slides .= '<div class="col-sm-6 text-center">'; ?>
            <?php if($highlightimg) $slides .= '<img src="'.$highlightimg[url].'">'; ?>
            <?php $slides .= '</div>'; ?>
            <?php $slides .= '</div>'; ?>
            <?php $slides .= '</div>'; ?>
            <?php $slides .= '</div>'; ?>
            
            <?php $i++; ?>
          
          <?php endwhile; ?>
          
          <?php 
		  //Watch button
		  $controls .='<li class="watch"><a href="#leadform"><i class="fa fa-play-circle-o visible-xs"></i> Demo<i class="fa fa-play-circle"></i></a></li></ol>'; 
		  //$controls .='<li class="watch no_icon"><a href="'.get_permalink(8).'">Products</a></li></ol>';
		  ?>
          <?php $slides .='</div>'; ?>

        <?php endif; ?>
        <div class="wrap container"><div class="row relative"><div class="col-sm-12 indicators_wrap">
        <?php echo $controls; ?>
        </div></div></div>
        <?php echo $slides; ?>
        
        </div>
        
    </div>
    </div>
  </div>
  <div id="home_diagram">
    <div class="wrap container">
      <?php
	  	$ig_headline = get_field('infographic_main_headline');
		if($ig_headline): ?>
      <div class="row narrow_row">
        <h2><?php echo $ig_headline; ?></h2>
      </div>
      <?php endif; ?>
      <?php $ig_columns = get_field('infographic_columns'); ?>
      <?php if($ig_columns): ?>
      	<div class="row narrow_row">
        <?php $counter = 1; ?>
        <?php while( has_sub_field('infographic_columns') ): ?>
        	<div class="col-md-3 text-center-sm text-center-xs">
              <div class="diagram_halves"><?php echo wp_get_attachment_image(get_sub_field('column_graphic'),'full'); ?></div>
              <?php if($counter != sizeof($ig_columns)): ?>
              <div class="diagram_halves arrow"><img src="assets/img/diagram/arrow.png"></div>
              <?php endif; ?>
              <div class="blurb">
                <h3><?php the_sub_field('column_title'); ?></h3>
                <p><?php the_sub_field('column_text'); ?></p>
              </div>
            </div>
            <?php $counter++; ?>
        <?php endwhile; ?>
        </div>
      <?php endif; ?>
      


    </div>
  </div>
  <div id="home_industry_ticker" class="white_bg_w_arrows">
    <div class="wrap container">
      <?php $ls_headline = get_field('logos_slider_headline'); ?>
      <?php if($ls_headline): ?>
      <h2><?php echo $ls_headline; ?></h2>
      <?php endif; ?>
      <div id="logo_ticker">
        <!--
        <div class="simply-scroll-back simply-scroll-btn simply-scroll-btn-left slidecontrol"><i class="fa fa-chevron-left"></i></div>
        <div class="simply-scroll-forward simply-scroll-btn simply-scroll-btn-right slidecontrol"><i class="fa fa-chevron-right"></i></div>
        -->
        <ul id="scroller_list">
          <?php
		  	$opt_logos = get_field('logos_to_feature');
            $logos = get_posts(array(
              'post_type'=>'customerlogos',
              'showposts'=>-1,
              'meta_key'=>'_thumbnail_id'
            ));
            foreach($opt_logos as $l): ?>
              <li><?php echo get_the_post_thumbnail( $l, 'customer_logo' ); ?></li>
            <?php              
            endforeach;
          ?>
        </ul>
      </div>
    </div>
  </div>
  <div id="home_verticals" class="gray_bg_w_arrows">
    <div class="wrap container">
      <?php $vert_headline = get_field('verticals_icon_area_headline'); ?>
      <?php if($vert_headline): ?>
      <h2><?php echo $vert_headline; ?></h2>
      <?php endif; ?>
      <?php echo output_vertical_circles_func(null); ?>
      <a href="#leadform" class="cta-btn primary">Request a Demo</a>
    </div>
  </div>
  <?php while(has_sub_field("home_page_content")): ?>
    <?php if(get_row_layout() == "callout_blocks"): // layout: Content ?>
      <div class="supporting_content">
        <div class="wrap container">
          <div class="row">
            <?php if(get_sub_field('block_alignment') == "Left"): ?>
              <div class="col-md-5 hidden-sm hidden-xs">
                <?php $imgid = get_sub_field('callout_picture'); ?>
                <?php echo wp_get_attachment_image($imgid,'call_out_block_image',false,array('class'=>"polaroid")); ?>
              </div>
            <?php endif; ?>
            <div class="col-md-7 more_<?php echo strtolower(get_sub_field('block_alignment')); ?>_padding">
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
              <div class="col-md-5 hidden-sm hidden-xs">
                <?php $imgid = get_sub_field('callout_picture'); ?>
                <?php echo wp_get_attachment_image($imgid,'call_out_block_image',false,array('class'=>"polaroid")); ?>
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
  
  
  <?php $footer_headline = get_field('orange_footer_headline'); ?>
  <?php if($footer_headline): ?>
  <div class="message-block orangebg">
    <div class="container">
      <div class="col-md-12">
  		<h2><?php echo $footer_headline; ?></h2>
      </div>
    </div>
  </div>  
  <?php endif; ?>
  
  <?php get_template_part('templates/footer'); ?>
  </div>
</body>
</html>
