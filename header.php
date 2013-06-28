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
            <a href="<?php echo esc_url(home_url('/')); ?>" target="_top">
              <h1>LRDS - Los Rodriguez de Sinaloa</h1>
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
            <li id="textsubscribe" class="ralelight liNoActive">Contact</li>
          </ul>
        </div>

        <!-- Navigation Bar
        ---------------------->
        <div class="navBar ralelight">

          <div class="visible">
            <?php get_search_form(); ?>
          </div>

          <ul>
            <li class="navButton activeNav"><a class="home">HOME</a></li>
            <li class="divider"></li>
            <li class="navButton"><a class="store">STORE</a></li>
            <li class="divider"></li>
            <li class="navButton"><a class="shows">SHOWS</a></li>
            <li class="divider"></li>
            <li class="navButton"><a class="about">ABOUT</a></li>
            <li class="divider"></li>
            <li class="navButton novisible"><a class="subscribe">NEWSLETTER</a></li>
            <li class="divider"></li>
          </ul>

          <div class="newsletterBar visible">
            <p>Sign up for the newsletter:</p>
            <form class="newsletterForm row" role="newsletter" method="get" id="newsletterform" >
              <input id="n" name="n" type="text" class="newsletterInput ralelight" placeholder="Enter Email...">
              <input type="submit" class="newsletterIcon" value="GO">
            </form>
          </div>

        </div>

      </div>
      <!-- End Sidebar -->

      <!-- Mobile Nav Bar
      ---------------------->
      <div class="mobileNav visible">
        <div class="home">
          <a href="<?php echo esc_url(home_url('/')); ?>" target="_top">
            <img src="<?php echo get_template_directory_uri(); ?>/img/nav-icon-home-phone.png" alt="">
          </a>
        </div>
        <div class="toggle">
          <a class="noactive" href="#" onclick="toggle(this)">
            <img src="<?php echo get_template_directory_uri(); ?>/img/nav-icon-toggle.png" alt="">
          </a>
        </div>
      </div>