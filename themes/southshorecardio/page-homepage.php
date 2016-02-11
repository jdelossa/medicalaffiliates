<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

	<div id="home">

		<div class="cta container">

			<div class="cta-container">

			    <div class="cta animated fadeInUp" style="visibility: visible;">

			        <h2><?php bloginfo('description'); ?></h2>
                    <ul>
                        <li><a class="email" data-toggle="modal" data-target="#email-modal">Make An Appointment</a></li>
                    </ul>
				    
			    </div><!-- cta animated fadeInUp -->

			</div><!-- cta-container -->

		</div> <!-- .cta .container -->
		
		<div class="cta-logo">	
	    	<img src="<?php bloginfo('template_directory');?>/library/img/affiliate.png" alt="Winthrop Univeristy Hospital">
	    </div>

	</div><!-- #home -->

					
	<section id="about">
		<div class="container">
			<div class="row">
				<div class="section-header"><h3><?php $post = get_post(2); $title = apply_filters('the_title', $post->post_title); echo $title;?></h3></div>
			</div>
			<div class="row">
                <div class="col-md-7 col-centered">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                    <?php endwhile; else: ?>
                        <p><?php _e('Sorry, this page does not exist.'); ?></p>
                    <?php endif; ?>
                </div>
                <?php get_template_part('doctor-images'); ?>

			</div> <!-- .row -->

            <div class="row">
                <div class="col-md-12" style="clear: both;">
                    <div class="separator line-separator"></div>
					<div class="section-header"><h3><?php $post = get_post(29); $title = apply_filters('the_title', $post->post_title); echo $title;?></h3></div>
                </div>
            </div>

            <div class="row">
            	<div class="col-centered col-md-8">
            		<div class="main insurances">
            			<div class="insurance aetna"></div>
                		<div class="insurance affinity"></div>
                		<div class="insurance bluecross"></div>
                		<div class="insurance choicecare"></div>
                		<div class="insurance cigna"></div>
                		<div class="insurance coventry"></div>
                		<div class="insurance fidelis"></div>
                		<div class="insurance ghi"></div>
                		<div class="insurance healthnet"></div>
                		<div class="insurance hip"></div>
                		<div class="insurance humana"></div>
                		<div class="insurance magnacare"></div>
                		<div class="insurance medicaid"></div>
                		<div class="insurance medicare"></div>
                		<div class="insurance oxford"></div>
                		<div class="insurance unhc"></div>
            		</div>
            	</div>	
            </div>

            <div class="row">
                <div class="col-centered col-md-6">
                    <div class="main insurances">
                        <?php $post = get_post(29); $content = apply_filters('the_content', $post->post_content); echo $content;?>
                    </div>
                </div>
            </div>

		</div><!-- .container -->
	</section>


	<section id="offices">
		<div class="sidebar">
			<!-- Office One --> 
			<div id="office1" class="office1">
				<h2><?php $post = get_post(25); $title = apply_filters('the_title', $post->post_title); echo $title;?></h2>
				<div class="info">

					<p><?= get_option('qs_contact_street'); ?><br>
	                <?= get_option('qs_contact_city'); ?>, 
	                <?= get_option('qs_contact_state'); ?> 
	                <?= get_option('qs_contact_zip'); ?><br></p>
					<p>Tel: <a href="tel:<?= get_option("qs_contact_phone"); ?>"><?= get_option("qs_contact_phone"); ?></a></p>
					<p>Fax: <?= get_option("qs_contact_fax"); ?></p>

                    <?php $post = get_post(25); $content = apply_filters('the_content', $post->post_content); echo $content;?>
			
	            </div>
 
				<div class="office-btn">
					<div class="map1">
						<a href="#" class="pan-to-marker" data-marker-index="0">View On Map</a> <!-- Show On Map -->
					</div>
					<div class="map2">
						<a href="https://www.google.com/maps/place/South+Shore+Cardiovascular+Med:+Kumar+Raman+MD/@40.676059,-73.416459,17z/data=!3m1!4b1!4m2!3m1!1s0x89e9d4ffb8fd8be3:0x41dc0c4fb92f058b" class="mobile">View On Map</a>
					</div>
					<div>
						<a class="email" data-toggle="modal" data-target="#email-modal">Email Us</a>
					</div>
		 		</div><!-- /.office-btn -->
	 		</div><!-- /.office1 -->

	 		<!-- Office Two -->
	 		<div id="office2" class="office2">
				<h2><?php $post = get_post(27); $title = apply_filters('the_title', $post->post_title); echo $title;?></h2>
				<div class="info">

					<p><?= get_option('qs_contact_street2'); ?><br>
	                <?= get_option('qs_contact_city2'); ?>, 
	                <?= get_option('qs_contact_state2'); ?> 
	                <?= get_option('qs_contact_zip2'); ?><br></p>
					<p>Tel: <a href="tel:<?= get_option("qs_contact_phone2"); ?>"><?= get_option("qs_contact_phone2"); ?></a></p>
					<p>Fax: <?= get_option("qs_contact_fax2"); ?></p>

                    <?php $post = get_post(27); $content = apply_filters('the_content', $post->post_content); echo $content;?>

		 			
				</div>

				<div class="office-btn">
					<div class="map1">
						<a href="#" class="pan-to-marker infoWindow" data-marker-index="1">View On Map</a> <!-- Show On Map -->
					</div>
					<div class="map2">
						<a href="https://www.google.com/maps/place/South+Shore+Cardiovascular+Med:+Ruisi+John+A+MD/@40.676059,-73.416459,17z/data=!3m1!4b1!4m2!3m1!1s0x89e9d4ffb8fd8be3:0xc313259a3a4e2e85" class="mobile">View On Map</a>
					</div>
					<div>
						<a class="email" data-toggle="modal" data-target="#email-modal">Email Us</a>
					</div>
		 		</div><!-- /.office-btn -->

			</div><!-- /.office2 -->
	 	</div>
	 	
	 	<div class="map">
 			<div id="map">
				<img src="#" alt="Static fallback image showing the location of South Shore Cardiovascular, West Islip"/>
			</div>
 		</div>
	</section>

	<!-- Email Modal -->
	<div class="modal fade" id="email-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	        <h3 class="modal-title main" id="myModalLabel">Contact Us</h3>
	      </div>
	      <div class="modal-body">
	      	<?php $post = get_post(31); $content = apply_filters('the_content', $post->post_content); echo $content;?>
	      </div>
	    </div>
	  </div>
	</div>

<?php 
	// No comments on homepage
	//comments_template();
?>

<?php get_footer(); ?>