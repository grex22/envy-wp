<?php //get_template_part('templates/page', 'header'); ?>

<?php if(is_search()): ?>
	<h2>Search Results: <?php the_search_query(); ?></h2>
<?php endif; ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>


<?php

	/*if( get_field('display_featured_posts', 4) ):
		echo "<h6>Featured</h6>";
		echo "<div class='row more_bottom_margin' style='padding-left:15px'>";
		$fposts = array();
		$fposts[] = array(get_field('category_1_post',4),'Loss Prevention');
		$fposts[] = array(get_field('category_2_post',4),'Loss Prevention');
		$fposts[] = array(get_field('category_3_post',4),'Loss Prevention');
		$fposts[] = array(get_field('category_4_post',4),'Loss Prevention');
		
		foreach($fposts as $fpost):
			if($fpost[0] == false) continue;
			$img = get_the_post_thumbnail($fpost[0][0]->ID,'top_featured_thumbnail', array('class'=>'category_featured_img'));
			$title = $fpost[0][0]->post_title;
			$link = get_permalink($fpost[0][0]->ID);
			echo "<div class='col-md-3 category_featured_col'>";
			echo "<div class='category_featured_col_inner'>";
			echo "<div class='category_featured_tag'>In ".$fpost[1]."</div>";
			echo "<a href='".$link."' title='".$title."'>".$img."</a>";


			echo "<a href='".$link."' title='".$title."' class='category_featured_link clamped-4'>".$title."<span class='ellipsis'>&#133;</span><span class='fill'></span></a>";
			echo "<a href='".$link."' title='".$title."' class='cf_read_more'>Read More</a>";
			echo "</div>";
			echo "</div>";
			

		endforeach;
		echo "</div>";
	endif;*/

?>

<?php $is_first_post = true; ?>

<?php while (have_posts()) : the_post();
		if($is_first_post && !is_paged() && !is_search()): ?>
        	<h6><strong>Latest Article</strong></h6>
            <?php
  			$is_first_post = false;?>
			
				<article <?php post_class(); ?>>
                	<?php if(has_post_thumbnail()):?>
                    		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php
							the_post_thumbnail('blog_recent_featured', array('class'=>'recent_featured'));?>
                            </a><?php
						  endif; ?>
                    <div class="recent_excerpt_box">
                        <header>
                          <h2 class="featured_post_title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                          <div class="archive_excerpt">
							  <?php the_excerpt(); ?>
                            </div>
                          <?php get_template_part('templates/entry-meta'); ?>
                          
                          <?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
                        </header>
                        
                     </div>
                  </article>
                
			<?php else: ?>
            	<article <?php post_class(); ?>>
                    <header>
                    	<?php if(has_post_thumbnail()): ?>
                        		<div class=""><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php
								the_post_thumbnail('blog_recent_featured', array('class'=>'recent_featured'));
								echo "</a></div>";
							  endif; ?>
							 
                      <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                      
                    </header>
                    <div class="archive_excerpt">
                      <?php the_excerpt(); ?>
                    </div>
                    <?php get_template_part('templates/entry-meta'); ?>
                    
                    <?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
					</header>
                  </article>
  			<?php endif;
	endwhile; ?>
<?php if(function_exists(wp_pagenavi)) wp_pagenavi(); ?>
<?php if ($wp_query->max_num_pages > 1) : ?>
  <!--<nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>-->
<?php endif; ?>
