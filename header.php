<!DOCTYPE html>
<html class="no-js">

  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8"/>
    <title>LRDS - Los Rodriguez De Sinaloa</title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="">

    <!-- Mobile Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" /> 
    
    <!-- Web App Metas
    ================================================== -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    <!-- Touch Icons
    ================================================== -->
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/icon.png"/>
    <link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/splash.png" />

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mobile.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/formalize.css">

    <!-- JS
    ================================================== -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script>

    <!-- WP
    ================================================== -->
    <?php wp_head(); ?>

  </head>

  <body>
    <!-- =============================================================================
     Container
    ============================================================================= -->
    <div class="container" name="top">
      
      <!-- =============================================================================
        Side Bar
      ============================================================================== -->
      <div class="sideBar">
        
        <!-- Logo
        ---------------------->
        <div class="logoarea">
          <div class="logo">
            <a href="#">
              <h1> LRDS - Los Rodriguez de Sinaloa </h1>
            </a>
          </div>
        </div>

        <!-- Text Active Bar
        ---------------------->
        <div id="textActiveBar">
          <ul>
            <li id="texthome" class="ralelight liActive">Home</li>
            <li id="textstore" class="ralelight liNoActive">Store</li>
            <li id="textshows" class="ralelight liNoActive">Shows</li>
            <li id="textabout" class="ralelight liNoActive">About</li>
            <li id="textsubscribe" class="ralelight liNoActive">Rss</li>
          </ul>
        </div>

        <!-- Navigation Bar
        ---------------------->
        <div class="navBar">
          <ul>
            <li class="navButton activeNav"><a class="home"><img src="<?php echo get_template_directory_uri(); ?>/img/nav-icon-home.png"></a></li>
            <li class="divider"></li>
            <li class="navButton"><a class="store"><img src="<?php echo get_template_directory_uri(); ?>/img/nav-icon-store.png"></a></li>
            <li class="divider"></li>
            <li class="navButton"><a class="shows"><img src="<?php echo get_template_directory_uri(); ?>/img/nav-icon-shows.png"></a></li>
            <li class="divider"></li>
            <li class="navButton"><a class="about"><img src="<?php echo get_template_directory_uri(); ?>/img/nav-icon-about.png"></a></li>
            <li class="divider"></li>
            <li class="navButton"><a class="subscribe"><img src="<?php echo get_template_directory_uri(); ?>/img/nav-icon-newsletter.png"></a></li>
            <li class="divider"></li>
          </ul>
        </div>
        
      </div>
      <!-- End Sidebar -->