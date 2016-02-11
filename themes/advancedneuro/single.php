<?php get_header(); ?>
<!--Page Container-->

<div id="wrapper" class="doctor-page">
	
	<a data-target="#menu-toggle" class="navbar-toggle" id="menu-toggle">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</a>

	<div id="page-content-wrapper">
		<div class="container-fluid">

			<!-- Single Doctor Content -->
			<section id="single-doctor">
				<div class="row">
					<div class="col-md-12">
						<h2>Dr. <?= get_the_title($ID); ?><br><span class="header-info">Specializes in <?= get_post_meta($post->ID, 'wpcf-doc-special', true); ?></span></h2>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="img-container">
							<?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'img' ) ); ?>
							
							<div class="health-grades">
								<?php if (types_render_field("doc-health-grades", array('raw' => 'true'))): ?>
									<br><a class="btn btn-default btn-lg" href="<?= types_render_field("doc-health-grades", array('raw' => 'true')); ?>">View My Profile on Healthgrades</a>
								<?php endif; ?>
							</div>

							<div class="vitals">
								<?php if (types_render_field("doc-vitals", array('raw' => 'true'))): ?>
									<br><a class="btn btn-default btn-lg" href="<?= types_render_field("doc-vitals", array('raw' => 'true')); ?>">View My Profile on Vitals</a>
								<?php endif; ?>
							</div>
							<?php if (types_render_field("doc-hours", array('raw' => 'true'))): ?>
								<div class="doc-hours">
										<h4 class="text-center">Doctor Office Hours</h4>
										<h5><?= get_post_meta($post->ID, 'wpcf-doc-location', true); ?></h5>
										<p><?= types_render_field("doc-hours", array('raw' => 'true')); ?></p>
								</div>
							<?php endif; ?>
						</div>
					</div>

					<div class="col-md-8 profile">
						<p><b>Years of Experience: </b><?= types_render_field("doc-exp", array('raw' => 'true')) ;?></p>

						<?php if (types_render_field("doc-email", array('raw' => 'true'))) { ?>
							<p><b span="subtitle">Email: </b><?= types_render_field("doc-email", array('raw' => 'true')); ?></p>
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
						<div class="col-lg-12">
							<div class="separator line-separator"></div>
						</div>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><?php the_content(); ?>
					</div>
				</div><!-- /.row -->

				<div class="row">
					<div class="col-sm-4">
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
		</div>
	</div>
</div>
<?php get_footer(); ?>