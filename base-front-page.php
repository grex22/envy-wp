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
  	  <?php $showsingleslide = false; ?>
      <?php if($showsingleslide): ?>
      
    	<div class="page_hero bluebg" style="background-image:url(http://envysion.com/media/HeroImage_Home.jpg);background-size:cover;background-position:center center;min-height:340px;" >
        <div class="wrap container extra_padding">
          <div class="row">
            <div class="col-xs-6 page_hero_content">
              <h1>Envysion User Summit</h1>
              <p style="margin:19px 0 27px 0px">Tap into valuable insight.<br>Maximize your investment.<br>Change your customer experience.</p>
              
                <a href="<?php echo get_permalink(7339); ?>" class="cta-btn primary">Learn More</a>
                <a href="https://www.regonline.com/builder/site/?eventid=1538763" target="_blank" class="cta-btn">Register Now</a>

            </div>
          </div>
        </div>
      </div>      
      
      <?php else: ?>
      <!-- Temporarily disabled for Summit graphic -->
      <?php if( get_field('slide') ): ?>
      
      	  <?php if(isset($_GET['dem']) && $_GET['dem'] == "videodemo"): ?>
		  <div class="feature" style="height: 400px;width: 100%;overflow: hidden;position: relative;">
            <video id="videodemogb" style="width: 100%;position: relative;top: 50%;-webkit-transform: translateY(-50%);-ms-transform: translateY(-50%);-o-transform: translateY(-50%);transform: translateY(-50%);z-index: 1;min-width: 100%;min-height: 100%;width: auto;height: auto;" autoplay="" loop="loop" poster="<?php echo bloginfo('stylesheet_directory'); ?>/assets/img/video.jpg" muted>
              <source src="<?php echo bloginfo('stylesheet_directory'); ?>/assets/img/envysion.mp4" type="video/mp4">
              <img src="<?php echo bloginfo('stylesheet_directory'); ?>/assets/img/video.jpg" width="100%" height="100%" alt="">
            </video>
            <div class="jumbotron" style="height: 100%;background: transparent url(../../assets/img/raster-20.png) top left repeat;width: 100%;z-index: 2;position: absolute;text-align: center;color: white;top: 0;">
              
              <div class="container" style="text-shadow: 0 0 6px black;">
                <h1 style="color:white">Actionable Insights</h1>
                <p style="color:white;color: white;font-size: 25px;margin: 28px 70px;">A unique approach to video intelligence that creates "game film" from your video, audio and data combined with innovative analytics, auditing and business intelligence to maximize insights.</p>
                <a href="//fast.wistia.net/embed/iframe/z1iuy28egs?popover=true" class="wistia-popover[height=450,playerColor=7b796a,width=800] btn btn-primary" style="font-size: 25px;padding: 10px 30px;">Request a Demo</a>
                <script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/popover-v1.js"></script>
              </div>
            </div>
          </div>

          <?php elseif(isset($_GET['dem']) && $_GET['dem'] == "newslider123"): ?>
          
              <div id="home_hero_slider" class="carousel fade" data-ride="carousel">
          
              <?php $controls = '<ol class="carousel-indicators" style="margin-bottom: 0;line-height: 0;bottom: -17px;">'; ?>
              <?php $slides .= '<div class="carousel-inner">'; ?>
              <?php $i=0; ?>
             
              <?php while( has_sub_field('slide') ): ?>
                <?php if($i == 0) $class = ' active';
                      else $class = ""; ?>
                <?php $slidebg = get_sub_field('slide_background'); ?>
                <?php $highlightimg = get_sub_field('slide_highlight_image'); ?>
                <?php $controls.='<li data-target="#home_hero_slider" data-slide-to="'.$i.'" class="slidepips '.$class.'"></li>'; ?>
                <?php $slides .= '<div class="home_hero_slide item'.$class.'" style="background:url('.$slidebg[url].')" id="frosted-'.$i.'">'; ?>
                <?php $slides .= '<div class="wrap container">'; ?>
                <?php $slides .= '<div class="row">'; ?>
                <?php $slides .= '<div class="col-sm-6 padding_right">'; ?>
                <?php echo "<style>#frosted-".$i.":before{background-image: url('data:image/svg+xml,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22UTF-8%22%3F%3E%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20version%3D%221.1%22%20width%3D%221920%22%20height%3D%221120%22%3E%3Cdefs%3E%3Cfilter%20id%3D%22blur%22%3E%3CfeGaussianBlur%20stdDeviation%3D%225%22%2F%3E%3C%2Ffilter%3E%3C%2Fdefs%3E%3Cimage%20xlink%3Ahref%3D%22".urlencode($slidebg[url])."%22%20width%3D%221920%22%20height%3D%221120%22%20filter%3D%22url%28%23blur%29%22%2F%3E%3C%2Fsvg%3E'), url('".$slidebg[url]."');
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
			  $controls .= "</ol>";
              $slides .='</div>';
			  ?>
    
            
            <div class="wrap hero_controls_wrap">
            	<div class="container">
                	<div class="row relative">
                    	<div class="col-sm-12">
            				<?php echo $controls; ?>
            			</div>
                    </div>
                </div>
            </div>
            <div class="wrap hero_buttons_wrap">
            	<div class="container">
                	<div class="row relative">
                    	<div class="col-xs-12">
                        	<a href="//fast.wistia.net/embed/iframe/z1iuy28egs?popover=true" class="video_play_button wistia-popover[height=450,playerColor=7b796a,width=800]"><img src="/assets/img/video-button.png"></a>
              				<a href="#leadform" class="hero_button"><span class="hide-on-xs">Request </span>Demo</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo $slides; ?>
            <script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/popover-v1.js"></script>
            
            </div>
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
		  <?php else: ?>
      
          <div id="home_hero_slider" class="carousel fade" data-ride="carousel">
      
          <?php $controls = '<ol class="carousel-indicators gbb_hero_controls">'; ?>
          <?php $slides .= '<div class="carousel-inner">'; ?>
          <?php $i=0; ?>
         
          <?php while( has_sub_field('slide') ): ?>
            <?php if($i == 0) $class = ' active';
                  else $class = ""; ?>
            <?php $slidebg = get_sub_field('slide_background'); ?>
            <?php $highlightimg = get_sub_field('slide_highlight_image'); ?>
            <?php $controls.='<li data-target="#home_hero_slider" data-slide-to="'.$i.'" class="slidepips '.$class.'"></li>'; ?>
            <?php $slides .= '<div class="home_hero_slide item'.$class.'" style="background:url('.$slidebg[url].')" id="frosted-'.$i.'">'; ?>
            <?php $slides .= '<div class="wrap container">'; ?>
            <?php $slides .= '<div class="row">'; ?>
            <?php $slides .= '<div class="col-sm-6 padding_right">'; ?>
            <?php echo "<style>#frosted-".$i.":before{background-image: url('data:image/svg+xml,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22UTF-8%22%3F%3E%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20version%3D%221.1%22%20width%3D%221920%22%20height%3D%221120%22%3E%3Cdefs%3E%3Cfilter%20id%3D%22blur%22%3E%3CfeGaussianBlur%20stdDeviation%3D%225%22%2F%3E%3C%2Ffilter%3E%3C%2Fdefs%3E%3Cimage%20xlink%3Ahref%3D%22".urlencode($slidebg[url])."%22%20width%3D%221920%22%20height%3D%221120%22%20filter%3D%22url%28%23blur%29%22%2F%3E%3C%2Fsvg%3E'), url('".$slidebg[url]."');
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
		  $controls .='<li class="watch video_watch_btn pull-left"><a href="//fast.wistia.net/embed/iframe/z1iuy28egs?popover=true" class="wistia-popover[height=450,playerColor=7b796a,width=800]"><img src="/assets/img/video-button.png"></a></li>'; 
		  $controls .= '<li class="watch requestdemo no_icon pull-right"><a href="#leadform"><span class="hide-on-xs">Request </span>Demo</a></li></ol>';
		  //$controls .='<li class="watch no_icon"><a href="'.get_permalink(8).'">Products</a></li></ol>';
		  ?>
          <?php $slides .='</div>'; ?>

        
        <div class="wrap container"><div class="row relative"><div class="col-sm-12 indicators_wrap">
        <?php echo $controls; ?>
        </div></div></div>
        <?php echo $slides; ?>
        <script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/popover-v1.js"></script>
        
        </div>
        <?php endif; ?>
        <?php endif; ?>
        
    <?php endif; ?>
        
    </div>
    </div>
  </div>
  <?php $hidehomepagecontent = true; ?>
  <?php if($hidehomepagecontent != true): ?>
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
  <?php
	$args = array( 'numberposts' => '1', 'post_status' => 'publish' );
	$recent_posts = wp_get_recent_posts( $args );
	if($recent_posts):
		
		$rid = $recent_posts[0]['ID'];
		$rtitle = $recent_posts[0]['post_title'];
		$fulltext = $recent_posts[0]['post_content'];
		$fulltext = preg_replace('/\[stextbox[^\]]*\](.*)\[\/stextbox\]/', '$1', $fulltext);
		$rexcerpt = wp_trim_words($fulltext,35,'...');
		$post_thumb = wp_get_attachment_image(get_post_thumbnail_id($rid),'call_out_block_image',false,array('class'=>'polaroid'));
		
	?>
		<div class="supporting_content">
        	<div class="wrap container">
            	<div class="row">
                  <div class="col-md-5 hidden-sm hidden-xs">
                    <?php echo $post_thumb; ?>
                  </div>
                <div class="col-md-7 more_right_padding">
                  <h6>FROM THE BLOG:</h6>
                  <h2><a href="<?php echo get_permalink($rid); ?>" title=""><?php echo $rtitle; ?></a></h2>
                  <p><?php echo $rexcerpt; ?></p>
                    <a href="<?php echo get_permalink($rid); ?>" title="" class="cta-btn medium primary"><i class="fa fa-play-circle"></i> Read More&hellip;</a>
                    <a href="<?php echo home_url()."/blog"; ?>" class="cta-btn medium secondary"><i class="fa fa-play-circle"></i> The Envysion Blog</a>
                </div>
              </div>
            </div>
          </div>
	<?php
	endif;
	
  ?>  
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
  <?php endif; // END hidehomepagecontent ?>
  
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
