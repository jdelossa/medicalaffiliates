<footer>
    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="separator line-separator"></div>
                    <p>Winthrop Medical Affiliates</p>
                    <p>©<?php echo date('Y')?> - Winthrop University Hospital - <a href="/../wp-content/uploads/sites/3/2016/02/Pisciotto-Practice-Privacy-Notice-Updated-for-Fundraising.pdf" target="_blank">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </div>

</footer>
		
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="//cdn.rawgit.com/noelboss/featherlight/1.3.5/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory');?>/library/js/smoothscroll.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory');?>/library/js/bootstrap.js"></script>
		<script>$('#locations a:first').tab('show')</script>
		<script>$('#garden-city').on('shown.bs.tab',function(){google.maps.event.trigger(window,'resize',{});})</script>
		<script type="text/javascript" src="<?php bloginfo('template_directory');?>/library/js/gmaps.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory');?>/library/js/main.js"></script>
	</body>

</html>