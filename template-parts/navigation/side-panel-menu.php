<div id="asside-panel">

	<div id="panel-graphic">
	</div>

	<?php
	$args = array('theme_location' => 'menu-side-list');
	wp_nav_menu( $args );
	get_search_form();
	?>
</div>