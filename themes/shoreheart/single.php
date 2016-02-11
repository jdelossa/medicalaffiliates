<?php get_header(); ?>
<!--Page Container-->
<div id="doctor-wrap" class="container">

	<!-- Doctor Title -->
	<div class="row-fluid">
		<div class="doc-header">
			<h2>Dr. <?= get_the_title($ID); ?></h2>
            <h4>Specializes in <?= get_post_meta($post->ID, 'wpcf-doc-special', true); ?></h4>
            <div class="separator line-separator-blue"></div>
		</div>
	</div>

	<!-- Doctor Image and Details -->
	<div class="row-fluid">
		<div class="col-md-4">
			<div class="content">
				<div class="img-container">
					<?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'img-thumbnail' ) ); ?>
					<div class="health-grades">
						<?php if (types_render_field("doc-health-grades", array('raw' => 'true'))): ?>
							<br><a class="btn btn-default" href="<?= types_render_field("doc-health-grades", array('raw' => 'true')); ?>" target="_blank">View My Profile on Healthgrades</a>
						<?php endif; ?>
					</div> 
				</div>
			</div> 
		</div>
		<div class="col-md-8 profile">
			<div class="content">
				<p><b>Years of Experience: </b><?= types_render_field("doc-exp", array('raw' => 'true')) ;?></p>

				<?php if (types_render_field("doc-email", array('raw' => 'true'))) { ?>
					<p><b>Email: </b><?= types_render_field("doc-email", array('raw' => 'true')); ?></p>
				<?php } ?>

				<?php if (types_render_field("doc-phone", array('raw' => 'true'))) { ?>
					<p><b>Phone: </b><a href="tel:<?= types_render_field("doc-phone", array('raw' => 'true')); ?>"><?= types_render_field("doc-phone", array('raw' => 'true')); ?></a></p>
				<?php } ?>

				<?php if (types_render_field("doc-undergrad", array('raw' => 'true'))) { ?>
					<p><b>Undergraduate: </b><?= types_render_field("doc-undergrad", array('raw' => 'true')); ?></p>
				<?php } ?>

				<?php if (types_render_field("doc-grad", array('raw' => 'true'))) { ?>
					<p><b>Graduate: </b><?= types_render_field("doc-grad", array('raw' => 'true')); ?></p>
				<?php } ?>

				<?php if (types_render_field("doc-fellow", array('raw' => 'true'))) { ?>
					<p><b>Fellowships: </b><?= types_render_field("doc-fellow", array('raw' => 'true')); ?></p>
				<?php } ?>

				<?php if (types_render_field("doc-intern", array('raw' => 'true'))) { ?>
					<p><b>Internships: </b><?= types_render_field("doc-intern", array('raw' => 'true')); ?></p>
				<?php } ?>

				<?php if (types_render_field("doc-societies", array('raw' => 'true'))) { ?>
					<p><b>Medical Societies: </b><?= types_render_field("doc-societies", array('raw' => 'true')); ?></p>
				<?php } ?>

				<?php if (types_render_field("doc-boards", array('raw' => 'true'))) { ?>
					<p><b>Board Certifications: </b><?= types_render_field("doc-boards", array('raw' => 'true')); ?></p>
				<?php } ?>

				<?php if (types_render_field("doc-affiliations", array('raw' => 'true'))) { ?>
					<p><b>Affiliations: </b><?= types_render_field("doc-affiliations", array('raw' => 'true')); ?></p>
				<?php } ?>
				<div class="separator line-separator"></div>
				<p><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><?php the_content(); ?></p>
			</div>
		</div>
	</div>

	<div class="row-fluid">
		<div class="col-md-4">
			<div class="doc-social">
				<?php if (types_render_field("doc-twitter", array('raw' => 'true'))): ?>
					<a href="<?= types_render_field("doc-twitter", array('raw' => 'true')); ?>"><div class="social twitter"></div></a>
				<?php endif; ?>

				<?php if (types_render_field("doc-facebook", array('raw' => 'true'))): ?>
					<a href="<?= types_render_field("doc-facebook", array('raw' => 'true')); ?>"><div class="social facebook"></div></a>
				<?php endif; ?>

				<?php if (types_render_field("doc-youtube", array('raw' => 'true'))): ?>
					<a href="<?= types_render_field("doc-youtube", array('raw' => 'true')); ?>"><div class="social youtube"></div></a>
				<?php endif; ?>

				<?php if (types_render_field("doc-google", array('raw' => 'true'))): ?>
					<a href="<?= types_render_field("doc-google", array('raw' => 'true')); ?>"><div class="social google"></div></a>
				<?php endif; ?>

				<?php if (types_render_field("doc-linkedin", array('raw' => 'true'))): ?>
					<a href="<?= types_render_field("doc-linkedin", array('raw' => 'true')); ?>"><div class="social linkedin"></div></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
	
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>

</div>

<!-- Modal -->
<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title" id="myModalLabel">Contact Us</h3>
            </div>

            <div class="modal-body">
                <h4>Our Office</h4>
                <p><?= get_option('qs_contact_street'); ?><br>
                    <?= get_option('qs_contact_city'); ?>,
                    <?= get_option('qs_contact_state'); ?>
                    <?= get_option('qs_contact_zip'); ?><br></p>

                <p><b>Phone: </b><a href="tel:<?= get_option("qs_contact_phone"); ?>"><?= get_option("qs_contact_phone"); ?></a></p>
                <p><b>Fax: </b><a href="tel:<?= get_option("qs_contact_fax"); ?>"><?= get_option("qs_contact_fax"); ?></a></p>

                <?php $post = get_post(711); $content = apply_filters('the_content', $post->post_content); echo $content;?>
                <p class="muted"><small>* Diagnostic Testing Only</small></p>


                <div class="separator line-separator"></div>

                <h4>E-Mail Us</h4>
                <?php $post = get_post(11); $content = apply_filters('the_content', $post->post_content); echo $content;?>
                <?= do_shortcode ('[contact-form-7 id="139" title="Contact form 1"]'); ?>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>