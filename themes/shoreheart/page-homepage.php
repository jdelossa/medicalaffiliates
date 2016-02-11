<?php
/*
Template Name: Home Page Template
*/
?>
<?php get_header(); ?>

<!--HERO UNIT-->
<div id="home">
	<div class="cta container">
		<div class="cta-container">
		    <div class="cta animated fadeInUp" style="visibility: visible;">
		        <h2>Unconditional Care For Your Heart</h2>
		        <p><?php bloginfo('description'); ?></p>
		        <div class="cta-bg">
			        <ul>
			            <li><a data-toggle="modal" href="<?php echo site_url(); ?>#contact">Make an Appointment</a></li>
			            <li><a href="#doctors">Meet Our Doctors</a></li>
			        </ul>
		        </div>
		    </div>
		</div>
	</div>
	<div class="cta-logo">
    	<img src="<?php bloginfo('template_directory');?>/library/images/affiliate.png" alt="Affiliates">
    </div>
</div>

<!-- Page Container -->
<div id="wrap" class="container">

	<!-- About Section -->
	<section id="about">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<div class="full-text-margin">
				    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						  	<?php the_content(); ?>
						<?php endwhile; else: ?>
							<p><?php _e('Sorry, this page does not exist.'); ?></p>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="separator line-separator"></div>

	<!-- Doctor Section -->
	<section id="doctors">
			<div class="row">
				<div class="col-md-12">
					<div class="content">
						<div class="full-text-margin">
							<div class="main">
								<h2 style="text-align: center;">
									<?php $post = get_post(13); $title = apply_filters('the_title', $post->post_title); echo $title;?>
								</h2>
							</div>
							<?php $post = get_post(13); $content = apply_filters('the_content', $post->post_content); echo $content;?>
						</div>
							<!-- Doctor Images -->
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

                                $args = array(
                                    'post_type' => 'post',
                                    'category' => '2',
                                    'order' => 'ASC',
                                    'numberposts' => 100
                                );
                                $posts = get_posts( $args );
                                $count = 0;
                                if ($post):
                                    foreach ( $posts as $post ):

                                        $count++;

                                        if ($count % 3 == 1):
                                            echo '<div class="custom-row">';
                                        endif; ?>

                                        <div class="one-third">
                                            <div class="doctor-card">
                                                <a href="<?php the_permalink(); ?>"><?= get_the_post_thumbnail( $post->ID, 'full', array ('class' => 'img-thumbnail')); ?>
                                                    <h4 class="doctor-name"><?= $post->post_title; ?></h4>
                                                </a>
                                                <span class="doctor-specialty"><?= get_post_meta($post->ID, 'wpcf-doc-special', true); ?></span>
                                            </div>
                                        </div>

                                        <?php

                                        if ($count % 3 == 0 ):
                                            echo '</div>';
                                        endif;

                                    endforeach;

                                    echo '</div>';
                                endif;

                            endwhile;
                            endif;
                            ?>
					</div>
				</div><!--/.span12 -->
			</div> <!--/.row-fluid -->
	</section>

	<div class="separator line-separator"></div>

	<!-- Services Section -->
	<section id="services">
		<div class="row">
			<div class="services">
				<div class="content">
					<div class="custom-row">
						<!-- service 1 -->
						<div class="one-third">
						<i class="fa fa-heart fa-3x"></i>
							<?php $post = get_post(5); $content = apply_filters('the_content', $post->post_content); echo $content;?>
						</div>

						<!-- service 2 -->
						<div class="one-third">
						<i class="fa fa-medkit fa-3x"></i>
							<?php $post = get_post(7); $content = apply_filters('the_content', $post->post_content); echo $content;?>
						</div>

						<!-- service 3 -->
						<div class="one-third full-width">
						<i class="fa fa-user-md fa-3x"></i>
							<?php $post = get_post(9); $content = apply_filters('the_content', $post->post_content); echo $content;?>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- /.row-fluid -->
	</section>

	<!-- Insurance Section -->
	<section id="insurance">
		<div id="insurance-container" class="content">
			<div class="main"><h2><?php $post = get_post(11); $title = apply_filters('the_title', $post->post_title); echo $title;?></h2></div>
			<div class="insurances aetna"></div>
			<div class="insurances bluecross"></div>
			<div class="insurances cigna"></div>
			<div class="insurances hip"></div>
			<div class="insurances magnaCare"></div>
			<div class="insurances medicare"></div>
			<div class="insurances multiPlan"></div>
			<div class="insurances oxford"></div>
			<div class="insurances unhc"></div>
			<div class="insurances vytra"></div>
            <?php $post = get_post(11); $content = apply_filters('the_content', $post->post_content); echo $content;?>
		</div>
	</section>

	<div class="separator line-separator"></div>
		
</div><!-- /.container -->

<?php get_footer(); ?>