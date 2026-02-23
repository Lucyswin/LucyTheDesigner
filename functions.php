<?php 
	
function load_scripts(){
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

// Main configuration function
function wp_config() {

  // menus
  register_nav_menus(
    array(
      'my_main_menu' => 'Main Menu',
    )
  );
}
add_action( 'after_setup_theme', 'wp_config', 0 );

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');