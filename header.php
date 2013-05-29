<!DOCTYPE html>
<html class="no-js">

  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8"/>
    <title><?php is_home() || is_front_page() ? bloginfo('name') : wp_title('',true,''); echo "&nbsp;|&nbsp;"; bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="">

    <!-- Mobile Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>1/css/normalize.css">

    <!-- JS
    ================================================== -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script>

    <!-- WP
    ================================================== -->
    <?php wp_head(); ?>

  </head>

  <body>
    <!-- Container
    ================================================== -->
    <div class="container">
      
      <!-- SideBar
      ================================================== -->
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

        <!-- Navigation Bar
        ---------------------->
        <div class="navBar">
          <ul>
            <li class="navButton"><a href="#home"><img src="./img/nav-icon-home.png" alt=""></a></li>
            <li class="divider"></li>
            <li class="navButton"><a href="#store"><img src="./img/nav-icon-store.png" alt=""></a></li>
            <li class="divider"></li>
            <li class="navButton"><a href="#shows"><img src="./img/nav-icon-shows.png" alt=""></a></li>
            <li class="divider"></li>
            <li class="navButton"><a href="#about"><img src="./img/nav-icon-about.png" alt=""></a></li>
            <li class="divider"></li>
            <li class="navButton"><a href="#contact"><img src="./img/nav-icon-home.png" alt=""></a></li>
            <li class="divider"></li>
          </ul>
        </div>

      </div>
      <!-- End Sidebar -->