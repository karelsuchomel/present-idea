<?php
// import stylesheet
function present_idea_scripts () {
  wp_enqueue_style( 'style.css', get_stylesheet_uri() );

  wp_register_style('main.css', get_template_directory_uri() . '/assets/css/main.css', false, NULL, 'all' );
  wp_enqueue_style('main.css');

  wp_register_script( 'main.js', get_template_directory_uri() . '/assets/js/main.js',  array(), NULL, false );
  wp_enqueue_script( 'main.js' );
}

// so the previous code actualy runs
add_action('wp_enqueue_scripts', 'present_idea_scripts');

// theme setup
function present_idea_theme_setup(){

	// navigation menus
	register_nav_menus(array(
	  'menu-side-list' => __('Side bar menu'),
	));

	// add featured image support
	add_theme_support('post-thumbnails');
	// define image sizes
	set_post_thumbnail_size( 256, 256, true );
}

add_action('after_setup_theme', 'present_idea_theme_setup');

// customizations (colors)
require_once('include/customizations.php');

?>