<?php
/*
Template Name: Doctor Template
*/
?>
<?php get_header(); ?>

<div class="sub-header">
	<div class="container">
		<div class="page-title">
			<h2><?php echo get_the_title($ID); ?></h2>
		</div>
	</div>
</div>

<div id="doctor-container" class="container">
	<div class="row">
		<div class="span12">
			<div class="content">
				<?php get_template_part('doctor-images'); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>

