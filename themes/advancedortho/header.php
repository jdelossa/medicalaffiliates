<!DOCTYPE html>  
<html <?php language_attributes(); ?> class="no-js">
<head>
	<title><?php wp_title( '|', true, 'right' ); ?></title>	
    <meta http-equiv="X-UA-Compatible" content="IE=9">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link href="<?php bloginfo('template_directory');?>/library/img/logo.png" rel="icon" type="image/png" >

	<!-- Le Font Awesome!!! -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Le Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700%7CLato:700,900' rel='stylesheet' type='text/css'>

	<!-- wordpress head functions -->
	<?php wp_head(); ?>
	<!-- end of wordpress head -->

	<!--[if lt IE 9]>
	    <script src="<?php bloginfo('template_directory'); ?>/assets/scripts/html5.js"></script>
	    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
	    <script src="<?php bloginfo('template_directory'); ?>/assets/scripts/respond.min.js"></script>
	    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/ie.css" type="text/css"/>
	    <link href="<?php bloginfo('template_directory');?>/library/css/under-ie-9.css" rel="stylesheet">
	    <div class="alert alert-warning">
	  		<?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.'); ?>
	    </div>
    <![endif]-->

</head>

<body <?php body_class(); ?>>
			
	<div class="header-contact">
		<div class="container">
			<ul>
				<li class="pull-left"><a target="_blank" href="https://www.google.com/maps/place/2000+N+Village+Ave+%23306,+Rockville+Centre,+NY+11570/@40.6867455,-73.6340522,17z/data=!3m1!4b1!4m2!3m1!1s0x89c27cc0eed2990b:0x822483e5c946c867">Rockville Centre, NY</a> | <a href="tel:<?php echo get_option('qs_contact_phone'); ?>"><?php echo get_option('qs_contact_phone'); ?></a></li>
				<li class="pull-right"><a target="_blank" href="https://www.google.com/maps/place/601+Franklin+Ave+%23215,+Garden+City,+NY+11530/@40.7240625,-73.6325535,17z/data=!3m1!4b1!4m2!3m1!1s0x89c27d3f830e2ed9:0xdfd5639f1b808c62">Garden City, NY</a> | <a href="tel:<?php echo get_option('qs_contact_phone2'); ?>"><?php echo get_option('qs_contact_phone2'); ?></a></li>	
			</ul>
		</div>
	</div>
		
	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container">
  
			<div class="navbar-header">
				<a class="title" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
			</div>

			<div class="single-nav">

				<ul class="back"><li><a href="<?php echo site_url(); ?>#medical-staff">← Back To Doctors</a></li></ul>

				<div id="navbar">
					<ul class="navbar nav">
				       	<li class="about"><a href="#about" class="tab-about">About</a></li>
				       	<li class="medical-staff"><a href="#medical-staff-rc" class="tab-staff">Medical Staff</a></li>
				        <li class="contact-button"><a href="#contact-rc" class="tab-contact">Contact Us</a></li>
				    </ul>
				</div>

			</div>
		</div> <!-- end .container -->
	</div> <!-- end .navbar -->
