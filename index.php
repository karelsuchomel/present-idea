<?php get_header();?>

<?php require_once('template-parts/navigation/side-panel-menu.php');?>

<div id="content">
	<!-- Start the loop -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php get_template_part('template-parts/post/content', get_post_format()); ?>
	
	<?php endwhile; ?>

	<div id="pagination-wrap">
	  <?php echo paginate_links(); ?>
	</div>

	<?php else : ?>
	<p><?php _e( 'Could\'t load the content. This page probably doesn\'t have any' ); ?></p>
	<!-- Stop the loop -->
	<?php endif; ?>

</div>

<?php require_once('template-parts/comment-area/side-panel-comments.php');?>

<?php get_footer();?>
