<?php
/*
Template Name: Basic Page Template
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

<!--Page Container-->
<div class="container content">
	<div class="row-fluid">
	
		<div class="span8">
			<div class="content">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				  	<?php the_content(); ?>
				<?php endwhile; else: ?>
					<p><?php _e('Sorry, this page does not exist.'); ?></p>
				<?php endif; ?>
			</div>
		</div>

		<div class="span4">
			<div class="content">
				<h3>Our Office</h3>
                <p><?= get_option('qs_contact_street'); ?><br>
                <?= get_option('qs_contact_city'); ?>, 
                <?= get_option('qs_contact_state'); ?> 
                <?= get_option('qs_contact_zip'); ?><br></p>
                <p class="home-tel"><a href="tel:<?= get_option("qs_contact_phone"); ?>"><?= get_option("qs_contact_phone"); ?></a></p>	
                <p class="muted">* Office Hours by Appointment</p>

				<h3>Complaints</h3>
<p>If you believe that your privacy rights have been violated, you should immediately contact the Practice Privacy Officer at 516-937-5000. We will not take action against you for filing a complaint. You also may file a complaint with the Secretary of the U. S. Department of Health and Human Services.</p>

&nbsp;
<h3>Contact Person</h3>
<p>If you have any questions or would like further information about this notice, please contact the Practice Privacy Officer at 516-937-5000.</p>

<p>This notice is effective as of January 6, 2016.</p>
			</div>
		</div>

	</div>
</div>
<!--End Page Container-->
<?php get_footer(); ?>

