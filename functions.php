<?php
// import stylesheet
function present_idea_resources () {
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_script('page-behave', get_template_directory_uri() . '/assets/js/main.js', array(), 1.1, true );
}

// so the previous code actualy runs
add_action('wp_enqueue_scripts', 'present_idea_resources');

// theme setup
function present_idea_theme_setup(){

	// navigation menus
	register_nav_menus(array(
	  'menu-side-list' => __('Side bar menu'),
	));

	// add featured image support
	add_theme_support('post-square-thumbnails');
	// define image sizes
	set_post_thumbnail_size( 256, 256, true );
}

add_action('after_setup_theme', 'present_idea_theme_setup');

// Customize Appearance Options
// Controls (UI in appearance -> customize)
// Settings (save to Database)
// Sections (Groups)
function present_idea_theme_customize_register($wp_customize) {

	$wp_customize->add_setting('prid_base_background_color', array(
		'default' => '#34495e',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting('prid_complementary_color', array(
		'default' => '#e74c3c',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting('prid_dark_background_color', array(
		'default' => '#2c3e50',
		'transport' => 'refresh',
	));

	$wp_customize->add_section('prid_custom_colors', array(
		'title' => __('Custom colors', 'present-idea'), // on screen label
		'priority' => 30,
	));

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'prid_base_background_color_control', array(
			'label' => __('Base backgroud color', 'present-idea'),
			'section' => 'prid_custom_colors',
			'settings' => 'prid_base_background_color',
	)) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'prid_complementary_color_control', array(
			'label' => __('Complementary color', 'present-idea'),
			'section' => 'prid_custom_colors',
			'settings' => 'prid_complementary_color',
	)) );

	$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'prid_dark_background_color_control', array(
			'label' => __('Dark background color', 'zs-hroznova'),
			'section' => 'prid_custom_colors',
			'settings' => 'prid_dark_background_color',
	)) );

}

add_action('customize_register', 'present_idea_theme_customize_register');



// Output customize CSS
function zsh_customize_css() { ?>

	<style>
		// prid_base_background_color
		#asside-panel {
		  background: <?php echo get_theme_mod('prid_base_background_color') ?>;
		}
	</style>

<?php }

add_action('wp_head', 'zsh_customize_css');

?>