<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<div class="container">
<!-- Jumbotron Header -->
<div id="home" class="jumbotron hero-spacer">
    <div class="header-contact">
        <div class="container">
            <ul>
                <li class="pull-left">Location: <a target="_blank" href="https://www.google.com/maps/place/Anthony+Cipolla+Physician+PC/@40.742616,-73.32219,17z/data=!3m1!4b1!4m2!3m1!1s0x89e82dab664ced95:0xd70d6270a8867114"><?= get_option('qs_contact_street'); ?>, <?= get_option('qs_contact_city'); ?>, <?= get_option('qs_contact_state'); ?></a></li>
                <li class="pull-right">Tel: <a href="tel:<?php echo get_option('qs_contact_phone'); ?>"><?php echo get_option('qs_contact_phone'); ?></a></li>
            </ul>
        </div>
    </div>
</div>
</div>

<!-- Page Content -->
<div class="container">

    <section id="about">

    	<div class="wrapper">

	    	<h2 class="headline">Welcome to <?php bloginfo('name'); ?></h2>
	    	<div class="subtitle">Serving The Community Of North Babylon Since 1990</div>
	    	<div class="separator line-separator"></div>

			<div class="padding">
				<?php $post = get_post(2); $content = apply_filters('the_content', $post->post_content); echo $content;?>
			</div>
			
    	</div>

    </section>
    
    <section id="medical-staff">

    	<div class="wrapper">

	    	<h2 class="headline"><?php $post = get_post(8); $content = apply_filters('the_title', $post->post_title); echo $content;?></h2>

	    	<div class="subtitle"><?php $post = get_post(8); $content = apply_filters('the_content', $post->post_content); echo $content;?></div>
	    	<div class="separator line-separator"></div>

			<?php get_template_part('doctor-images'); ?>

    	</div>
    	
    </section>

    <section id="insurance">

    	<div class="wrapper">

	    	<h2 class="headline"><?php $post = get_post(6); $content = apply_filters('the_title', $post->post_title); echo $content;?></h2>

	    	<div class="subtitle"><?php $post = get_post(6); $content = apply_filters('the_content', $post->post_content); echo $content;?></div>
	    	<div class="separator line-separator"></div>

            <div class="insurance">
                <div class="insurances aetna"></div>
                <div class="insurances bluecross"></div>
                <div class="insurances cigna"></div>
                <div class="insurances ghi"></div>
                <div class="insurances hip"></div>
                <div class="insurances magnaCare"></div>
                <div class="insurances medicare"></div>
                <div class="insurances multiPlan"></div>
                <div class="insurances oxford"></div>
                <div class="insurances unhc"></div>
                <div class="insurances vytra"></div>
                <p class="muted" style="text-align: center;"><small>* If your insurance is not listed here, please call the office.</small></p>
            </div>

    	</div>
    	
    </section>

    <section id ="contact">

    	<div class="wrapper">

    		<h2 class="headline"><?php $post = get_post(10); $content = apply_filters('the_title', $post->post_title); echo $content;?></h2>

	    	<div class="subtitle">Call To Schedule an Appointment Today!</div>
	    	<div class="separator line-separator"></div>
    		
    	</div>

    	<div class="map">

			<div id="map">
				<img src="#" alt="Static fallback image showing the location of Cipolla Medical Services"/>
			</div>

		</div>

		<div class="contact">
			<div class="row">
				<div class="col-sm-12">
					<div class="contact-content">
						<?php $post = get_post(10); $content = apply_filters('the_content', $post->post_content); echo $content;?>
					</div>
				</div>
				<div class="col-sm-5">
					<div class="address">
						<p><?= get_option('qs_contact_street'); ?></p>
						<p><?= get_option('qs_contact_city'); ?>,
						<?= get_option('qs_contact_state'); ?>
						<?= get_option('qs_contact_zip'); ?></p>
					</div>

					<div class="numbers">
						<p><i class="fa fa-phone"></i> Phone: <a href="tel:<?= get_option('qs_contact_phone'); ?>"><?= get_option('qs_contact_phone'); ?></a></p>
						<p><i class="fa fa-fax"></i> Fax: <a href="tel:<?= get_option('qs_contact_fax'); ?>"><?= get_option('qs_contact_fax'); ?></a></p>
					</div>
				</div>
				<div class="col-sm-7">
					<?php echo do_shortcode('[WPBUSINESSHOURS]')?>
				</div>
			</div>
		</div>


    	
    	
    </section>

</div><!-- /.container -->

<?php 
	// No comments on homepage
	//comments_template();
?>

<?php get_footer(); ?>