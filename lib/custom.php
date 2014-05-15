<?php
/**
 * Custom functions
 */
 
function output_vertical_circles_func($atts){
	extract( shortcode_atts( array(
		'size' => 'small',
	), $atts ) );
	if(get_field('industry_icons','option')):
		$return = '<div class="text-center more_bottom_margin">';
		while( has_sub_field('industry_icons', 'option') ):
		$return .= '<div class="verticals '.get_sub_field('background_color');
		$return .= " ".$size;
		$return .= '"><a href="'.get_sub_field('link').'"><h3 class="verticalstitle">'.get_sub_field('industry_name').'</h3><i class="fa '.get_sub_field('industry_icon').'"></i></a></div>';
		endwhile;
		$return .= "</div>";
		return $return;
	endif;
}

add_shortcode( 'verticalicons', 'output_vertical_circles_func' );
 
/* Convert hexdec color string to rgb(a) string */
function hex2rgba($color, $opacity = false) {

	$default = 'rgb(0,0,0)';

	//Return default if no color provided
	if(empty($color))
          return $default; 

	//Sanitize $color if "#" is provided 
        if ($color[0] == '#' ) {
        	$color = substr( $color, 1 );
        }

        //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
                $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
                $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
                return $default;
        }

        //Convert hexadec to rgb
        $rgb =  array_map('hexdec', $hex);

        //Check if opacity is set(rgba or rgb)
        if($opacity){
        	if(abs($opacity) > 1)
        		$opacity = 1.0;
        	$output = 'rgba('.implode(",",$rgb).','.$opacity.')';
        } else {
        	$output = 'rgb('.implode(",",$rgb).')';
        }

        //Return rgb(a) color string
        return $output;
}
 
register_nav_menus(array(
  'footer_sitemap_navigation' => __('Footer Column 2', 'roots'),
));

register_nav_menus(array(
  'footer_industries_navigation' => __('Footer Column 3', 'roots'),
));

register_nav_menus(array(
  'footer_column_4' => __('Footer Column 4', 'roots'),
));


register_nav_menus(array(
  'more_nav_col_1' => __('More Nav Column 1', 'roots'),
));

register_nav_menus(array(
  'more_nav_col_2' => __('More Nav Column 2', 'roots'),
));

register_nav_menus(array(
  'more_nav_col_3' => __('More Nav Column 3', 'roots'),
));

register_nav_menus(array(
  'more_nav_col_4' => __('More Nav Column 4', 'roots'),
));

function envy_register_post_types() {
  $labels = array(
    'name'               => 'Customer Logos',
    'singular_name'      => 'Customer Logo',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Customer Logo',
    'edit_item'          => 'Edit Customer Logo',
    'new_item'           => 'New Customer Logo',
    'all_items'          => 'All Customer Logos',
    'view_item'          => 'View Customer Logo',
    'search_items'       => 'Search Customer Logos',
    'not_found'          => 'No Customer Logos found',
    'not_found_in_trash' => 'No Customer Logos found in Trash',
    'parent_item_colon'  => '',
    'menu_name'          => 'Customer Logos'
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'customerlogos' ),
    'capability_type'    => 'page',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title', 'thumbnail' )
  );

  register_post_type( 'customerlogos', $args );
}
add_action( 'init', 'envy_register_post_types' );

add_action( 'init', 'register_taxonomy_customer_industry' );

function register_taxonomy_customer_industry() {

    $labels = array( 
        'name' => _x( 'Customer Industries', 'customer_industry' ),
        'singular_name' => _x( 'Customer Industry', 'customer_industry' ),
        'search_items' => _x( 'Search Customer Industries', 'customer_industry' ),
        'popular_items' => _x( 'Popular Customer Industries', 'customer_industry' ),
        'all_items' => _x( 'All Customer Industries', 'customer_industry' ),
        'parent_item' => _x( 'Parent Customer Industry', 'customer_industry' ),
        'parent_item_colon' => _x( 'Parent Customer Industry:', 'customer_industry' ),
        'edit_item' => _x( 'Edit Customer Industry', 'customer_industry' ),
        'update_item' => _x( 'Update Customer Industry', 'customer_industry' ),
        'add_new_item' => _x( 'Add New Customer Industry', 'customer_industry' ),
        'new_item_name' => _x( 'New Customer Industry', 'customer_industry' ),
        'separate_items_with_commas' => _x( 'Separate customer industries with commas', 'customer_industry' ),
        'add_or_remove_items' => _x( 'Add or remove customer industries', 'customer_industry' ),
        'choose_from_most_used' => _x( 'Choose from the most used customer industries', 'customer_industry' ),
        'menu_name' => _x( 'Customer Industries', 'customer_industry' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => false,
        'show_ui' => true,
        'show_tagcloud' => false,
        'show_admin_column' => true,
        'hierarchical' => true,

        'rewrite' => true,
        'query_var' => true
    );

    register_taxonomy( 'customer_industry', array('customerlogos'), $args );
}


add_image_size('customer_logo',90,90,false);
add_image_size('call_out_block_image',450,225,true);