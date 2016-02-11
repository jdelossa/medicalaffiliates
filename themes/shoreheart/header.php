<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?php wp_title( '|', true, 'right' ); ?></title>	
	<meta http-equiv="X-UA-Compatible" content="IE=9"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link href="<?php bloginfo('template_directory');?>/library/images/logo.png" rel="icon" type="image/png" >

	<!-- Le Font Awesome!!! -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Le Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700%7CLato:700,900' rel='stylesheet' type='text/css'>

	<!-- wordpress head functions -->
	<?php wp_head(); ?>
	
	<!-- end of wordpress head -->
    <!--[if lt IE 9]>
    <link href="<?php bloginfo('template_directory');?>/library/ie/under-ie-9.css" rel="stylesheet">
    <![endif]-->

    <!--[if lte IE 7]>
    <link href="<?php bloginfo('template_directory');?>/library/ie/ie-7-only.css" rel="stylesheet">
    <![endif]-->

	<!-- IE8 fallback moved below head to work properly. Added respond as well. Tested to work. -->
		<!-- media-queries.js (fallback) -->
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
	<![endif]-->

	<!-- html5.js -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->	
	
		<!-- respond.js -->
	<!--[if lt IE 9]>
	          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
	<![endif]-->	
</head>
<body <?php body_class(); ?> data-spy="scroll" data-target=".nav">

<!--Mobile Device Call To Action-->
<div class="mobile-action">
  <div class="buttons">
    <div style="margin-left: 0.5%;">
      <a href="tel:516-763-2800"><i class="fa fa-phone"></i> Call Us</a>
    </div>
    <div>
      <a href="https://www.google.com/maps/place/South+Shore+Heart+Associates/@40.656141,-73.646837,15z/data=!4m2!3m1!1s0x0:0xe85dcce32705fd9f?sa=X&amp;ei=B5lKVM6XC4eYyQS2rYDoAQ&amp;ved=0CHgQ_BIwCg" target="_blank"><i class="fa fa-map-marker"></i> Rockville Centre, NY</a>
    </div>
  </div>
</div>

<!-- Navbar fixed top -->	
<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<!-- Mobile Navigation -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!-- title -->
			<div class="header">
		      <a class="title" href="<?php echo site_url(); ?>"><h3><?php bloginfo('name'); ?></h3></a>
		    </div>
		</div>

		<div class="collapse navbar-collapse navbar-responsive-collapse">
			<ul class="back">
				<li><a href="<?php echo site_url(); ?>#doctors">← Back To Doctors</a></li>
			</ul>

	        <ul class="nav">
	          <li><a href="#about" class="about">About Us</a></li>
	          <li><a href="#doctors" class="doctors">Our Doctors</a></li>
	          <li id="contact-button"><a href="#contact" class="contact">Contact Us</a></li>
	        </ul><!--/.nav -->
		</div>

	</div> <!-- end .container -->
</div> <!-- end .navbar -->
	
