<!doctype html>  
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
	    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700%7CLato:700,900' rel='stylesheet' type='text/css'>

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<!-- IE8 fallback moved below head to work properly. Added respond as well. Tested to work. -->
			<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

        <!--[if lt IE 9]>
            <link href="<?php bloginfo('template_directory');?>/library/css/under-ie-9.css" rel="stylesheet">
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
	
	<body <?php body_class(); ?>>

		<div class="locations">
			<div class="container-fluid">
				<ul>
					<li class="pull-left"><a href="https://www.google.com/maps/place/Klinger+%26+Misra:+Klinger+Ronald+MD/@40.6695806,-73.4708324,12z/data=!4m5!1m2!2m1!1smassapequa+advanced+neurology+associates!3m1!1s0x89e9d560449e6145:0x17c16941c03c3605" target="_blank">Massapequa Office </a> | <a href="tel:<?= get_option("qs_contact_phone"); ?>"><?= get_option("qs_contact_phone"); ?></a></li>
					<li class="pull-right"><a href="https://www.google.com/maps/place/Dr.+Kenneth+Chao/@40.7251537,-73.6458145,14z/data=!4m5!1m2!2m1!1sadvanced+neurology+associates+garden+city!3m1!1s0x89c27d5b3d8d1225:0xdf0a3938d297b0da" target="_blank">Garden City Office </a> | <a href="tel:<?= get_option("qs_contact_phone2"); ?>"><?= get_option("qs_contact_phone2"); ?></a></li>
				</ul>
			</div>
		</div>

		<div class="header">
			<div class="container-fluid">
				<div class="navbar-brand">
					<a href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
					<a data-target="#menu-toggle" class="navbar-toggle" id="menu-toggle">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
				</div>

				<!-- Sidebar -->
		        <div id="sidebar-wrapper">

		            <ul class="sidebar-nav">
		                <li><a href="#about" class="about">About Us</a></li>
		                <li><a href="#insurance" class="insurance">Insurance</a></li>
						<li><a href="#contact" class="contact">Contact Us</a></li>
		            </ul>

		        </div>
		        <!-- /#sidebar-wrapper -->
			</div>
		</div> <!-- /.header -->


