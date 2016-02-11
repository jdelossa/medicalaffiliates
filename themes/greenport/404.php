<?php get_header(); ?>
			
			<div id="content" class="clearfix row">
			
				<div id="main" class="col-sm-12 clearfix" role="main">

					<article id="post-not-found" class="clearfix">
						
						<header>

							<div class="hero-unit">

                                <h2 class="text-center" style="margin-top: 40px; margin-bottom: 20px;"><?php _e("404 Error - Page Not Found","wpbootstrap"); ?></h2>
                                <div class="header-underline"></div>
															
							</div>
													
						</header> <!-- end article header -->
					
						<section class="post_content">

                            <p class="text-center">Go back <a href="<?php echo site_url(); ?>">home</a>. </p>

						</section> <!-- end article section -->
						
						<footer>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
			
				</div> <!-- end #main -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>