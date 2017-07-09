<div id="asside-panel">
	<?php
	$progressBar = file_get_contents( get_template_directory_uri() . '/template-parts/navigation/progress-bar.php');
	$args = array('link_after' => $progressBar, 'theme_location' => 'menu-side-list');
	wp_nav_menu( $args );
	get_search_form();
	?>
</div>