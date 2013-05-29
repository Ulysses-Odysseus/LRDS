<?php

require_once('connect.php');

////////////////////////////////
//GET THE FUCKING NEWS!! WOOOO!!
$sql = $con->prepare("SELECT * FROM news_items ORDER BY created_time DESC");
$sql->execute();

if(!$sql) {

    //Show the error
    print_r($sql->errorInfo());

} elseif($sql->rowCount() > 0){

    //Reset variable
    $result = '';

    while($item = $sql->fetch()){

        $type  = $item['type'];
        $text  = $item['title'];
        $image = $item['image_url'];
        
        //Add instagram shit
        if($type == 'instagram'){
            $result .= '<li class="socialItem big instagram">
                            <img src="'.$image.'" width="300px" height="300px">
                        </li>';

        //Add twitter shit
        } elseif ($type == 'twitter'){
            $result .= '<li class="socialItem small twitter">'.$text.'</li>';
        }
    }
}

?>

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
            <ul class="filters">
              <li class="socialIcon"><a class="active" href="#all" data-filter="*"><img src="./img/media-icon-view-all.png" alt=""></a></li>
              <li class="dividerVertical"></li>
              <li class="socialIcon"><a href="#blog" data-filter=".blog"><img src="./img/media-icon-blog.png" alt=""></a></li>
              <li class="dividerVertical"></li>
              <li class="socialIcon"><a href="#facebook" data-filter=".facebook"><img src="./img/media-icon-facebook.png" alt=""></a></li>
              <li class="dividerVertical"></li>
              <li class="socialIcon"><a href="#twitter" data-filter=".twitter"><img src="./img/media-icon-twitter.png" alt=""></a></li>
              <li class="dividerVertical"></li>
              <li class="socialIcon"><a href="#instagram" data-filter=".instagram"><img src="./img/media-icon-instagram.png" alt=""></a></li>
              <li class="dividerVertical"></li>
              <li class="socialIcon"><a href="#rss"><img src="./img/media-icon-rss.png" alt=""></a></li>
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
            <!-- <div id="loading">
              <img src="img/loading.gif">
            </div> -->
            <ul>
              <?php echo $result; ?>
              <!-- <li class="socialItem big blog"></li>
              <li class="socialItem small facebook"></li>
              <li class="socialItem small facebook"></li>
              <li class="socialItem small twitter"></li>
              <li class="socialItem big"></li>
              <li class="socialItem small"></li> -->
            </ul>
          </div><!-- End Social Area -->
        </div><!-- End Home Div -->

        <!-- STORE  
        ================================================== -->
        <div class="store">
          
           <!-- Social Media Bar
          ---------------------->
          <div class="shopBar">
            <div>
              <ul>
                <li class="standarBack ralenormal"><a class="productbb" href="#">TEES</a></li>
                <li class="dividerVertical"></li>
                <li class="standarBack ralenormal"><a class="cartbb" href="#">CART</a></li>
                <li class="dividerVertical"></li>
                <li class="standarBack ralelight"><a class="itemsbb" href="#">2 ITEMS $40.00</a></li>
                <li class="dividerVertical"></li>
              </ul>
            </div>
            <div class="checkOutul ralelight">
              <a class="checkoutbb" href="#">CHECKOUT</a>
            </div>
          </div>

          <!-- Search Bar
          ---------------------->
          <div class="searchBar">
            <form class="searchForm row" action="">
              <input type="button" class="searchIcon" value="">
              <input type="text" class="searchInput ralelight" placeholder="search">
            </form>
          </div> <!-- End Search Bar --> 

          <!-- Products List Display Area
          ---------------------->
          <div class="productsListMainArea">
            <div class="productTree">
              <ul>
                <li>ALL PRODCUTS</li>
                <span>/</span>
                <li>TEES</li>
              </ul>
            </div>
            <div class="productsArea">
              <ul>
                <li>
                  <div class="productInfo">
                    <div class="price"></div>
                    <div class="productBottomBar"></div>
                  </div>
                </li>
              </ul>
            </div>
          </div>

        </div><!-- End Store Div -->

        <!-- SHOWS  
        ================================================== -->
        <div class="shows"> 
          <ul class="showlist">
            <li>
              <div class="date">
                <div class="dateContainer">
                  <span class="month ralenormal">MAY</span>
                  <span class="day ralelight">30</span>
                </div>
              </div>
              <div class="place">
                <span class="namePlace ralelight">LOS ANGELES, CA</span>
                <span class="button"></span>
              </div>
            </li>
            <li>
              <div class="date">
                <div class="dateContainer">
                  <span class="month ralenormal">MAY</span>
                  <span class="day ralelight">30</span>
                </div>
              </div>
              <div class="place">
                <span class="namePlace ralelight">LOS ANGELES, CA</span>
                <span class="button"></span>
              </div>
            </li>
            <li>
              <div class="date">
                <div class="dateContainer">
                  <span class="month ralenormal">MAY</span>
                  <span class="day ralelight">30</span>
                </div>
              </div>
              <div class="place">
                <span class="namePlace ralelight">LOS ANGELES, CA</span>
                <span class="button"></span>
              </div>
            </li>
            <li>
              <div class="date">
                <div class="dateContainer">
                  <span class="month ralenormal">MAY</span>
                  <span class="day ralelight">30</span>
                </div>
              </div>
              <div class="place">
                <span class="namePlace ralelight">LOS ANGELES, CA</span>
                <span class="button"></span>
              </div>
            </li>
            <li>
              <div class="date">
                <div class="dateContainer">
                  <span class="month ralenormal">MAY</span>
                  <span class="day ralelight">30</span>
                </div>
              </div>
              <div class="place">
                <span class="namePlace ralelight">LOS ANGELES, CA</span>
                <span class="button"></span>
              </div>
            </li>
          </ul>
        </div><!-- End Shows Div -->

        <!-- ABOUT
        ================================================== -->
        <div class="about">
          <div class="aboutContainer">
            <div class="aboutTitle ralelight">LOS RODRIGUEZ DE SINALOA</div>
            <div class="divider"></div>
            <div class="aboutImage"></div>
            <div class="aboutText ralelight">
              <div class="columText">
                Claw lick climb the curtains litter box jump on the table claw, meow stretching tail flick litter box chase the red dot. Leap stretching chase the red dot give me fish stretching toss the mousie, puking attack fluffy fur jump lick attack your ankles. Scratched sunbathe run scratched chuf catnip, claw rip the couch sunbathe stretching run. Shed everywhere jump on the table jump on the table hiss, attack sleep in the sink meow litter box purr eat the grass catnip give me fish. Judging you jump on the table purr sleep on your keyboard stuck in a tree judging you, meow claw lay down in your way rip the couch. Bat knock over the lamp sleep on your keyboard jump claw hiss, run biting chase the red dot chuf feed me. your keyboard sunbathe chase the red dot litter box, biting sleep on your face biting feed me zzz hairball leap. Jump scratched judging you leap, leap lay down in your way toss the mousie leap I don't like that food zzz run litter box. Claw zzz meow biting give me fish sleep on your face, toss the mousie hiss kittens judging you. Lay down in your way chase the red dot stretching chuf litter box, jump on the table meow hiss hiss judging you jump catnip.
              </div>
              <div class="columText">
                Claw lick climb the curtains litter box jump on the table claw, meow stretching tail flick litter box chase the red dot. Leap stretching chase the red dot give me fish stretching toss the mousie, puking attack fluffy fur jump lick attack your ankles. Scratched sunbathe run scratched chuf catnip, claw rip the couch sunbathe stretching run. Shed everywhere jump on the table jump on the table hiss, attack sleep in the sink meow litter box purr eat the grass catnip give me fish. Judging you jump on the table purr sleep on your keyboard stuck in a tree judging you, meow claw lay down in your way rip the couch. Bat knock over the lamp sleep on your keyboard jump claw hiss, run biting chase the red dot chuf feed me. your keyboard sunbathe chase the red dot litter box, biting sleep on your face biting feed me zzz hairball leap. Jump scratched judging you leap, leap lay down in your way toss the mousie leap I don't like that food zzz run litter box. Claw zzz meow biting give me fish sleep on your face, toss the mousie hiss kittens judging you. Lay down in your way chase the red dot stretching chuf litter box, jump on the table meow hiss hiss judging you jump catnip.
              </div>
            </div>
          </div>
        </div>

      </div> <!-- End Content -->
    </div> <!-- End Container -->

    <!-- Heavy JS
    ================================================== -->
    <script src="./js/jquery.js"></script>
    <script src="./js/isotope.js"></script>
    <script src="./js/newsfeed.js"></script>
    <script>
    $(document).ready(function(){

      // $.ajax({
      //   url: "objectTest.php",
      //   cache: false,
      //   success:
      //   function(data) {
      //     $('.socialFeedArea ul').html(data);
      //     $('#loading').remove();
      //   }
      // });

      // Isotope 
      $('.socialFeedArea ul').isotope({
        // Options
        itemSelector:'.socialItem',
        layoutMode:'masonry',
        animationEngine: 'best-available',
        masonry: {
            columnWidth: 160,
            gutterWidth: 20
          }
        });

        // Filter items when filter link is clicked
        $('.filters a').click(function(){

          var filter   = $(this).attr('class');

          if(filter != 'active') {
            $('.active').removeClass('active');
            $(this).addClass('active');
          }

          var selector = $(this).attr('data-filter');
          $('.socialFeedArea ul').isotope({ filter: selector });
          return false;
        });
    });
    </script>
    <!-- <script src="http://code.jquery.com/jquery-latest.js"></script> -->

  </body>
</html>
