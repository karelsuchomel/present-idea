<div id="asside-panel">
	<?php
	echo "<li><a class='home-page-link' href='" . home_url( '/' ) . "'>" . get_bloginfo( 'name' ) . "</a><a class='home-page-link hover' href='" . home_url( '/' ) . "'>" . get_bloginfo( 'name' ) . "</a></li>";
	$progressBar = file_get_contents( get_template_directory_uri() . '/template-parts/navigation/progress-bar.php');
	$args = array('link_after' => $progressBar, 'theme_location' => 'Side bar menu');
	wp_nav_menu( $args );
	get_search_form();
	?>
</div>