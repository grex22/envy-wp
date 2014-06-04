<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>
    <div class="entry-content">
      <p><?php the_field('_simple_fields_fieldGroupID_4_fieldID_2_numInSet_0'); ?></p>
      <?php the_content(); ?>

      <p>
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
      </p>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
  </article>
<?php endwhile; ?>