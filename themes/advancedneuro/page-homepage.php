<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<div class="jumbotron">
	<div class="cta-container">
		<div class="container-fluid">
			<div class="cta">
                <h3>The Best Neurology Doctors In Long Island</h3>
				<p><?php bloginfo('description'); ?></p>
                <a href="#about" class="btn">View Our Doctors</a>
			</div>
		</div>
	</div>
</div>

<div id="wrapper">
	
 	<div id="page-content-wrapper">

        <div id="overlap" class="container-fluid">

        	<!-- About Section -->
        	<section id="about">
            	<div class="row">
                	<div class="col-sm-9 col-centered">
            	
	                	<h3 style="margin-top: 40px;"><?php $post = get_post(2); $title = apply_filters('the_title', $post->post_title); echo $title;?> <br><span class="header-info">The Best Neurology Doctors In Long Island</span></h3>
	                	<?php $post = get_post(2); $content = apply_filters('the_content', $post->post_content); echo $content;?>

	                	<?php get_template_part('doctor-images'); ?>
				
                	</div> <!-- /.col-sm-12 -->
            	</div> <!-- /.row -->
            </section>

            <!-- Insurance Section -->
            <section id="insurance">
            	<div class="row">
                	<div class="col-sm-12">

                		<h3><?php $post = get_post(9); $title = apply_filters('the_title', $post->post_title); echo $title;?><br><span class="header-info">Our offices accept most insurance plans.</span></h3>
                        <div class="insurance">
                            <div class="insurances onenine"></div>
                            <div class="insurances aetna"></div>
                            <div class="insurances bluecross"></div>
                            <div class="insurances cigna"></div>
                            <div class="insurances emblemHealth"></div>
                            <div class="insurances fidelis"></div>
                            <div class="insurances healthFirst"></div>
                            <div class="insurances magnaCare"></div>
                            <div class="insurances medicare"></div>
                            <div class="insurances multiPlan"></div>
                            <div class="insurances oxford"></div>
                            <div class="insurances unhc"></div>
                            <div class="insurances vytra"></div>
                            <?php $post = get_post(9); $content = apply_filters('the_content', $post->post_content); echo $content;?>
                        </div>

                	</div> <!-- /.col-sm-12 -->
            	</div> <!-- /.row -->
            </section>



            <!-- Contact Section -->
            <section id="contact">
            	<div class="row">
               		<div class="col-sm-12">
                	
	                	<h3>Contact Us <br><span class="header-info">Two Convienent Office Locations</span></h3>

	                	<div class="map">

				 			<div id="map">
								<img src="#" alt="Static fallback image showing the location of South Shore Cardiovascular, West Islip"/>
							</div>

				 		</div>

				 	</div> <!-- /.col-sm-12 -->
            	</div> <!-- /.row -->

            	<div class="row">	
					<div class="col-sm-6">
						<h4 id="massapequa" class="contact"><?php $post = get_post(7); $title = apply_filters('the_title', $post->post_title); echo $title;?></h4>
						<address>
							<?= get_option('qs_contact_street'); ?><br>
							<?= get_option('qs_contact_city'); ?>,
							<?= get_option('qs_contact_state'); ?>
							<?= get_option('qs_contact_zip'); ?>
						</address>

						<p>Phone: <a href="tel:<?= get_option("qs_contact_phone"); ?>"><?= get_option("qs_contact_phone"); ?></a></p>
						<p>Fax: <a href="tel:<?= get_option("qs_contact_fax"); ?>"><?= get_option("qs_contact_fax"); ?></a></p><br>

                        <?php $post = get_post(7); $content = apply_filters('the_content', $post->post_content); echo $content;?>

				
					</div>
							
					<div class="col-sm-6">
						<h4 id="garden-city" class="contact"><?php $post = get_post(5); $title = apply_filters('the_title', $post->post_title); echo $title;?></h4>
						<address>
							<?= get_option('qs_contact_street2'); ?><br>
							<?= get_option('qs_contact_city2'); ?>,
							<?= get_option('qs_contact_state2'); ?>
							<?= get_option('qs_contact_zip2'); ?>
						</address>

						<p>Phone: <a href="tel:<?= get_option("qs_contact_phone2"); ?>"><?= get_option("qs_contact_phone2"); ?></a></p>
						<p>Fax: <a href="fax:<?= get_option("qs_contact_fax2"); ?>"><?= get_option("qs_contact_fax2"); ?></a></p><br>

                        <?php $post = get_post(5); $content = apply_filters('the_content', $post->post_content); echo $content;?>

				
					</div>

				</div><!-- /.row -->
   		    </section>

        
	    </div><!-- /.container-fluid -->

	</div><!-- /#page-content-wrapper -->

</div><!-- /#wrapper -->



<?php 
	// No comments on homepage
	//comments_template();
?>

<?php get_footer(); ?>