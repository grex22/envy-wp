<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
  
  <?php
  
    // check if the flexible content field has rows of data
    if( have_rows('page_content_blocks') ):
     
         // loop through the rows of data
        while ( have_rows('page_content_blocks') ) : the_row();
     
            if( get_row_layout() == 'standard_content' ):

              echo "<div class='contentblock'>";
                the_sub_field('paragraph_content');
              echo "</div>";
     
            elseif( get_row_layout() == 'tabbed_box' ): 
              
              $introblurb = get_sub_field('tab_block_intro');
              
              if( have_rows('tabs') ):
 
                // loop through the rows of data
                  $tabsarray = array();
                  $tabscontent = array();
                  
                  while ( have_rows('tabs') ) : the_row();
               
                      $tabsarray[] = get_sub_field('tab_title');
                      $tabscontent[] = get_sub_field('tab_content');
               
                  endwhile;
                  
                  if($tabsarray && $tabscontent):
                    
                    $i = 1;
                    $tabs_string = "<ul class='nav nav-tabs'>";
                    $tabscontent_string = "<div class='tab-content'>";
                    
                    foreach($tabsarray as $tabtitle):
                      $tabs_string .= '<li';
                      if($i == 1) $tabs_string.=' class="active"';
                      $tabs_string.='><a href="#tab'.$i.'" data-toggle="tab">'.$tabtitle.'</a></li>';
                      $i++;
                    endforeach;
                    $tabs_string .= "</ul>";
                    
                    $i = 1;
                    
                    foreach($tabscontent as $tabcont):
                      $tabscontent_string .= '<div class="tab-pane';
                      if($i == 1) $tabscontent_string.=' active';
                      $tabscontent_string.='" id="tab'.$i.'">'.$tabcont.'</div>';
                      $i++;
                    endforeach;
                    
                    ?>
                  
                    <div class='contentblock'>
                    
                      <?php if($introblurb) echo $introblurb; ?>
                      <?php echo $tabs_string; ?>
                      <?php echo $tabscontent_string; ?>

                    </div>
                    
                    </div>
                    
                    <?php
                    
                  endif;
               
				
			  else :
               
                  // no rows found
               
              endif;
     
            elseif( get_row_layout() == 'headshots_and_bios' ):
				if( have_rows('headshot_row') ):
				echo "<div class='contentblock'>";
				while ( have_rows('headshot_row') ) : the_row();
					$hs_title = get_sub_field('title');
					$hs_content = get_sub_field('content');
					$hs_img = get_sub_field('photo');
					echo "<div class='row headshot_row'>";
					if( $hs_img ):
						echo "<div class='col-md-2 headshot_row_img'><span>".wp_get_attachment_image($hs_img['id'],'headshot_thumbnail')."</span></div>";
						echo "<div class='col-md-10'>";
					else:
						echo "<div class='col-md-12'>";
					endif;
					if( $hs_title ) echo "<h3>".$hs_title."</h3>";
					if( $hs_content ) echo $hs_content;
					echo "</div>";
					echo "</div>";
				endwhile;
				echo "</div>";
				endif;
			elseif( get_row_layout() == 'video_thumbnails_and_blurbs' ):
				if( have_rows('video_row') ):
				echo "<div class='contentblock'>";
				while ( have_rows('video_row') ) : the_row();
					$v_title = get_sub_field('title');
					$v_content = get_sub_field('content');
					$v_service = get_sub_field('video_service');
					$v_player = false;
					switch($v_service):
						case "Youtube":
							$yid = get_sub_field('youtube_id');
							if($yid):
								$v_player = '<iframe width="100%" height="180" src="//www.youtube.com/embed/'.$yid.'?rel=0&modestbranding=1" frameborder="0" allowfullscreen></iframe>';
							endif;
						break;
						case "Wistia":
							$wid = get_sub_field('wistia_id');
							if($wid):
								//  Initiate curl
								$url = "http://fast.wistia.com/oembed?url=".urlencode("http://home.wistia.com/medias/".$wid."?embedType=api&handle=oEmbedVideo&width=220");
								
								$ch = curl_init();
								// Disable SSL verification
								curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
								// Will return the response, if false it print the response
								curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
								// Set the url
								curl_setopt($ch, CURLOPT_URL,$url);
								// Execute
								$result=curl_exec($ch);
								// Closing
								curl_close($ch);
								$data = json_decode($result, true);
								
								$v_player = $data['html'];
								$thumb = $data['thumbnail_url'];
								
								$v_player = '<a href="http://fast.wistia.net/embed/iframe/'.$wid.'?autoPlay=true&controlsVisibleOnLoad=true&playButton=false&playerColor=36ABFF&popover=true&version=v1&videoHeight=360&videoWidth=640" class="wistiathumb wistia-popover[height=360,playerColor=F36F36,width=640]"><img src="'.$thumb.'&image_play_button=1&image_play_button_color=36ABFFe0" alt="" /></a>';
								
							endif;
						break;
					endswitch;
					echo "<div class='row headshot_row'>";
					if( $v_player ):
						echo "<div class='col-md-4'>".$v_player."</div>";
						echo "<div class='col-md-8'>";
					else:
						echo "<div class='col-md-12'>";
					endif;
					if( $v_title ) echo "<h3>".$v_title."</h3>";
					if( $v_content ) echo $v_content;
					echo "</div>";
					echo "</div>";
				endwhile;
				echo "</div>";
				endif;
			endif;
     
        endwhile;
     
	  
	
	else :
     
        // no layouts found.. echo the_content maybe??
     
    endif;
    
  ?>
  
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>