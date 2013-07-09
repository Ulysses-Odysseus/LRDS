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
            <li id="texthome" class="ralelight liNoActive">Home</li>
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
            <li class="navButton"><a class="home" href="<?php echo esc_url(home_url('/')); ?>" target="_top">HOME</a></li>
            <li class="divider"></li>
            <li class="navButton"><a class="store" href="<?php echo esc_url(home_url('/')); ?>shop" target="_top">STORE</a></li>
            <li class="divider"></li>
            <li class="navButton"><a class="shows" href="<?php echo esc_url(home_url('/')); ?>shows" target="_top">SHOWS</a></li>
            <li class="divider"></li>
            <li class="navButton"><a class="about" href="<?php echo esc_url(home_url('/')); ?>about" target="_top">ABOUT</a></li>
            <li class="divider"></li>
            <li class="navButton novisible"><a class="subscribe" href="<?php echo esc_url(home_url('/')); ?>contact" target="_top">NEWSLETTER</a></li>
            <li class="divider"></li>
          </ul>

          <div class="newsletterBar visible">
            <span class="rssSubTitle ralelight">
              Contact: 
            </span>
            <span class="rssText ralelight">
              Alejandro Garza : (818)-400-8783
            </span>
            <span class="rssText ralelight">
              Jose Rodriguez  : (760)-270-6323
            </span>
            <span class="rssText ralelight">
              Email : <a href="mailto:music@lrds.tv?Subject=Hello" target="_blank">music@lrds.tv</a>
            </span>
            <p>Sign up for the newsletter:</p>
            <form class="newsletterForm row" role="newsletter" method="get" id="newsletterform" >
              <input id="n" name="n" type="text" class="newsletterInput ralelight" placeholder="Enter Email...">
              <input type="submit" class="newsletterIcon" value="Join">
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

            <!-- Go Up 
      ---------------------->
      <div class="linkUp">
        <div class="linkUpButton">
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-up.png" alt="Go Top"></a>
        </div>
      </div>

      <!-- Header Section
      ================================================== -->
      <div class="header">
        
        <div class="feuturedArea">
          <!-- Bar
          ---------------------->
          <div class="separationBar"></div>

          <!-- Video Area
          ---------------------->
          <div class="videoArea">
            <iframe width="231" height="130" src="http://www.youtube.com/embed/JMOmTG4BWUQ?rel=0" frameborder="0" allowfullscreen></iframe>
          </div>

          <!-- Video Info Area
          ---------------------->
          <div class="infoArea">
            <ul>
              <li class="info ralelight">LA ENTREVISTA</li>
              <li class="divider"></li>
              <li class="videolink ralelight"><a target="_blank" href="http://www.youtube.com/watch?feature=player_embedded&v=JMOmTG4BWUQ">WATCH NOW</a></li>
            </ul>
          </div>

        </div>
      </div>

      <!-- Content
      ================================================== -->
      <div class="content">