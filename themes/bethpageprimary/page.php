<?php
/*
Template Name: Main Template
*/
?>
<?php get_header(); ?>

<div class="container page-title">
	<h1><?php echo get_the_title($ID); ?></h1>
</div>

<!--Page Container-->
<div class="container content">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>

	<?php endwhile; else: ?>
	<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>
</div>
<!--End Page Container-->

<!--Footer Widget Container-->
<div id="margin" class="container">
	<div class="widget-footer">
		<?php include ('sidebar-footer.php'); ?> 
	</div>
</div>
<!--End Footer Widget Container-->

<?php get_footer(); ?>