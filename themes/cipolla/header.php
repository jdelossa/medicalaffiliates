<!DOCTYPE html>  
<html>
<html <?php language_attributes(); ?> class="no-js">
	
	<head>
		<meta charset="utf-8">
        <title><?php wp_title( '|', true, 'right' ); ?></title> 
        <meta http-equiv="X-UA-Compatible" content="IE=9">
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
        <!--[if lt IE 9]>
            <link href="<?php bloginfo('template_directory');?>/library/css/under-ie-9.css" rel="stylesheet">
        <![endif]-->
		<!-- end of wordpress head -->


		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->	
		
			<!-- respond.js -->
		<!--[if lt IE 9]>
		          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
		<![endif]-->	
	</head>
	
	<body data-target="#navbar" data-offset="" <?php body_class(); ?>>

		<header role="banner">

            <div class="container">

                <div class="header-fixed-top">

                    <div class="container">

                        <a class="title" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>

                        <div class="header-logo">
                            <img src="<?php bloginfo('template_directory');?>/library/img/winthrop-medical-affiliates.png" alt="Winthrop Medical Affiliates">
                        </div>

                    </div><!-- /.container -->

                </div>

            </div>

		</header> <!-- end header -->

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top container" role="navigation">
            <ul class="nav navbar-nav">
                <li class="about-border">
                    <a href="#about" class="about-nav">About</a>
                </li>
                <li class="medical-border">
                    <a href="#medical-staff" class="medical-staff-nav">Medical Staff</a>
                </li>
                <li class="insurance-border">
                    <a href="#insurance" class="insurance-nav">Insurance</a>
                </li>
                <li class="contact-border">
                    <a href="#contact" class="contact-nav">Contact Us</a>
                </li>
            </ul>
        </nav>
