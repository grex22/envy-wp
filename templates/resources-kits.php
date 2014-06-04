<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <a class="share_buttons" id="share_twitter" href="http://twitter.com/share?url=<?php echo urlencode(get_permalink()); ?>&amp;text=<?php echo urlencode(get_the_title()); ?>" target="_blank"><i class="fa fa-twitter"></i> tweet</a>
      <a class="share_buttons" id="share_facebook" href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank"><i class="fa fa-facebook"></i> share</a>
      <a class="share_buttons" id="share_email" href="mailto:?Subject=<?php echo get_site_url(); ?>&Body=<?php echo get_permalink(); ?>" target="_blank"><i class="fa fa-envelope"></i> email</a>
      <br><br>
    </header>
    <div class="entry-content">
      <p><?php the_field('_simple_fields_fieldGroupID_4_fieldID_2_numInSet_0'); ?></p>
      <?php the_content(); ?>

      <?php
      if( have_rows('marketing_kit_files') ):

        while ( have_rows('marketing_kit_files') ) : the_row();
          ?>
          <a href="<?php the_sub_field('file'); ?>" target="_blank" class="cta-btn medium primary"><i class="fa fa-file-pdf-o"></i> <?php the_sub_field('file_name'); ?></a>
          <p><?php the_sub_field('file_description'); ?></p>
          <?php
        endwhile;
       
      endif;
      ?>

      <a href="<?php the_field('_simple_fields_fieldGroupID_3_fieldID_3_numInSet_0'); ?>" target="_blank" class="cta-btn medium primary"><i class="fa fa-file-pdf-o"></i> View PDF</a>
      <br>
      <a class="share_buttons" id="share_twitter" href="http://twitter.com/share?url=<?php echo urlencode(get_permalink()); ?>&amp;text=<?php echo urlencode(get_the_title()); ?>" target="_blank"><i class="fa fa-twitter"></i> tweet</a>
      <a class="share_buttons" id="share_facebook" href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank"><i class="fa fa-facebook"></i> share</a>
      <a class="share_buttons" id="share_email" href="mailto:?Subject=<?php echo get_site_url(); ?>&Body=<?php echo get_permalink(); ?>" target="_blank"><i class="fa fa-envelope"></i> email</a>
      <br><br>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
  </article>
<?php endwhile; ?>