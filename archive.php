<?php get_template_part('templates/page', 'header'); ?>

<?php $resources_post_types = array('casestudy','whitepaper','video','webinars','podcasts','tools','kits','reports','slicks');

if ( is_post_type_archive( $resources_post_types ) ) :
	get_template_part('templates/archive', 'resources');
else :
	get_template_part('index');
endif;

?>