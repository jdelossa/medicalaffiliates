<?php get_header(); ?>
<!--Page Container-->

<section id="single" class="doctor-page">

	<div class="doctor-title">
		<h2>Dr. <?= get_the_title($ID); ?></h2>
		<div class="doctor-info">
			<h5>Specializes in <?= get_post_meta($post->ID, 'wpcf-doc-special', true); ?></h5>
		</div>
		<div class="header-underline"></div>
	</div>

	<div class="row">
		<div class="profile col-md-4">
			<div class="img-single">
				<?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'img-single' ) ); ?>
			</div>
			<div class="health-grades">
				<?php if (types_render_field("doc-health-grades", array('raw' => 'true'))): ?>
					<br><a class="btn btn-default" href="<?= types_render_field("doc-health-grades", array('raw' => 'true')); ?>" target="_blank">View My Profile on Healthgrades</a>
				<?php endif; ?>
			</div>

			<div class="vitals">
				<?php if (types_render_field("doc-vitals", array('raw' => 'true'))): ?>
					<br><a class="btn btn-default" href="<?= types_render_field("doc-vitals", array('raw' => 'true')); ?>" target="_blank">View My Profile on Vitals</a>
				<?php endif; ?>
			</div>
		</div>

		<div class="col-md-8" style="text-align: left;">
			<div class="content">
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
				<div class="line-separator separator"></div>
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
</section>


<?php get_footer(); ?>