<?php while (have_posts()) : the_post(); ?>
  <?php the_content(); ?>
  
  <?php
  
    // check if the flexible content field has rows of data
    if( have_rows('page_content_blocks') ):
     
         // loop through the rows of data
        while ( have_rows('page_content_blocks') ) : the_row();
     
            if( get_row_layout() == 'standard_content' ):
     
              the_sub_field('paragraph_content');
     
            elseif( get_row_layout() == 'tabbed_box' ): 
              if( have_rows('tabs') ):
 
                // loop through the rows of data
                  $tabsarray = array();
                  $tabscontent = array();
                  
                  while ( have_rows('tabs') ) : the_row();
               
                      $tabsarray[] = get_sub_field('tab_title');
                      $tabscontent[] = get_sub_field('tab_content');
               
                  endwhile;
                  
                  print_r($tabsarray);
               
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