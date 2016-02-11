<?php
/*
Template Name: Patient Privacy
*/
?>

<?php get_header(); ?>

<section class="margin-top container privacy-page">
	<div class="row">
		<div class="col-md-12">
			<div class="content">
				<h2><?= get_the_title($ID); ?></h2>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><?php the_content(); ?>
				<?php endwhile; else: ?>
				<p><?php _e('Sorry, this page does not exist.'); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

</div> <!-- .container -->



<?php 
	// No comments on homepage
	//comments_template();
?>

<?php get_footer(); ?>