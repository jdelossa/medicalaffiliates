<!doctype html>  
<html>
	<head>
		<meta charset="utf-8">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=9"/>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  		<link href="<?php bloginfo('template_directory');?>/library/img/logo.png" rel="icon" type="image/png" >

	    <!-- Le Fonts -->
	    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700%7CLato:700,900' rel='stylesheet' type='text/css'>

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<!-- IE8 fallback moved below head to work properly. Added respond as well. Tested to work. -->
			<!-- media-queries.js (fallback) -->

        <!--[if lt IE 9]>
        <link href="<?php bloginfo('template_directory');?>/library/css/under-ie-9.css" rel="stylesheet">
        <![endif]-->

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
		
		<!-- respond.js -->
		<!--[if lt IE 9]>
		          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
		<![endif]-->
	</head>
	
	<body <?php body_class(); ?>>
		<div class="header-contact">
			<div class="container">
				<ul>
					<li class="pull-left"><a target="_blank" href="https://www.google.com/maps/place/South+Shore+Cardiovascular+Med/@40.676059,-73.416459,15z/data=!4m2!3m1!1s0x0:0x74b079e000a33bc4?sa=X&amp;ei=r39BVcPGIsyXNpD4gcgC&amp;ved=0CHEQ_BIwCw">Amityville, NY</a> | <a href="tel:<?php echo get_option('qs_contact_phone'); ?>"><?php echo get_option('qs_contact_phone'); ?></a></li>
					<li class="pull-right"><a target="_blank" href="https://www.google.com/maps/place/500+Montauk+Hwy,+West+Islip,+NY+11795/@40.6964162,-73.3091421,17z/data=!3m1!4b1!4m2!3m1!1s0x89e9d2cd2fd70dbb:0x8ba303a44f4519d7">West Islip, NY</a> | <a href="tel:<?php echo get_option('qs_contact_phone2'); ?>"><?php echo get_option('qs_contact_phone2'); ?></a></li>	
				</ul>
			</div>
		</div>

		<div class="navbar navbar-default navbar-fixed-top">
			<div class="container">
      
				<div class="navbar-header">
					<a class="title" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
				</div>

				<ul class="back"><li><a href="<?php echo site_url(); ?>#doctors">← Back To Doctors</a></li></ul>

				<div id="navbar">
					<ul class="navbar nav">
				        <li class="about"><a href="<?php echo site_url(); ?>#about">About</a></li>
				       	<li class="offices"><a href="<?php echo site_url(); ?>#offices">Offices</a></li>
				        <li id="contact-button"><a class="email" data-toggle="modal" data-target="#email-modal">Contact Us</a></li>
				    </ul>
				</div>
				
			</div> <!-- end .container -->
		</div> <!-- end .navbar -->
	
