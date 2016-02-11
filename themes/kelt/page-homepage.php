<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

 	<section id="home">
 		<div class="row">
 			<div class="col-xs-12">
 				<div class="jumbotron">
 					<div class="container">
 						<div class="cta-container">
 							<!--<h4><?php bloginfo('description'); ?></h4>-->
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</section>

	<section id="about">
		<div class="row">
			<div class="col-md-8">
				<h2>Welcome to <?php bloginfo('name'); ?></h2>
				<div class="header-underline"></div>
				<div class="margin"><?php $post = get_post(2); $content = apply_filters('the_content', $post->post_content); echo $content;?></div>
			</div>
			<div class="col-md-4"><?php get_template_part('doctor-images'); ?></div>
		</div> <!--/.row -->
	</section>

	<section id="patient-information">
		<div class="row">
			<div class="col-sm-12">
				<h3><?php $post = get_post(25); $content = apply_filters('the_title', $post->post_title); echo $content;?></h3>
				<div class="header-underline"></div>
				<?php $post = get_post(25); $content = apply_filters('the_content', $post->post_content); echo $content;?>
			</div>

		</div>
		<div class="row">
			
		    <div class="col-sm-9 text-center">
				<?php $post = get_post(29); $content = apply_filters('the_content', $post->post_content); echo $content;?>
			</div>

			<div class="col-sm-3 well">
				
				<div class="forms">
					<h5><?php $post = get_post(27); $content = apply_filters('the_title', $post->post_title); echo $content;?></h5>
					<?php $post = get_post(27); $content = apply_filters('the_content', $post->post_content); echo $content;?>
				</div>
				
			</div>
		</div><!-- /.row -->
	</section>

	<section id="contact">
		<div class="row">
			<div class="col-xs-12">
				<div class="full-width-padding">
					<h3><?php $post = get_post(32); $content = apply_filters('the_title', $post->post_title); echo $content;?></h3>
					<div class="header-underline"></div>
					
					<?php $post = get_post(32); $content = apply_filters('the_content', $post->post_content); echo $content;?>
				</div>

				<div class="map">
					<div id="map">
						<img src="#" alt="Static fallback image showing the location of Garden City Oncology"/>
					</div>
				</div>
				
			</div>
		</div>

		<div class="row">
			<div class="padding">
				<div class="col-sm-4 text-center">
					<h4>Our Location</h4>
                    <div class="header-underline"></div>
					<p>
						<?= get_option('qs_contact_street'); ?><br>
						<?= get_option('qs_contact_city'); ?><br>
						<?= get_option('qs_contact_state'); ?>,
						<?= get_option('qs_contact_zip'); ?>
					</p>
					
				</div>
				<div class="col-sm-4 text-center">
					<h4>Phone Numbers</h4>
                    <div class="header-underline"></div>
					<p>Tel: <a href="tel:<?= get_option("qs_contact_phone"); ?>"><?= get_option("qs_contact_phone"); ?></a></p>
					<p>Fax: <?= get_option("qs_contact_fax"); ?></p>
				</div>
				<div class="col-sm-4 text-center">
					<h4><?php $post = get_post(36); $content = apply_filters('the_title', $post->post_title); echo $content;?></h4>
                    <div class="header-underline"></div>
			        <?php $post = get_post(36); $content = apply_filters('the_content', $post->post_content); echo $content;?>
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