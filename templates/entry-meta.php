<div class="postmeta">Posted on <time class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></time>
in <?php echo get_the_term_list( $post->ID, 'category', '', ', ', '' );?>
 | <p class="byline author vcard inline"><?php echo __('By', 'roots'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_the_author(); ?></a></p>
</div>

