<div id="page-header"
<?php if ( has_post_thumbnail() ) : ?>
	<?php
		$postID = get_post();
		$postThumbURI = get_the_post_thumbnail_url( $postID, 'large' ); 
	?>

	style="background-image: url(<?php echo $postThumbURI ?>);padding: 10% 10% 5%;"

<?php endif; ?>
>
	<h1>
		<span class="text-bg"><?php the_title(); ?></span>
	</h1>
</div>

<div id="content-wrap">
	<?php 
	echo strip_shortcodes( get_the_content('') );
	?>
</div>