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
    <link href='http://fonts.googleapis.com/css?family=Muli:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    

	<!-- wordpress head functions -->
	<?php wp_head(); ?>
	<!-- end of wordpress head -->

	<!-- html5.js -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->	
	
    <!-- respond.js -->
	<!--[if lt IE 9]>
	          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
	<![endif]-->

    <!--[if lt IE 9]>
        <link href="<?php bloginfo('template_directory');?>/library/css/under-ie-9.css" rel="stylesheet">
    <![endif]-->
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="" <?php body_class(); ?>>

	<div class="mobile-contact visible-xs">
		<div class="container-fluid">
	      <div class="row">
	         <div class="col-xs-12">
               <ul>
                  <li><a href="https://www.google.com/maps/place/847+N+Broadway,+North+Massapequa,+NY+11758/@40.6955625,-73.4644011,17z/data=!3m1!4b1!4m2!3m1!1s0x89e9d561f081ddeb:0x3760408eed0cdfc4"><i class="fa fa-location-arrow"></i> Open in Map</a></li>
                  <li><a href="tel:516-798-0445"><i class="fa fa-phone"></i> (516)798-0445</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>

    <div class="header-static-top">
		<div class="container-fluid">
		<a class="title" href="<?php echo site_url(); ?>"><h3>Vincent Anzalone <span class="small-header">Medical Services</span></h3></a>
		<div class="border-right"></div>
	 	<div class="header-logo">
	    	<img src="<?php bloginfo('template_directory');?>/library/img/winthrop.png" alt="Winthrop Univeristy Hospital">
		</div>
		</div>
	</div> <!-- end .header -->

    <div class="navbar navbar-static-top">
    	<div class="container-fluid">
         <ul id="navbar">
            <li class="about-us"><a href="#about-us" class="about">About Us</a></li>
            <li class="medical-staff"><a href="#medical-staff" class="medical-staff">Medical Staff</a></li>
            <li class="patient-information"><a href="#patient-information" class="patient-information">Patients</a></li>
            <li class="contact-us"><a href="#contact-us" class="contact">Contact Us</a></li>
         </ul>
      </div>
   </div>
