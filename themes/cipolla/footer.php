			<footer role="contentinfo">
				<div id="inner-footer" class="clearfix">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<!-- <h3><?php bloginfo('name'); ?></h3> -->
					
								<!-- <div class="footer-logo"><img src="<?php bloginfo('template_directory');?>/images/affiliate.png" alt="affiliate"></div> -->
								<p class="attribution">&copy; <?php echo date('Y')?> - Winthrop University Hospital</p>
							</div>
						</div>
					</div><!-- /container -->
				</div><!-- end #inner-footer -->
			</footer> <!-- end footer -->
		
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory');?>/library/js/scrollspy.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory');?>/library/js/smoothscroll.js"></script>
		
		<script>$('body').scrollspy()</script>
		<script type="text/javascript" src="<?php bloginfo('template_directory');?>/library/js/gmaps.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory');?>/library/js/main.js"></script>
		
	</body>

</html>