<!doctype html>  
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=9"/>	
	<title><?php wp_title( '|', true, 'right' ); ?></title>	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link href="<?php bloginfo('template_directory');?>/library/img/logo.png" rel="icon" type="image/png" >

	<!-- Lightbox -->
	<link href="//cdn.rawgit.com/noelboss/featherlight/1.3.5/release/featherlight.min.css" type="text/css" rel="stylesheet" />

	<!-- Le Font Awesome!!! -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Le Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700%7CLato:700,900' rel='stylesheet' type='text/css'>

	<!-- wordpress head functions -->
	<?php wp_head(); ?>
	<!-- end of wordpress head -->

    <!--[if lt IE 9]>
        <link href="<?php bloginfo('template_directory');?>/library/css/under-ie-9.css" rel="stylesheet">
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
		<div class="alert alert-warning">
			<?php echo('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.'); ?>
		</div>
    <![endif]-->
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="" <?php body_class(); ?>>
		
	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container">
  
			<div class="navbar-header">
				<a class="title" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
                <img class="pull-right logo" src="<?php bloginfo('template_directory');?>/library/img/winthrop-medical-affiliates.png" alt="Winthrop Image">
            </div>

            <div id="navbar">
                <ul class="navbar nav navbar-left">
                    <li><a href="#home" class="home">Home</a></li>
                    <li><a href="#about" class="about">About</a></li>
                    <li><a href="#physicians" class="physicians">Physicians</a></li>
                    <li><a href="#insurance" class="accepted-insurance">Insurance</a></li>
                    <li><a href="#offices" class="contact-button">Contact</a></li>
                </ul>
            </div>

		</div> <!-- end .container -->
	</div> <!-- end .navbar -->
