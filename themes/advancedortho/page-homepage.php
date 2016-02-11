<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>


<div id="hero">
	<div id="home">
		<div class="container">
			<div class="cta">
				<div class="cta-container">

				    <div class="animated fadeIn" style="visibility: visible;">

				        <h2><?php bloginfo('description'); ?></h2>
				        <p style="margin-bottom: 20px;">Compassionate care supported by cutting edge technology</p>

				        <div class="cta-logo">	
					    	<img src="<?php bloginfo('template_directory');?>/library/img/affiliate-header.png" alt="Winthrop Univeristy Hospital">
					    </div>

					    <div class="cta-down">
							<a href="#about">&#9660;</a>
						</div>

				    </div><!-- cta animated fadeInUp -->

				</div><!-- /.cta-container -->
			</div><!-- .cta -->
		</div><!-- /.container--> 
	</div><!-- /#home -->

	<div class="mobile-logo">	
    	<img src="<?php bloginfo('template_directory');?>/library/img/affiliate-header.png" alt="Winthrop Univeristy Hospital">
    </div>
</div><!-- /#hero -->

<section class="wrap container">
	<div id="about">
	  <!-- Nav tabs -->
	 	<div id="nav-tabs">

		  <ul class="nav nav-tabs nav-justified" role="tablist" id="locations">
		    <li class="rockville-centre active">
		   		<a data-target="#rockville-centre" class="btn btn-link" role="tab" data-toggle="tab">
		   		<?php $post = get_post(29); $content = apply_filters('the_title', $post->post_title); echo $content;?>, NY</a></li>
		    <li class="garden-city">
		   		<a data-target="#garden-city" class="btn btn-link" role="tab" data-toggle="tab">
		   		<?php $post = get_post(25); $content = apply_filters('the_title', $post->post_title); echo $content;?>, NY</a></li>
		  </ul>

		</div>
	  <!-- END Nav tabs -->
	</div><!-- #about -->

	<!-- Tab panes -->
	<div class="tab-content">
	    <div role="tabpanel" class="tab-pane fade in active content" id="rockville-centre">
			
			<div class="row">
				<div class="location col-md-10">
					<?php $post = get_post(29); $content = apply_filters('the_content', $post->post_content); echo $content;?>
				</div>
				<div class="border-left call-us desktop col-md-2">
					<h3>Call Today</h3>
					<h3 class="tel"><a href="tel:<?= get_option("qs_contact_phone"); ?>"><?= get_option("qs_contact_phone"); ?></a></h3>
				</div>
			</div>

			<div class="row">
				<div id="medical-staff-rc" class="col-md-12">
					<div class="header"><h2>Our Medical Staff</h2></div>
					<?php get_template_part('doctor-images'); ?>
				</div>
			</div>

			<div class="row">		
				<div id="contact-rc" class="col-md-12">
					<div class="header"><h2><?php $post = get_post(2); $title = apply_filters('the_title', $post->post_title); echo $title;?></h2></div>
					<?php $post = get_post(2); $content = apply_filters('the_content', $post->post_content); echo $content;?>
				</div>
			</div>
				
			<div class="row">
				<div class="col-md-4">
					<div class="map">
			 			<div id="rockville-map">
							<img src="#" alt="Static fallback image" width="300" height="200"/>
						</div>
			 		</div>	
			 	</div><!-- /.col-md-4 -->

				<div class="col-md-4">
					<h3 class="contact"><?php $post = get_post(29); $content = apply_filters('the_title', $post->post_title); echo $content;?></h3>
                    <?php $post = get_post(27); $content = apply_filters('the_content', $post->post_content); echo $content;?>
					<address>
						<?= get_option('qs_contact_street'); ?><br>
						<?= get_option('qs_contact_city'); ?>,
						<?= get_option('qs_contact_state'); ?>
						<?= get_option('qs_contact_zip'); ?>
					</address>
					<p><i class="fa fa-phone"></i> Tel: <a href="tel:<?= get_option("qs_contact_phone"); ?>"><?= get_option("qs_contact_phone"); ?></a></p>
					<p><i class="fa fa-fax"></i> Fax: <?= get_option("qs_contact_fax"); ?></p>
				</div><!-- /.col-md-4 -->

			 	<div class="col-md-4">
			 		<h3 class="contact">Send Us A Message</h3>
		 			<div class="contact-form">
		 				<?php echo do_shortcode ('[contact-form-7 id="33" title="Contact Us" html_class="form-horizontal form-group"]')?>
					</div>
			 	</div><!-- /.col-md-4 -->

			</div> <!-- /.row -->
		</div><!-- /PANEL #rockville-centre -->

	    <div role="tabpanel" class="tab-pane fade content" id="garden-city">

			<div class="row">
				<div class="location col-md-10">
					<?php $post = get_post(25); $content = apply_filters('the_content', $post->post_content); echo $content;?>
				</div>
				<div class="border-left call-us desktop col-md-2">
					<h3>Call Today</h3>
					<h3 class="tel"><a href="tel:<?= get_option("qs_contact_phone2"); ?>"><?= get_option("qs_contact_phone2"); ?></a></h3>
				</div>
			</div>

			<div class="row">

				<div id="medical-staff-gc" class="col-md-12">
					<div class="header"><h2>Our Medical Staff</h2></div>
					<?php get_template_part('doctor-images-2'); ?>
				</div>

			</div> <!--/.row -->

			<div class="row">

				<div id="contact-gc" class="col-md-12">
					<div class="header"><h2><?php $post = get_post(2); $title = apply_filters('the_title', $post->post_title); echo $title;?></h2></div>
					<?php $post = get_post(2); $content = apply_filters('the_content', $post->post_content); echo $content;?>
				</div>

			</div> <!-- .row -->

			<div class="row">

				<div class="col-md-4">
					<div class="map" style="width: 100% !important;">
			 			<div id="garden-map" style="width: 100% !important; height: 300px !important;">
							<img src="#" alt="Static fallback image" width="300" height="200"/>
						</div>
			 		</div>
				</div><!-- /.col-md-4 -->

				<div class="col-md-4">
					<h3 class="contact"><?php $post = get_post(25); $content = apply_filters('the_title', $post->post_title); echo $content;?></h3>
                    <?php $post = get_post(27); $content = apply_filters('the_content', $post->post_content); echo $content;?>
					<address>
						<?= get_option('qs_contact_street2'); ?><br>
						<?= get_option('qs_contact_city2'); ?>,
						<?= get_option('qs_contact_state2'); ?>
						<?= get_option('qs_contact_zip2'); ?>
					</address>
					<p><i class="fa fa-phone"></i> Tel: <a href="tel:<?= get_option("qs_contact_phone2"); ?>"><?= get_option("qs_contact_phone2"); ?></a></p>
					<p><i class="fa fa-fax"></i> Fax: <?= get_option("qs_contact_fax2"); ?></p>
				
				</div><!-- /.col-md-4 -->

			 	<div class="col-md-4">
			 		<h3 class="contact">Send Us A Message</h3>
					<div class="contact-form">
						<?php echo do_shortcode ('[contact-form-7 id="33" title="Contact Us" html_class="form-horizontal form-group"]')?>
					</div>
			 	</div><!-- /.col-md-4 -->

			</div> <!-- .row -->
		</div><!-- /PANEL #garden-city -->

	</div>
	<!-- END Tab panes -->

</section> <!-- /.wrap .container-->

<?php 
	// No comments on homepage
	//comments_template();
?>

<?php get_footer(); ?>