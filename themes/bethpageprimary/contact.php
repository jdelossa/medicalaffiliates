<?php
/*
Template Name: Contact Page Template
*/
?>
<?php get_header(); ?>

<div class="sub-header">
	<div class="container">
		<div class="page-title">
			<h2><?= get_the_title($ID); ?></h2>
		</div>
	</div>
</div>

<div id="contact" class="hero-unit">
	<div class="map">
		<div id="map">
			<img src="https://maps.googleapis.com/maps/api/staticmap?center=40.739182,-73.494536&amp;zoom=11&amp;size=650x300&amp;markers=51.87874,0.56261,red&amp;sensor=true" alt="Static fallback image showing the location of Bethpage Primary Medical"/>
			<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    		<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/gmaps.js"></script>
   	 		<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/main.js"></script>
		</div>
	</div>
</div>

<div class="container">
	<div class="row-fluid">
		<div class="span6 span-centered">
			<div class="content">
				<h3>Our Office</h3>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; else: ?>
				<p><?php _e('Sorry, this page does not exist.'); ?></p>
				<?php endif; ?>
				<div class="separator line-separator"></div>
<h3>Contact Information</h3>
				<p><?= get_option('qs_contact_street'); ?><br>
                <?= get_option('qs_contact_city'); ?>, 
                <?= get_option('qs_contact_state'); ?> 
                <?= get_option('qs_contact_zip'); ?><br></p>
                
                <p>Phone: <a href="tel:<?= get_option("qs_contact_phone"); ?>"><?= get_option("qs_contact_phone"); ?></a></p>
                <p>Fax: <a href="tel:<?= get_option("qs_contact_fax"); ?>"><?= get_option("qs_contact_fax"); ?></a></p>
	 
	            <p class="muted">* Office Hours by Appointment</p>
				<div class="content">
					<!--<h3>E-Mail Us</h3>
				<?= do_shortcode ('[contact-form-7 id="139" title="Contact Us"]'); ?>-->
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>