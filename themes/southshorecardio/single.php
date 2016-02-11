<?php get_header(); ?>
<!--Page Container-->
<section id="doctor-page">
<div class="margin-top container">
	<div class="row">
		<div class="col-md-12">
			<div class="doc-header content">
				<h2 class="doc-title">Dr. <?= get_the_title($ID); ?></h2>
				<h5>Specializes in <?= get_post_meta($post->ID, 'wpcf-doc-special', true); ?></h5>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-4">
			<div class="content">
				<div class="img-container">
					<?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'img' ) ); ?>
					
					<div class="health-grades">
						<?php if (types_render_field("doc-health-grades", array('raw' => 'true'))): ?>
							<br><a class="btn btn-default btn-lg" target="_blank" href="<?= types_render_field("doc-health-grades", array('raw' => 'true')); ?>">View My Profile on Healthgrades</a>
						<?php endif; ?>
					</div>
					<div class="vitals">
						<?php if (types_render_field("doc-vitals", array('raw' => 'true'))): ?>
							<br><a class="btn btn-default btn-lg" target="_blank" href="<?= types_render_field("doc-vitals", array('raw' => 'true')); ?>">View My Profile on Vitals</a>
						<?php endif; ?>
					</div> 
				</div>
			</div> 
		</div>
		<div class="col-md-8">
			<div class="content">
				<div class="doctor-info">
					<p><b>Specializes in </b><?= get_post_meta($post->ID, 'wpcf-doc-special', true); ?></p>
				</div>
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
				<div class="col-md-12">
					<hr>
				</div>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><?php the_content(); ?>
			</div>
		</div>
	</div>

	<div class="row">
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
                    <?php $post = get_post(11); $content = apply_filters('the_content', $post->post_content); echo $content;?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>