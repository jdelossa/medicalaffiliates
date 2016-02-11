        <footer>
			<div class="container">
				
				<div class="footer">
                    <div class="col-xs-12">
                        <div class="separator line-separator"></div>
                    </div>
                    <h4>Winthrop Medical Affiliates</h4>
		        	<p>© Copyright <?php echo date('Y');?> - Winthrop University Hospital</p>
		        </div>
		    </div>
        </footer>
		
		<?php wp_footer(); // js scripts are inserted using this function ?>
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory');?>/library/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory');?>/library/js/smoothscroll.js"></script>
		<!-- Menu Toggle Script -->
	    <script>
	    $("#menu-toggle").click(function(e) {
	        e.preventDefault();
	        $("#wrapper").toggleClass("toggled");
	    });
	    </script>
		<script type="text/javascript" src="<?php bloginfo('template_directory');?>/library/js/gmaps.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory');?>/library/js/main.js"></script>

        <!--[if lt IE 7 ]>
        <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
        <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
        <![endif]-->
		
	</body>

</html>