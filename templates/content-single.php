<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
		<?php $author = get_userdata( get_query_var('author') );?>
        
        <?php $author_image = get_user_meta($author, 'author_image', true); ?>
        
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
      <a class="share_buttons" id="share_twitter" href="http://twitter.com/share?url=<?php echo urlencode(get_permalink()); ?>&amp;text=<?php echo urlencode(get_the_title()); ?>" target="_blank"><i class="fa fa-twitter"></i> tweet</a>
      <a class="share_buttons" id="share_facebook" href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank"><i class="fa fa-facebook"></i> share</a>
      <a class="share_buttons" id="share_email" href="mailto:?Subject=<?php echo get_site_url(); ?>&Body=<?php echo get_permalink(); ?>" target="_blank"><i class="fa fa-envelope"></i> email</a>
      <br><br>
      <?php if(has_post_thumbnail()):?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php
            the_post_thumbnail('blog_recent_featured', array('class'=>'more_bottom_margin'));?>
            </a>
	  <?php endif; ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
      <!--
      <?php if(get_the_author_meta('user_description')): ?>
      	<div class="author_bio">
        	
        	<?php if($author_image!=="" && (get_field('hide_author_information') != true)): ?>
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn">
                <?php the_author_image_size(80,80); ?></a>
            <?php endif; ?>
            <h6>About the Author</h6>
            <?php the_author_meta('user_description'); ?>
            <div style="clear:both"></div>
        </div>
      <?php endif; ?>
      -->
      <br>
      <a class="share_buttons" id="share_twitter" href="http://twitter.com/share?url=<?php echo urlencode(get_permalink()); ?>&amp;text=<?php echo urlencode(get_the_title()); ?>" target="_blank"><i class="fa fa-twitter"></i> tweet</a>
      <a class="share_buttons" id="share_facebook" href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>" target="_blank"><i class="fa fa-facebook"></i> share</a>
      <a class="share_buttons" id="share_email" href="mailto:?Subject=<?php echo get_site_url(); ?>&Body=<?php echo get_permalink(); ?>" target="_blank"><i class="fa fa-envelope"></i> email</a>
      <br><br>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php //comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>