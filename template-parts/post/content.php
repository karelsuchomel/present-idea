<div id="page-header">
<?php if ( has_post_thumbnail() ) : ?>
	<?php the_post_thumbnail('original'); ?>
<?php endif; ?>
	<h1>
		<span class="text-bg"><?php the_title(); ?></span>
	</h1>
</div>

<div id="content-wrap">
	<?php 
	echo strip_shortcodes( get_the_content('') );
	?>
</div>