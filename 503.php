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

    <!-- Styles
    ================================================== -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css">

    <style>
      body{
        margin: 0; padding: 0;
        font-size: .85em;
        color: #efefef;
        background: #ccc;
      }

      img{
        width: 100%; height: auto;
      }

      .container{
        width: 150px; height: 168px;
        margin: 0; padding: 0;
        position: absolute;
        top: 40%;
        left: 50%;
        text-align: center;
        margin-left: -95px;
        margin-top: -104px;
        background: url(<?php echo get_template_directory_uri(); ?>/img/bar-bg.png) repeat top left;
      }

      p{
        display: block;
        width: 100%; height: 20px;
        margin: 0; padding: 10px 0 10px 0;
        font-size: 100%;
        background-image: url(<?php echo get_template_directory_uri(); ?>/img/bar-bg-active-grey.png);
        background-repeat: repeat;

        -webkit-transition: all 700ms cubic-bezier(0.250, 0.250, 0.750, 0.750); 
           -moz-transition: all 700ms cubic-bezier(0.250, 0.250, 0.750, 0.750); 
            -ms-transition: all 700ms cubic-bezier(0.250, 0.250, 0.750, 0.750); 
             -o-transition: all 700ms cubic-bezier(0.250, 0.250, 0.750, 0.750); 
                transition: all 700ms cubic-bezier(0.250, 0.250, 0.750, 0.750); /* linear */
      }
    </style>

    <!-- WP
    ================================================== -->
    <?php wp_head(); ?>

  </head>
  <body>
    <div class="container">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Los Rodriguez de Sinaloa" />
      <p class="ralelight">Proxima Mente...</p>
    </div>

    <!-- Heavy JS
    ================================================== -->
    // <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
    // <script>
    // /* <![CDATA[ */
    // $(document).ready(function() {

    //   var colors = ['grey', 'green', 'lblue', 'red', 'orange', 'blue'];
    //   var count  = colors.length -1;

    //   var i = 0;

    //   setInterval(function() {
    //     if(i <= count){

    //       $('.ralelight').css('background-image', 'url(<?php echo get_template_directory_uri(); ?>/img/bar-bg-active-'+ colors[i] +'.png)');
    //       $('.ralelight').text("Coming Soon...");

    //       isEven(i);

    //       i++;

    //     } else {
    //       i = 0;
    //     }
    //   }, 4000);

    //   function isEven(value) {
    //     if (value%2 == 0)
    //       $('.ralelight').text("Coming Soon...");
    //     else
    //       $('.ralelight').text("Proxima Mente...");
    //   }

    // });
    // /* ]]> */
    // </script>
  </body>
</html>