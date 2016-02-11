<!DOCTYPE html>  

<html <?php language_attributes(); ?> class="no-js">
	
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=9"/>
		<title><?php wp_title( '|', true, 'right' ); ?></title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  		<link href="<?php bloginfo('template_directory');?>/library/img/logo.png" rel="icon" type="image/png" >

  		<!-- Le Font Awesome!!! -->
	    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	    <!-- Le Fonts -->
	    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700%7CLato:300,400,700,900' rel='stylesheet' type='text/css'>

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<!-- IE8 fallback moved below head to work properly. Added respond as well. Tested to work. -->

		<!--[if lt IE 9]>
			<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/library/css/ie8-and-down.css" />
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>			
		<![endif]-->

	</head>
	
	<body data-target="#navbar" <?php body_class(); ?>>	

		<div class="mobile-contact visible-xs">
			<div class="container-fluid">
		      <div class="row">
		         <div class="col-xs-12">
	               <ul>
	                  <li><a href="https://www.google.com/maps/place/Kelt+Peter+a+MD/data=!4m2!3m1!1s0x89e8a27eb2624d45:0x2341b7ad8dac5f4?gl=US&amp;hl=en"><i class="fa fa-location-arrow"></i> Open in Map</a></li>
	                  <li><a href="tel:631-749-3149"><i class="fa fa-phone"></i> (631)749-3149</a></li>
	               </ul>
	            </div>
	         </div>
	      </div>
	   </div>
		
		<div class="header-fixed-top">
			<div class="container">
			<a class="title" href="<?php echo site_url(); ?>"><h3><?php bloginfo('name'); ?></h3></a>
		 	<div class="header-logo">
		    	<img src="<?php bloginfo('template_directory');?>/library/img/winthrop.png" alt="Winthrop Univeristy Hospital">
			</div>
			</div>
		</div> <!-- end .header -->

		<div class="container">
			<div class="navbar navbar-static-top">
				<ul id="navbar">
					<li class="about"><a href="#about" class="about">About Us</a></li>
					<li class="patient-information"><a href="#patient-information" class="patient-information">Patient Information</a></li>
					<li class="contact"><a href="#contact" class="contact">Contact Us</a></li>
				</ul>
			</div>
		</div>

	<div id="body" class="container">
