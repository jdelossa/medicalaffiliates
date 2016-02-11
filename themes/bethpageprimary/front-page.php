<?php
/*
Template Name: Home Page Template
*/
?>
<?php get_header(); ?>

<!-- Hero Image -->
<div id="home">
	<div class="cta container">
		<div class="cta-container">
		    <div class="cta animated fadeInUp" style="visibility: visible;">
		        <h2>Caring for Long Island Families</h2>
		        <p style="margin-bottom: 20px;"><?php bloginfo('description'); ?></p>
		        <div class="cta-bg">
			        <ul>
			            <li><a class="blue-pill" href="<?php echo site_url(); ?>/contact">Request an Appointment</a></li>
			            <li><a class="blue-pill" href="<?php echo site_url(); ?>/doctors">Meet Our Doctors</a></li>
			        </ul>
		        </div>
		    </div>
		</div>
		<div class="cta-logo">
			<img src="<?php bloginfo('template_directory');?>/img/affiliate.png" alt="affiliate">
		</div>
	</div>
</div>

<!-- Front Page Content -->
<div class="container">
	<div class="row-fluid">
		<!-- Site Description and Location -->
		<div class="span8">
			<div class="content">
		    	<div class="welcome">
		    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				  	<?php the_content(); ?>
				<?php endwhile; else: ?>
					<p><?php _e('Sorry, this page does not exist.'); ?></p>
				<?php endif; ?>
		    	</div>
	    	</div>
	    </div>
		<div class="span3 offset1">
			<div class="content">
				<h3>Our Office</h3>
                <p><?= get_option('qs_contact_street'); ?><br>
                <?= get_option('qs_contact_city'); ?>, 
                <?= get_option('qs_contact_state'); ?> 
                <?= get_option('qs_contact_zip'); ?><br></p>
                <p class="home-tel"><a href="tel:<?= get_option("qs_contact_phone"); ?>"><?= get_option("qs_contact_phone"); ?></a></p>	
                <p class="muted">* Office Hours by Appointment</p>
        	</div>
        </div>
    </div>

    <!-- Services -->
	<div class="services">
		<div class="content">
			<div class="row-fluid">
				<div class="span12">
					<h3>Our Services</h3>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span3">
					<div class="block b1">
						<i class="fa fa-stethoscope"></i>
						<?php $post = get_post(5); $content = apply_filters('the_content', $post->post_content); echo $content;?>
					</div>
				</div>
				<div class="span3">
					<div class="block b2">
						<i class="fa fa-hospital-o"></i>
						<?php $post = get_post(7); $content = apply_filters('the_content', $post->post_content); echo $content;?>
					</div>
				</div>
				<div class="span3">
					<div class="block b3">
						<i class="fa fa-ambulance"></i>
						<?php $post = get_post(9); $content = apply_filters('the_content', $post->post_content); echo $content;?>
					</div>
				</div>
				<div class="span3">
					<div class="block b4">
						<i class="fa fa-user-md"></i>
						<?php $post = get_post(11); $content = apply_filters('the_content', $post->post_content); echo $content;?>
					</div>
				</div>	
			</div>
		</div>
	</div>		

	<div class="separator line-separator"></div>

	<!-- Insurance -->
	<div class="content">
		<h3>Accepted Insurance</h3>
		<div id="insurances">
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
			<p class="muted"><small>* If your insurance is not listed here, please call the office.</small></p>
		</div>
	</div>

</div>

<?php get_footer(); ?>