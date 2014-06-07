<?php

$resources_post_types = array('casestudy','whitepaper','video','webinars','podcasts','tools','kits','reports','slicks');
$cpt = get_post_type();

//post_type_archive_title(  );
?>
<article <?php post_class(); ?>>
<?php while (have_posts()) : the_post(); ?>
	
  
    <div class="resource_row">
      
      <?php
	  	switch ($cpt):
			case "whitepaper":
				?>
                <a href="<?php the_field( 'white_paper_upload' ); ?>" target="_blank" class="resource_title"><?php the_title(); ?></a>
                <a href="<?php the_field( 'white_paper_upload' ); ?>" target="_blank" class="cta-btn small secondary pull-right"><i class="fa fa-file-pdf-o"></i> PDF</a>
                <?php if(get_field( '_simple_fields_fieldGroupID_29_fieldID_1_numInSet_0') ): ?>
                	<p><?php echo get_field( '_simple_fields_fieldGroupID_29_fieldID_1_numInSet_0' ); ?></p>
                <?php endif; ?>
                <?php
				break;
			case "casestudy":
				?>
                <a href="<?php the_field( 'case_study_pdf' ); ?>" target="_blank" class="resource_title"><?php the_title(); ?></a>
                <a href="<?php the_field( 'case_study_pdf' ); ?>" target="_blank" class="cta-btn small secondary pull-right"><i class="fa fa-file-pdf-o"></i> PDF</a>
                <?php if(get_field( '_simple_fields_fieldGroupID_29_fieldID_1_numInSet_0') ): ?>
                	<p><?php the_field( '_simple_fields_fieldGroupID_29_fieldID_1_numInSet_0'); ?></p>
                <?php endif; ?>
                
                <?php
				break;
			case "reports":
				?>
                <a href="<?php the_field( '_simple_fields_fieldGroupID_3_fieldID_3_numInSet_0' ); ?>" target="_blank" class="resource_title"><?php the_title(); ?></a>
                <a href="<?php the_field( '_simple_fields_fieldGroupID_3_fieldID_3_numInSet_0' ); ?>" target="_blank" class="cta-btn small secondary pull-right"><i class="fa fa-file-pdf-o"></i> PDF</a>
                <?php if(get_field( '_simple_fields_fieldGroupID_29_fieldID_1_numInSet_0') ): ?>
                	<p><?php the_field( '_simple_fields_fieldGroupID_29_fieldID_1_numInSet_0'); ?></p>
                <?php endif; ?>
				<?php
				break;	
			case "slicks":
				?>
                <a href="<?php the_field( '_simple_fields_fieldGroupID_3_fieldID_3_numInSet_0' ); ?>" target="_blank" class="resource_title"><?php the_title(); ?></a>
                <a href="<?php the_field( '_simple_fields_fieldGroupID_3_fieldID_3_numInSet_0' ); ?>" target="_blank" class="cta-btn small secondary pull-right"><i class="fa fa-file-pdf-o"></i> PDF</a>
                <?php if(get_field( '_simple_fields_fieldGroupID_29_fieldID_1_numInSet_0') ): ?>
                	<p><?php the_field( '_simple_fields_fieldGroupID_29_fieldID_1_numInSet_0'); ?></p>
                <?php endif; ?>
				<?php
				break;
			default:
				?>
                <a href="<?php the_permalink(); ?>" class="resource_title"><?php the_title(); ?></a>
                <a href="<?php the_permalink(); ?>" class="cta-btn small secondary pull-right"><i class="fa fa-play-circle"></i> View</a>
                <?php if(get_field( '_simple_fields_fieldGroupID_29_fieldID_1_numInSet_0') ): ?>
                	<p><?php the_field( '_simple_fields_fieldGroupID_29_fieldID_1_numInSet_0'); ?></p>
                <?php endif; ?>
                <?php
				break;
		endswitch;
		?>
      
    </div>
  
<?php endwhile; ?>
<?php if(function_exists(wp_pagenavi)) wp_pagenavi(); ?>
<?php if ($wp_query->max_num_pages > 1) : ?>
  <!--<nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>-->
<?php endif; ?>

</article>