<?php

function themename_custom_logo_setup() {
  $defaults = array(
    'height'               => 100,
    'width'                => 400,
    'flex-height'          => true,
    'flex-width'           => true,
    'header-text'          => array( 'site-title', 'site-description' ),
    'unlink-homepage-logo' => true, 
  );
  add_theme_support( 'custom-logo', $defaults );
} 
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' ),
      'customer-service' => __( 'Customer Service' ),
      'discover-menu' => __( 'Discvoer' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );



if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page(array(
    'page_title'  => 'Theme General Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
  
  acf_add_options_sub_page(array(
    'page_title'  => 'Theme Header Settings',
    'menu_title'  => 'Header',
    'parent_slug' => 'theme-general-settings',
  ));
}
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );