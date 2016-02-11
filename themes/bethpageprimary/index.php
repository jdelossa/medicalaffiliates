<?php get_header(); ?>
<div class="sub-header">
	<div class="container">
		<div id="single-doctor" class="page-title text-center">
			<h2>Dr. <?= get_the_title($ID); ?></h2>
            <h5>Specializes in <?= get_post_meta($post->ID, 'wpcf-doc-special', true); ?></h5>
		</div>
	</div>
</div>

<!--Page Container-->
<div class="container push-footer margin-top">
	
	<div class="row-fluid">
		<div class="span4">
			<div class="content">
				<div class="img-container">
					<?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'img-polaroid' ) ); ?>
					<div class="health-grades">
						<?php if (types_render_field("doc-health-grades", array('raw' => 'true'))): ?>
							<br><a class="btn btn-large" href="<?= types_render_field("doc-health-grades", array('raw' => 'true')); ?>" target="_blank">View My Profile on Healthgrades</a>
						<?php endif; ?>
					</div> 
				</div>
			</div> 
		</div>
		<div class="span8 profile">
			<div class="content">
                <?php the_content(); ?>
				<?php if (types_render_field("doc-email", array('raw' => 'true'))) { ?>
					<p><b>Email: </b><a href="mailto:<?= types_render_field("doc-email", array('raw' => 'true')); ?>"><?= types_render_field("doc-email", array('raw' => 'true')); ?></a></p>
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
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><?php the_content(); ?>
			</div>
		</div>
	</div>

	<?php endwhile; else: ?>
	<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>
</div>
<?php get_footer(); ?>