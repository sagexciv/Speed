<?php
$assets_link = base_url().'assets/';
$al = $assets_link;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="Covenant University Alumni Association">
    <link rel="shortcut icon" href="<?php echo $al; ?>img/favicon.png">

    <title>Covenant University Alumni </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $al?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $al; ?>css/theme.css" rel="stylesheet">
    <link href="<?php echo $al; ?>css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo $al ?>font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo $al; ?>css/flexslider.css"/>
    <link href="<?php echo $al; ?>bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link href="<?php echo $al; ?>fancybox/source/jquery.fancybox.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?php echo $al; ?>revolution_slider/css/rs-style.css" media="screen">
    <link rel="stylesheet" href="<?php echo $al; ?>revolution_slider/rs-plugin/css/settings.css" media="screen">

    <!-- Custom styles for this template -->
    <link href="<?php echo $al; ?>css/style.css" rel="stylesheet">
    <link href="<?php echo $al; ?>css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!--header start-->
    <header class="header-frontend">
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">CU <span>Alumni</span></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo base_url() ?>">Home</a></li>
                        <li><a href="<?php echo base_url('about') ?>">About</a></li>
                        <li><a href="<?php echo base_url('news') ?>">News</a></li>
                        <li><a href="#<?php //echo base_url('events') ?>">Events</a></li>
                        <li class="dropdown ">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">
                            	Chapters <b class=" icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="typography.html">Lagos</a></li>
                                <li><a href="button.html">Abuja</a></li>
                                <li><a href="button.html">UK</a></li>
                            </ul>
                        </li>
                        
                        <li class="dropdown ">
                            <a href="<?php echo base_url('groups') ?>" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">
                            	Groups <b class=" icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="typography.html">HOPE</a></li>
                                <li><a href="button.html">SBU</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="contact.html">Contact</a></li>
                        <li>
                        	<form method="get" action="<?php echo base_url() ?>site_search">
                                 	<input name="s" type="text" placeholder=" Search" class="form-control search"> 		
                        	</form>	
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--header end-->
