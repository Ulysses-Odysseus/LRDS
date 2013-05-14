<!DOCTYPE html>
<html class="no-js">

  <head>
  	<!-- Basic Page Needs
  	================================================== -->
  	<meta charset="utf-8"/>
  	<title>LRDS - Los Rodriguez de Sinalo</title>
  	<meta name="description" content="">
  	<meta name="author" content="">

  	<!-- Mobile Metas
  	================================================== -->
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">

  	<!-- CSS
  	================================================== -->
  	<link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/normalize.css">

    
  	<!-- JS
  	================================================== -->
    <script src="./js/modernizr.js"></script>

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
          <div class="logo"></div>
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
      <!-- End Sidebar

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
          </div>

          <!-- Video Info Area
          ---------------------->
          <div class="infoArea">
            <ul>
              <li class="info ralelight">LA ENTREVISTA</li>
              <li class="divider"></li>
              <li class="videolink ralelight"><a href="http://www.youtube.com/watch?feature=player_embedded&v=YuwwsB9eKcU">WATCH NOW</a></li>
            </ul>
          </div>

        </div>
      </div>

      <!-- Content
      ================================================== -->
      <div class="content">
        
        <!-- HOME PAGE
        ================================================== -->
        <div class="home">

          <!-- Social Media Bar
          ---------------------->
          <div class="socialFeedBar">
            <ul>
              <li class="socialIcon"><a href="#"><img src="./img/media-icon-view-all.png" alt=""></a></li>
              <li class="dividerVertical"></li>
              <li class="socialIcon"><a href="#"><img src="./img/media-icon-blog.png" alt=""></a></li>
              <li class="dividerVertical"></li>
              <li class="socialIcon"><a href="#"><img src="./img/media-icon-facebook.png" alt=""></a></li>
              <li class="dividerVertical"></li>
              <li class="socialIcon"><a href="#"><img src="./img/media-icon-twitter.png" alt=""></a></li>
              <li class="dividerVertical"></li>
              <li class="socialIcon"><a href="#"><img src="./img/media-icon-instagram.png" alt=""></a></li>
              <li class="dividerVertical"></li>
              <li class="socialIcon"><a href="#"><img src="./img/media-icon-rss.png" alt=""></a></li>
            </ul>
          </div>

          <!-- Search Bar
          ---------------------->
          <div class="searchBar">
            <form class="searchForm row" action="">
              <input type="button" class="searchIcon" value="">
              <input type="text" class="searchInput ralelight" placeholder="search">
              
            </form>
          </div> <!-- End Search Bar --> 

          <!-- Social Feed Area
          ---------------------->
          <div class="socialFeedArea">
            <ul class="">
              <li class="socialItem big"></li>
              <li class="socialItem small"></li>
              <li class="socialItem small"></li>
              <li class="socialItem small"></li>
              <li class="socialItem small"></li>
            </ul>
          </div><!-- End Social Area -->
        </div><!-- End Home Div -->

        <!-- STORE  
        ================================================== -->
        <div class="store">
          
        </div><!-- End Store Div -->

      </div> <!-- End Content -->
    </div> <!-- End Container -->

    <!-- Heavy JS
    ================================================== -->
    <script src="./js/jquery.js"></script>
    <script src="./js/isotope.js"></script>
    <script>
    $(window).load(function(){

      // Isotope 
      $('.socialFeedArea ul').isotope({
        itemSelector:'.socialItem'
        //layoutMode:'fitRows'
      });
    });
    </script>
    <!-- <script src="http://code.jquery.com/jquery-latest.js"></script> -->

  </body>
</html>
