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
                      $tabscontent_string.=' id="tab'.$i.'" >'.$tabcont.'</div>';
                      $i++;
                    endforeach;
                    
                    ?>
                  
                    <div class='contentblock'>
                    
                      <?php echo $tabs_string; ?>
                      <?php echo $tabscontent_string; ?>

                    </div>
                    
                    </div>
                    
                    <?php
                    
                  endif;
               
              else :
               
                  // no rows found
               
              endif;
     
            endif;
     
        endwhile;
     
    else :
     
        // no layouts found.. echo the_content maybe??
     
    endif;
    
  ?>
  
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>