<?php
/*
Template Name: Patient Page Template
*/
?>
<?php get_header(); ?>

<div class="sub-header">
	<div class="container">
		<div class="page-title">
			<h2><?php echo get_the_title($ID); ?></h2>
		</div>
	</div><!-- /.container -->
</div>

<div class="container">
	<div class="row-fluid">
		<div class="span12">
			<div class="span8">
				<div class="content">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					  	<?php the_content(); ?>
					<?php endwhile; else: ?>
						<p><?php _e('Sorry, this page does not exist.'); ?></p>
					<?php endif; ?>
				</div><!-- /.content -->

				<div class="content">
					<h3>Insurance Information</h3>
					<p><?php bloginfo('name'); ?> currently accepts the following insurance plans:</p>
					<div class="insurances aetna"></div>
					<div class="insurances bluecross"></div>
					<div class="insurances cigna"></div>
					<div class="insurances emblemHealth"></div>
					<div class="insurances healthNet"></div>
					<div class="insurances hip"></div>
					<div class="insurances magnaCare"></div>
					<div class="insurances multiPlan"></div>
					<div class="insurances oxford"></div>
					<div class="insurances unhc"></div>
					<div class="insurances vytra"></div>
				</div><!-- /.content -->
			</div>

			<div class="span4">
				<div class="content forms">
					<h3><?php echo get_the_title(420); ?></h3>
					<p><?php echo get_post_field('post_content', 420); ?></p>
				</div><!-- /.content -->
			</div>
		</div><!--/.span12 -->
	</div> <!--/.row-fluid -->
</div><!-- /.container -->

<div class="container">
	<div class="row-fluid">
		<div class="span8">

			<div id="billing" class="content">
				<h3>Billing and Payment Policies</h3>
				<p>Insurance will be billed and the patient is responsible for any deductible, unpaid balance and co-payment. 
				For your convenience we also accept the following credit cards:</p>
				<div class="pay american-express"></div>
				<div class="pay discover"></div>
				<div class="pay mastercard"></div>
				<div class="pay visa"></div>
			</div><!-- /.content -->

			<div id="affiations" class="content">
				<h3>Affiliations</h3>
				<p><?php bloginfo('name'); ?> is affiliated with the following hospitals: </p>
				<div class="affiliates winthrop"></div>
			</div><!-- /.content -->

		</div><!--/.span12 -->
	</div> <!--/.row-fluid -->
</div><!-- /.container -->
<?php get_footer(); ?>