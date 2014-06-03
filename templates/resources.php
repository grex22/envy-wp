<?php

if( is_tax('industry') ) :

  $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
  $tax_term_slug = $term->slug;

else :

  $tax_term_slug = false;
  while (have_posts()) : the_post();
    the_content();
  endwhile;

endif;

?>

<h2><i class="fa fa-file fa-fw"></i> White Papers <a class="pull-right" href="<?php echo home_url('/whitepaper/'); ?>">view all</a></h2>
<?php
  $whitepapers = get_resource( 'whitepaper', $tax_term_slug );
  foreach ( $whitepapers as $whitepaper )
  {
    ?>
    <div>
      <a href="<?php the_field( 'white_paper_upload', $whitepaper->ID ); ?>" target="_blank"><?php echo $whitepaper->post_title; ?></a>
      <a href="<?php the_field( 'white_paper_upload', $whitepaper->ID ); ?>" target="_blank" class="medium secondary pull-right"><i class="fa fa-external-link-square"></i> View</a>
      <p><?php the_field( '_simple_fields_fieldGroupID_29_fieldID_1_numInSet_0', $whitepaper->ID ); ?></p>
    </div>
    <?php
  }
?>

<h2><i class="fa fa-book fa-fw"></i> Case Studies <a class="pull-right" href="<?php echo home_url('/casestudy/'); ?>">view all</a></h2>
<?php
  $casestudies = get_resource( 'casestudy', $tax_term_slug );
  foreach ( $casestudies as $casestudy )
  {
    ?>
    <div>
      <a href="<?php the_field( 'case_study_pdf', $casestudy->ID ); ?>" target="_blank"><?php echo $casestudy->post_title; ?></a>
      <a href="<?php the_field( 'case_study_pdf', $casestudy->ID ); ?>" target="_blank" class="medium secondary pull-right"><i class="fa fa-external-link-square"></i> View</a>
      <p><?php the_field( '_simple_fields_fieldGroupID_29_fieldID_1_numInSet_0', $casestudy->ID); ?></p>
    </div>
    <?php
  }
?>

<h2><i class="fa fa-file-video-o fa-fw"></i> Videos <a class="pull-right" href="<?php echo home_url('/video/'); ?>">view all</a></h2>
<?php
  $videos = get_resource( 'video', $tax_term_slug );
  foreach ( $videos as $video )
  {
    ?>
    <div>
      <a href="<?php echo post_permalink( $video->ID ); ?>"><?php echo $video->post_title; ?></a>
      <a href="<?php echo post_permalink( $video->ID ); ?>" class="medium secondary pull-right"><i class="fa fa-files-o"></i> View</a>
      <p><?php the_field( '_simple_fields_fieldGroupID_29_fieldID_1_numInSet_0', $video->ID); ?></p>
    </div>
    <?php
  }
?>

<h2><i class="fa fa-desktop fa-fw"></i> Webinars <a class="pull-right" href="<?php echo home_url('/webinars/'); ?>">view all</a></h2>
<?php
  $webinars = get_resource( 'webinars', $tax_term_slug );
  foreach ( $webinars as $webinar )
  {
    ?>
    <div>
      <a href="<?php echo post_permalink( $webinar->ID ); ?>"><?php echo $webinar->post_title; ?></a>
      <a href="<?php echo post_permalink( $webinar->ID ); ?>" class="medium secondary pull-right"><i class="fa fa-play-circle-o"></i> View</a>
      <p><?php the_field( '_simple_fields_fieldGroupID_29_fieldID_1_numInSet_0', $webinar->ID); ?></p>
    </div>
    <?php
  }
?>

<h2><i class="fa fa-file-audio-o fa-fw"></i> Podcasts <a class="pull-right" href="<?php echo home_url('/podcasts/'); ?>">view all</a></h2>
<?php
  $podcasts = get_resource( 'podcasts', $tax_term_slug );
  foreach ( $podcasts as $podcast )
  {
    ?>
    <div>
      <a href="<?php echo post_permalink( $podcast->ID ); ?>"><?php echo $podcast->post_title; ?></a>
      <a href="<?php echo post_permalink( $podcast->ID ); ?>" class="medium secondary pull-right"><i class="fa fa-music"></i> Listen</a>
      <p><?php the_field( '_simple_fields_fieldGroupID_29_fieldID_1_numInSet_0', $podcast->ID); ?></p>
    </div>
    <?php
  }
?>

<h2><i class="fa fa-wrench fa-fw"></i> Tools <a class="pull-right" href="<?php echo home_url('/tools/'); ?>">view all</a></h2>
<?php
  $tools = get_resource( 'tools', $tax_term_slug );
  foreach ( $tools as $tool )
  {
    ?>
    <div>
      <a href="<?php echo post_permalink( $tool->ID ); ?>"><?php echo $tool->post_title; ?></a>
      <a href="<?php echo post_permalink( $tool->ID ); ?>" class="medium secondary pull-right"><i class="fa fa-files-o"></i> View</a>
      <p><?php the_field( '_simple_fields_fieldGroupID_29_fieldID_1_numInSet_0', $tool->ID); ?></p>
    </div>
    <?php
  }
?>

<h2><i class="fa fa-briefcase fa-fw"></i> Kits <a class="pull-right" href="<?php echo home_url('/kits/'); ?>">view all</a></h2>
<?php
  $kits = get_resource( 'kits', $tax_term_slug );
  foreach ( $kits as $kit )
  {
    ?>
    <div>
      <a href="<?php echo post_permalink( $kit->ID ); ?>"><?php echo $kit->post_title; ?></a>
      <a href="<?php echo post_permalink( $kit->ID ); ?>" class="medium secondary pull-right"><i class="fa fa-files-o"></i> View</a>
      <p><?php the_field( '_simple_fields_fieldGroupID_29_fieldID_1_numInSet_0', $kit->ID); ?></p>
    </div>
    <?php
  }
?>

<h2><i class="fa fa-file-text fa-fw"></i> Reports <a class="pull-right" href="<?php echo home_url('/reports/'); ?>">view all</a></h2>
<?php
  $reports = get_resource( 'reports', $tax_term_slug );
  foreach ( $reports as $report )
  {
    ?>
    <div>
      <a href="<?php echo post_permalink( $report->ID ); ?>"><?php echo $report->post_title; ?></a>
      <a href="<?php echo post_permalink( $report->ID ); ?>" class="medium secondary pull-right"><i class="fa fa-files-o"></i> View</a>
      <p><?php the_field( '_simple_fields_fieldGroupID_29_fieldID_1_numInSet_0', $report->ID); ?></p>
    </div>
    <?php
  }
?>

<h2><i class="fa fa-file-image-o fa-fw"></i> Marketing Slicks <a class="pull-right" href="<?php echo home_url('/slicks/'); ?>">view all</a></h2>
<?php
  $slicks = get_resource( 'slicks', $tax_term_slug );
  foreach ( $slicks as $slick )
  {
    ?>
    <div>
      <a href="<?php echo post_permalink( $slick->ID ); ?>"><?php echo $slick->post_title; ?></a>
      <a href="<?php echo post_permalink( $slick->ID ); ?>" class="medium secondary pull-right"><i class="fa fa-files-o"></i> View</a>
      <p><?php the_field( '_simple_fields_fieldGroupID_29_fieldID_1_numInSet_0', $slick->ID); ?></p>
    </div>
    <?php
  }
?>