<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

    <div id="home">
         <div class="jumbotron">
            <h2>Welcome to <?php bloginfo('name'); ?></h2>
            <div class="header-underline"></div>
            <div class="margin"><p>Providing You With The Very Best Care</p></div>
         </div>
    </div>


	<section id="about">
		<div class="row">
			<div class="col-md-4">
				<img src="http://wuhwebsites.winthrop.org/kaplan_wordpress/wp-content/uploads/2016/01/greenport-primary-care.jpg" width="100%" style="margin-top: 50px;">
			</div>
			<div class="col-md-8">
                <div style="margin: 60px 0 0 0;"><?php $post = get_post(2); $content = apply_filters('the_content', $post->post_content); echo $content;?></div>
            </div>
		</div>
	</section>

	<section id="medical-staff">
		<div class="row">
			<div class="col-sm-12">
				<h3>Medical Staff</h3>
				<div class="header-underline"></div>
				<?php get_template_part('doctor-images'); ?>
				<?php get_template_part('physicians-assistant-images'); ?>
			</div>
		</div>
	</section>

	<section id="patient-information">
		<div class="row">
			<div class="col-sm-8 col-centered">
				<h3><?php $post = get_post(5); $content = apply_filters('the_title', $post->post_title); echo $content;?></h3>
				<div class="header-underline"></div>
				<?php $post = get_post(5); $content = apply_filters('the_content', $post->post_content); echo $content;?>
			</div>

		</div>
		<div class="row">
			
		    <div class="col-sm-9 text-center">
				<?php $post = get_post(7); $content = apply_filters('the_content', $post->post_content); echo $content;?>
			</div>

			<div class="col-sm-3 well">
				
				<div class="forms">
					<h5><?php $post = get_post(9); $content = apply_filters('the_title', $post->post_title); echo $content;?></h5>	
					<?php $post = get_post(9); $content = apply_filters('the_content', $post->post_content); echo $content;?>
				</div>
				
			</div>
		</div><!-- /.row -->
	</section>

	<section id="contact">
		<div class="row">
			<div class="col-xs-12">
				<div class="full-width-padding">
					<h3><?php $post = get_post(11); $content = apply_filters('the_title', $post->post_title); echo $content;?></h3>
					<div class="header-underline"></div>
					
					<?php $post = get_post(11); $content = apply_filters('the_content', $post->post_content); echo $content;?>					
				</div>

				<div class="map">
					<div id="map">
						<img src="#" alt="Static fallback image showing the location of Garden City Oncology"/>
					</div>
				</div>

                <div class="row">
                    <div class="col-sm-4 text-left">
                        <h4>Our Location</h4>
                        <div class="header-underline"></div>
                        <p>
                            <?= get_option('qs_contact_street'); ?>
                        </p>
                        <p>
                            <?= get_option('qs_contact_city'); ?>,
                            <?= get_option('qs_contact_state'); ?>
                            <?= get_option('qs_contact_zip'); ?>
                        </p>

                    </div>
                    <div class="col-sm-4 text-left">
                        <h4>Phone Numbers</h4>
                        <div class="header-underline"></div>
                        <p>Telephone: <a href="tel:<?= get_option("qs_contact_phone"); ?>"><?= get_option("qs_contact_phone"); ?></a></p>
                        <p>Fax: <?= get_option("qs_contact_fax"); ?></p>
                    </div>
                    <div class="col-sm-4 text-left">
                        <h4>Office Hours</h4>
                        <div class="header-underline"></div>
                        <p>Hours By Doctor</p>
                    </div>
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