<div class="postmeta">Posted on <time class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></time>
in <?php echo get_the_term_list( $post->ID, 'category', '', ', ', '' );?>
 | <p class="byline author vcard inline"><?php echo __('By ', 'roots'); ?>
<?php
global $post;

$use_guest = get_field("use_a_guest_author_for_this_post", $post->ID);

if ( !$use_guest ) { ?>
<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn">
<?php } ?>
<?php echo get_the_author(); ?>
<?php if ( !$use_guest ){ ?>
</a>
<?php } ?>
</p>
</div>

