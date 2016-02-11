<?php get_header(); ?>
<!--Page Container-->
<div class="margin-top container">
	<div class="row">
		<div class="col-md-12">
			<a href="<?php echo site_url(); ?>#doctor"> ← Back To Doctors</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="content">
				<div class="img-container">
					<?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'img-polaroid' ) ); ?>
					<div class="health-grades">
						<?php if (types_render_field("doc-health-grades", array('raw' => 'true'))): ?>
							<br><a class="btn btn-large" href="<?= types_render_field("doc-health-grades", array('raw' => 'true')); ?>">View My Profile on Health Grades</a>
						<?php endif; ?>
					</div> 
				</div>
			</div> 
		</div>
		<div class="col-md-8">
			<div class="content">
				<h2>Dr. <?= get_the_title($ID); ?></h2>

				<p><b>Years of Experience: </b><?= types_render_field("doc-exp", array('raw' => 'true')) ;?></p>

				<?php if (types_render_field("doc-email", array('raw' => 'true'))) { ?>
					<p><b>Email: </b><?= types_render_field("doc-email", array('raw' => 'true')); ?></p>
				<?php } ?>

				<?php if (types_render_field("doc-phone", array('raw' => 'true'))) { ?>
					<p><b>Phone: </b><a href="tel:<?= types_render_field("doc_phone"); ?>"><?= types_render_field("doc-phone", array('raw' => 'true')); ?></a></p>
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

				<?php if (types_render_field("doc-residency", array('raw' => 'true'))) { ?>
					<p><b>Residency: </b><?= types_render_field("doc-residency", array('raw' => 'true')); ?></p>
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
				<hr><p><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><?php the_content(); ?></p>
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

</div>
<?php get_footer(); ?>