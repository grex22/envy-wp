<?php
/**
 * Custom functions
 */
 
register_nav_menus(array(
  'footer_sitemap_navigation' => __('Footer Sitemap Menu', 'roots'),
));

register_nav_menus(array(
  'footer_industries_navigation' => __('Footer Industries Menu', 'roots'),
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

add_image_size('customer_logo',90,90,false);
add_image_size('call_out_block_image',450,225,true);