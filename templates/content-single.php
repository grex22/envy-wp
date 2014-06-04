<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
		<?php $author = get_userdata( get_query_var('author') );?>
        
        <?php $author_image = get_user_meta($author, 'author_image', true); ?>
        
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php if($post->post_type == 'post') get_template_part('templates/entry-meta'); ?>
      
      <?php if(has_post_thumbnail()):?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php
            the_post_thumbnail('blog_recent_featured', array('class'=>'more_bottom_margin'));?>
            </a>
	  <?php endif; ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
      <?php

           
	  	if($post->post_type == 'post'):
			$hide = get_field('hide_author_information');
			if($hide){
				//nothing! We're hiding!	
			}else{
				//First, let's figure out if this is supposed to be a guest post
				$is_guest = get_field('use_a_guest_author_for_this_post');
				
				if($is_guest){
					//Guest post: let's use the ACF fields designated for this post
					$auth_name = get_field('guest_author_name');
					$auth_bio = get_field('guest_author_bio');
					$auth_pic = get_field('guest_author_picture');
					if($auth_pic) $auth_pic = wp_get_attachment_image($auth_pic['id'],'yarpp_thumbnail');
					$company_url = get_field('company_url');
					$linkedin_url = get_field('linkedin_url');
					$facebook_url = get_field('facebook_url');
					$twitter_url = get_field('twitter_url');
					$google_url = get_field('google_url');
				}else{
					//Not a guest! Let's use the author's standard metadata
					$auth_name = get_the_author();
					$auth_bio = wpautop(get_the_author_meta('description'));
					$auth_pic = get_avatar(get_the_author_meta( 'ID' ));
					$company_url = get_the_author_meta('user_url');
					$linkedin_url = get_the_author_meta('linkedin');
					$facebook_url = get_the_author_meta('facebook');
					$twitter_url = "http://twitter.com/".get_the_author_meta('twitter');
					$google_url = get_the_author_meta('googleplus');
				}
				
				//Cool! Let's spit out the HTML for our biography box ?>
				
				<div class="bio_box_wrap">
					<div class="bio_box_pic"><?php if($auth_pic) echo $auth_pic; ?></div>
					<div class="bio_box_text">
						<h3>About <?php echo $auth_name; ?> </h3>
						<?php echo $auth_bio; ?>
						<div class="bio_box_contact_links">
						<?php if($company_url){?><a href="<?php echo $company_url; ?>" target="_self" title="<?php echo $auth_name; ?> On The Web"><i class="fa fa-globe"></i></a><?php } ?>
						<?php if($twitter_url){?><a href="<?php echo $twitter_url; ?>" target="_self" title="<?php echo $auth_name; ?> On Twitter"><i class="fa fa-twitter-square"></i></a><?php } ?>
						<?php if($linkedin_url){?><a href="<?php echo $linkedin_url; ?>" target="_self" title="<?php echo $auth_name; ?> On LinkedIn"><i class="fa fa-linkedin-square"></i></a><?php } ?>
						<?php if($google_url){?><a href="<?php echo $google_url; ?>" target="_self" title="<?php echo $auth_name; ?> On Google+"><i class="fa fa-google-plus-square"></i></a><?php } ?>
						<?php if($facebook_url){?><a href="<?php echo $facebook_url; ?>" target="_self" title="<?php echo $auth_name; ?> On Facebook"><i class="fa fa-facebook-square"></i></a><?php } ?>
						<?php if(!$is_guest){?>
							<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" target="_self" title="More Posts By <?php echo $auth_name; ?>"><i class="fa fa-file-text"></i></a>
						<?php } ?>
						</div>
					 </div>
				</div>
			<?php
        	}
		endif;
		?>
      

    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php //comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>