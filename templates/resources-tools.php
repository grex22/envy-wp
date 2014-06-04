<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>
    <div class="entry-content">
      <p><?php the_field('_simple_fields_fieldGroupID_4_fieldID_2_numInSet_0'); ?></p>
      <?php the_content(); ?>

      <br />
      <br />
      <a href="<?php the_field('_simple_fields_fieldGroupID_3_fieldID_3_numInSet_0'); ?>" target="_blank" class="cta-btn medium primary"><i class="fa fa-file-pdf-o"></i> View PDF</a>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
  </article>
<?php endwhile; ?>