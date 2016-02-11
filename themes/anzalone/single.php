<?php get_header(); ?>
<!--Page Container-->

<div id="wrapper">
	<div class="container-fluid">
	    <section id="single-doctor">
	    	<div class="content">

		    	<div class="row">
		           	<div class="col-sm-12">
						<h2 class="header">Dr. <?= get_the_title($ID); ?><span class="specialty"><?= get_post_meta($post->ID, 'wpcf-doc-special', true); ?></span></h2>
                        <div class="line-break"></div>
					</div>
				</div>

				<div class="row" id="padding-top" >
					<div class="col-md-4">
						<div class="img-container">
							<?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'img', 'img-circle' ) ); ?>
						</div>
						
						<div class="health-grades">
							<?php if (types_render_field("doc-health-grades", array('raw' => 'true'))): ?>
								<br><a class="btn btn-success" href="<?= types_render_field("doc-health-grades", array('raw' => 'true')); ?>">View My Profile on Health Grades</a>
							<?php endif; ?>
						</div>

						<div class="vitals">
							<?php if (types_render_field("doc-vitals", array('raw' => 'true'))): ?>
								<br><a class="btn btn-success" href="<?= types_render_field("doc-vitals", array('raw' => 'true')); ?>">View My Profile on Vitals</a>
							<?php endif; ?>
						</div>

						<div class="doc-hours">
							<?php if (types_render_field("doc-hours", array('raw' => 'true'))): ?>
								<h3>Doctor Office Hours</h3>
								<h5><?= get_post_meta($post->ID, 'wpcf-doc-location', true); ?></h5>
								<p><?= types_render_field("doc-hours", array('raw' => 'true')); ?></p>
							<?php endif; ?>
						</div>
					</div>

					<div class="col-md-8 profile">
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

						<hr>
				
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><?php the_content(); ?>
						<?php endwhile; else: ?>
							<p><?php _e('Sorry, this page does not exist.'); ?></p>
						<?php endif; ?>
					</div><!--/.col-md-8 -->
				</div> <!--/.row -->
			</div><!-- /.content -->
		</section>
	</div>
</div>
		
<?php get_footer(); ?>