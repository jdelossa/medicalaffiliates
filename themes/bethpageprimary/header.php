<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bethpage Primary Medical Care</title>
    <meta http-equiv="X-UA-Compatible" content="IE=9"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link href="<?php bloginfo('template_directory');?>/img/logo.png" rel="icon" type="image/png">


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!--[if lt IE 9]>
      <link href="<?php bloginfo('template_directory');?>/ie/under-ie-9.css" rel="stylesheet">
    <![endif]-->

    <!--[if lte IE 7]>
        <link href="<?php bloginfo('template_directory');?>/ie/ie-7-only.css" rel="stylesheet">
    <![endif]-->

     <!--[if IE 7]>
        <link href="<?php bloginfo('template_directory');?>/font-awesome/font-awesome-ie7.min.css" rel="stylesheet">
    <![endif]-->


    <link href="<?php bloginfo('template_directory');?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">

    <!-- Le Font Awesome!!! -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Le Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700%7CLato:700,900' rel='stylesheet' type='text/css'>

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>

</head>
<body>

<!-- Mobile CTA buttons -->
<div class="mobile-action">
  <div class="buttons">
    <div>
      <a href="tel:<?php echo get_option('qs_contact_phone'); ?>"><i class="fa fa-phone"></i> Call Us</a>
    </div>
    <div>
      <a href="https://www.google.com/maps/place/Bethpage+Primary+Medical+Care/@40.739182,-73.494536,17z/data=!3m1!4b1!4m2!3m1!1s0x89c2806bfe514321:0x26586ffdf9358195?hl=en-US"><i class="fa fa-map-marker"></i> Bethpage, NY</a>
    </div>
  </div>
</div>

<!-- Navbar-fixed-top -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    
    <div class="navbar-header">
     <button class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    <!-- Site Title -->
    <a class="title" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
    </div>
    
    <!-- Navigaation Bar-->
    <div class="nav-collapse collapse">
      <ul class="nav navbar-nav">
        <?php wp_list_pages(array('title_li' => '', 'include' => '2, 13, 15')); ?>
      </ul>
    </div>

  </div>
</div>