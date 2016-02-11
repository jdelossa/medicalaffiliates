<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
        <meta content="yes" name="apple-mobile-web-app-capable" />
        <meta content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" name="viewport" />
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

  		<!-- Page Icon -->
  		<link href="<?php bloginfo('template_directory');?>/library/img/logo.png" rel="icon" type="image/png">
		
  		<!-- Le Font Awesome!!! -->
	    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	    <!-- Le Fonts -->
	    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700%7CLato:700,900' rel='stylesheet' type='text/css'>

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- ie8-and-down.css -->
		<!--[if lt IE 9]>
			<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/library/css/ie8-and-down.css" />
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
	
	<body data-spy="scroll" data-target=".navbar-fixed-top" <?php body_class(); ?>>

		<div class="header-contact">
			<div class="container">
				<ul>
					<li class="pull-left"><a target="_blank" href="https://www.google.com/maps/place/East+End+Cardiology/@40.933264,-72.648901,17z/data=!3m1!4b1!4m2!3m1!1s0x89e88b17a30f2a75:0xe61d4d3cc4cf5c34">Riverhead, NY</a> | <a href="tel:<?php echo get_option('qs_contact_phone'); ?>"><?php echo get_option('qs_contact_phone'); ?></a></li>
					<li class="pull-right"><a target="_blank" href="https://www.google.com/maps/place/East+End+Cardiology+PC/@41.110391,-72.361276,17z/data=!3m1!4b1!4m2!3m1!1s0x89e89f30b7acfe85:0x9ad4d333487f00d5">Greenport, NY</a> | <a href="tel:<?php echo get_option('qs_contact_phone2'); ?>"><?php echo get_option('qs_contact_phone2'); ?></a></li>	
				</ul>
			</div>
		</div>
		
		<!-- Navigation -->
	    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	        <div class="container">
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
	            </div>

	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <div class="collapse navbar-collapse navbar-ex1-collapse">
	                <ul class="nav navbar-nav navbar-right">
	                    <li>
	                        <a href="#about" class="about">About</a>
	                    </li>
	                    <li>
	                        <a href="#doctors" class="doctors">Doctors</a>
	                    </li>
	                    <li>
	                        <a href="#patient-info" class="patient-info">Patients</a>
	                    </li>
	                    <li>
	                        <a href="#contact" class="contact">Contact</a>
	                    </li>
	                </ul>
	            </div>
	            <!-- /.navbar-collapse -->
	        </div>
	        <!-- /.container -->
	    </nav>
