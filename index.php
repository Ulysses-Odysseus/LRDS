<?php get_header(); ?>

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
              <li class="socialIcon"><a class="active" href="#all" data-filter="*"><img src="<?php echo get_template_directory_uri(); ?>/img/media-icon-view-all.png" alt=""></a></li>
              <li class="dividerVertical"></li>
              <li class="socialIcon"><a href="#blog" data-filter=".blog"><img src="<?php echo get_template_directory_uri(); ?>/img/media-icon-blog.png" alt=""></a></li>
              <li class="dividerVertical"></li>
              <li class="socialIcon"><a href="#facebook" data-filter=".facebook"><img src="<?php echo get_template_directory_uri(); ?>/img/media-icon-facebook.png" alt=""></a></li>
              <li class="dividerVertical"></li>
              <li class="socialIcon"><a href="#twitter" data-filter=".twitter"><img src="<?php echo get_template_directory_uri(); ?>/img/media-icon-twitter.png" alt=""></a></li>
              <li class="dividerVertical"></li>
              <li class="socialIcon"><a href="#instagram" data-filter=".instagram"><img src="<?php echo get_template_directory_uri(); ?>/img/media-icon-instagram.png" alt=""></a></li>
              <li class="dividerVertical"></li>
              <li class="socialIcon"><a href="#rss"><img src="<?php echo get_template_directory_uri(); ?>/img/media-icon-rss.png" alt=""></a></li>
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
            <ul>

              <!-- Start the loop
              -------------------->
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <li class="socialItem big blog">
                  <!-- If featured image exists, load it in
                  ------------------------------------------>
                  <a href="<?php the_permalink(); ?>" target="_top" title="<?php the_title(); ?>">
                    <?php if (has_post_thumbnail()) { the_post_thumbnail(); } ?>
                    <div class="title ralelight">
                      <?php the_title(); ?>
                    </div>
                  </a>
                </li>

                <?php endwhile; else: ?>

                  <p>Sorry, there are no posts at this time</p>

              <?php endif; ?><!-- End the loop -->

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

<?php get_footer(); ?>