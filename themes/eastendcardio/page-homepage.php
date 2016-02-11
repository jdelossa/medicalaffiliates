<?php
/*
Template Name: Main Site
*/
?>

<?php get_header(); ?>

<section id="about">
	<div class="container">
		<div class="row">
			<div class="cta-container">
				<div class="col-sm-offset-7 col-sm-5">
					<div id="home">			
						<h2><?php bloginfo('description');?></h2>
						<?php $post = get_post(2); $content = apply_filters('the_content', $post->post_content); echo $content;?>
						<div class="cta-logo">
							<img src="<?php bloginfo('template_directory');?>/library/img/affiliate-header.png" alt="affiliate">
						</div>
					</div>
					<div class="cta-down"><a href="#doctors">&#9660;</a></div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="doctors">
	<div class="container">
		<div class="row">

			<div class="col-sm-12">
				<h2><?php $post = get_post(5); $content = apply_filters('the_title', $post->post_title); echo $content;?>
				<br><span class="separator line-separator"></span></h2>
	            <div class="full-width-padding">
	            	<?php $post = get_post(5); $content = apply_filters('the_content', $post->post_content); echo $content;?>
	            </div>
	            <?php get_template_part('doctor-images') ?>
			</div>

		</div>
	</div>
</section>


<section id="patient-info">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2><?php $post = get_post(7); $content = apply_filters('the_title', $post->post_title); echo $content;?>
				<br><span class="separator line-separator"></span></h2>
				<div class="full-width-padding">
					<?php $post = get_post(7); $content = apply_filters('the_content', $post->post_content); echo $content;?>
				</div>
			</div>
		</div>

		<div class="row">
		    <div class="col-md-9">
		    	<div id="insurance">
					<h4><?php $post = get_post(14); $content = apply_filters('the_title', $post->post_title); echo $content;?></h4>
					<div class="insurance">
						<div class="insurances aetna"></div>
						<div class="insurances affinity"></div>
						<div class="insurances bluecross"></div>
						<div class="insurances cigna"></div>
						<div class="insurances emblemHealth"></div>
						<div class="insurances healthNet"></div>
						<div class="insurances hip"></div>
						<div class="insurances humana"></div>
						<div class="insurances magnaCare"></div>
						<div class="insurances medicare"></div>
						<div class="insurances medicaid"></div>
						<div class="insurances multiPlan"></div>
						<div class="insurances oxford"></div>
						<div class="insurances unhc"></div>
						<div class="insurances vytra"></div>
					</div>
				</div>					
			</div>

			<div class="col-md-3 well">
				
				<h4><?php $post = get_post(11); $content = apply_filters('the_title', $post->post_title); echo $content;?></h4>
				<?php $post = get_post(11); $content = apply_filters('the_content', $post->post_content); echo $content;?>

				<h4><?php $post = get_post(9); $content = apply_filters('the_title', $post->post_title); echo $content;?></h4>
				<?php $post = get_post(9); $content = apply_filters('the_content', $post->post_content); echo $content;?>

			</div>
		</div><!-- /.row -->
	</div><!-- /#patient-info -->
</section>


<section id="contact">
	<div class="container">

		<div class="row">
			<div class="col-sm-12">
				<h2><?php $post = get_post(16); $content = apply_filters('the_title', $post->post_title); echo $content;?>
				<br><span class="separator line-separator"></span></h2>
				
				<div class="full-width-padding">
					<?php $post = get_post(16); $content = apply_filters('the_content', $post->post_content); echo $content;?>
				</div>
			</div>
		</div><!-- /.row -->

		<div class="row">
			<div class="col-sm-5">
				<div class="map">
					<div id="map">
						<img src="#" alt="Static fallback image showing the location of South Shore Cardiovascular, West Islip"/>
					</div>
				</div>
			</div>

			<div class="col-sm-7">

				<div class="col-sm-6">
					<h3><?php echo get_option('qs_contact_city'); ?> Office</h3>
					<p><?php echo get_option('qs_contact_street'); ?></p>
					<p><?php echo get_option('qs_contact_city'); ?>, <?php echo get_option('qs_contact_state'); ?> <?php echo get_option('qs_contact_zip'); ?></p>
				</div>

				<div class="office col-sm-6">
					<p><i class="fa fa-phone fa-1x"></i> Phone: <a href="tel:<?php echo get_option('qs_contact_phone'); ?>"><?php echo get_option('qs_contact_phone'); ?></a></p>
					<p><i class="fa fa-fax fa-1x"></i> Fax: <?php echo get_option('qs_contact_fax'); ?></p>
				</div>

				<div class="col-sm-12">
					<?php $post = get_post(18); $content = apply_filters('the_content', $post->post_content); echo $content;?>
				</div>

			</div>
		</div><!-- /.row -->

		<div class="row">

			<div class="col-sm-5">
				<div class="map">
					<div id="map2">
						<img src="#" alt="Static fallback image showing the location of South Shore Cardiovascular, West Islip"/>
					</div>
				</div>
			</div>

			<div class="col-sm-7">

				<div class="col-sm-6">
					<h3><?php echo get_option('qs_contact_city2'); ?> Office</h3>
					<p><?php echo get_option('qs_contact_street2'); ?></p>
					<p><?php echo get_option('qs_contact_city2'); ?>, <?php echo get_option('qs_contact_state2'); ?> <?php echo get_option('qs_contact_zip2'); ?></p>
				</div>

				<div class="office col-sm-6">
					<p><i class="fa fa-phone fa-1x"></i> Phone: <a href="tel:<?php echo get_option('qs_contact_phone2'); ?>"><?php echo get_option('qs_contact_phone2'); ?></a></p>
					<p><i class="fa fa-fax fa-1x"></i> Fax: <?php echo get_option('qs_contact_fax2'); ?></p>
				</div>

				<div class="col-sm-12">
					<?php $post = get_post(20); $content = apply_filters('the_content', $post->post_content); echo $content;?>
				</div>

			</div>
		</div> <!-- /.row -->
	</div> <!-- /.container -->
</section>

<?php 
// No comments on homepage
//comments_template();
?>

<?php get_footer(); ?>