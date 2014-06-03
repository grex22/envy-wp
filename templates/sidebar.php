<?php dynamic_sidebar('sidebar-primary'); ?>

<?php
global $post;
$currentpage = $post->ID;
if(is_page('7009') || $post->post_parent == '7009' ){ ?>
<h4><a href="<?php echo get_permalink(7009); ?>">Envysion Careers</a></h4>
<ul id="menu-primary-navigation-1" class="menu">
<?php


$the_query = new WP_Query( array( 
	'post_type' => 'page',
	'post_parent' => 7009, 
));

if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo '<li';
		if($post->ID == $currentpage) echo " class='active'";
		echo '><a href="'.get_permalink($post->ID).'">' . get_the_title() . '</a></li>';
	}
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>
</ul>
<?php }