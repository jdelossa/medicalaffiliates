<footer class="footer"> 
	<div class="container"> 
	  <div class="row-fluid">
	    <div class="col-md-6">
	      <div class="footer-logo">
	        <a href="http://www.winthrop.org" target="_blank"><img src="<?php bloginfo('template_directory');?>/library/img/affiliate.png" alt="affliate"></a>
	      </div>
	    </div>
	    <div class="col-md-6">
	      <p>©<?php echo date('Y')?> - Winthrop University Hospital</p>
	    </div>
	  </div>
	</div>
</footer> <!-- end footer -->
		
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory');?>/library/js/smoothscroll.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory');?>/library/js/bootstrap.js"></script>
		<script>$('#locations a:first').tab('show')</script>
		<script>$('#garden-city').on('shown.bs.tab',function(){google.maps.event.trigger(window,'resize',{});})</script>
		<script type="text/javascript" src="<?php bloginfo('template_directory');?>/library/js/gmaps.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory');?>/library/js/main.js"></script>
	</body>

</html>