<?php get_header(); ?>

      <!-- Go Up 
      ---------------------->
      <div class="linkUp">
        <div class="linkUpButton">
          <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-up.png" alt="Go Top"></a>
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
        
        <!-- =============================================================================
          HOME PAGE
        ============================================================================== -->
        <div id="home" class="activeContent">
          <div class="bloglist">

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
                <input type="text" class="searchInput ralelight" placeholder="search">
                <input type="button" class="searchIcon" value="">
              </form>
            </div> <!-- End Search Bar -->

            <!-- Social Feed Area
            ---------------------->
            <div class="socialFeedArea ralelight">
              <ul>
                <!-- Start the loop
                -------------------->
                <?php 
                if(have_posts()) : while(have_posts()) : the_post();

                  // News items
                  if(in_category('news')) { ?>

                    <li class="socialItem big blog">
                      <a data-id="<?php echo get_the_id(); ?>_blog" href="<?php the_permalink(); ?>" target="_top" title="<?php the_title(); ?>">

                        <?php if(has_post_thumbnail()) { the_post_thumbnail(); } ?>

                        <span class="feedBar"><?php the_title(); ?></span>
                      </a>
                    </li>

                  <?php } elseif(in_category('instagram')) {

                    $title    = get_the_title();
                    $image    = get_the_content();
                    $boxSize  = array('big', 'small');
                    $size     = $boxSize[array_rand($boxSize)];
                      
                    // If it's a portrait image - ie. width is < than height
                    if($size == 'big') { ?>
                      
                      <li class="socialItem big instagram verticalImage">
                        <a href="<?php echo get_the_excerpt(); ?>" target="_blank" title="<?php the_title(); ?>">
                          <img src="<?php echo $image; ?>" alt="<?php the_title(); ?>" />
                        </a>
                        <span class="feedBar">
                          <a href="<?php echo get_the_excerpt(); ?>" target="_blank" title="">
                            View on Instagram
                          </a>
                        </span>
                      </li>

                    <?php } else { ?>

                      <li class="socialItem small instagram verticalImage">
                        <a href="<?php echo get_the_excerpt(); ?>" target="_blank" title="<?php the_title(); ?>">
                          <img src="<?php echo $image; ?>" alt="<?php the_title(); ?>" />
                        </a>
                        <span class="feedBar">
                          <a href="<?php echo get_the_excerpt(); ?>" target="_blank" title="">
                            View on Instagram
                          </a>
                        </span>
                      </li>

                    <?php }

                  } elseif(in_category('twitter')) { 

                    $text = get_the_content(); ?>
                      
                    <li class="socialItem small twitter">
                      <a href="http://twitter.com/lrds" target="_top" title="<?php the_title(); ?>">
                        <?php echo substr($text, 0, 70); ?>...
                        <span class="feedBar"></span>
                      </a>
                    </li>

                  <?php } elseif(in_category('facebook') && in_category('message')) { ?>

                      <li class="socialItem small facebook ralelight">
                        <a href="<?php echo get_the_excerpt(); ?>" target="_blank">
                          <span class="feedMessage"><?php the_title(); ?></span>
                        </a>
                        <span class="feedBar">
                          <a href="<?php echo get_the_excerpt(); ?>" target="_blank">
                            View on Facebook
                          </a>
                        </span>
                      </li>

                  <?php } elseif(in_category('facebook') && in_category('photo')) {

                      $image = get_the_content();

                      // Setting up image
                      $shareSize   = '_s.jpg';
                      $desImgSize  = '_n.jpg';
                      $sharePic    = strpos($image, $shareSize);
                      $boxSize     = array('big', 'small');

                      $bigImage = str_replace($shareSize, $desImgSize, $image);
                      $size     = getimagesize($bigImage);
                      
                      // If it's a portrait image - ie. width is < than height
                      if($size[0] < $size[1]) { ?>

                        <li class="socialItem <?php echo $boxSize[array_rand($boxSize)]; ?> facebook verticalImage">
                          <a href="<?php echo get_the_excerpt(); ?>" target="_blank">
                            <img src="<?php echo $bigImage; ?>">
                          </a>
                          <span class="feedBar">
                            <a href="<?php echo get_the_excerpt(); ?>" target="_blank">
                              View on Facebook
                            </a>
                          </span>
                        </li>

                      <?php } else { ?>

                        <li class="socialItem <?php echo $boxSize[array_rand($boxSize)]; ?> facebook horizontalImage">
                          <a href="<?php echo get_the_excerpt(); ?>" target="_blank">
                            <img src="<?php echo $bigImage; ?>">
                          </a>
                          <span class="feedBar">
                            <a href="<?php echo get_the_excerpt(); ?>" target="_blank">
                              View on Facebook
                            </a>
                          </span>
                        </li>

                      <?php }

                  } elseif(in_category('facebook') && in_category('video')) {

                      $image = get_the_content(); ?>

                      <li class="socialItem small facebook video">
                        <a class="videoImage" href="<?php get_the_excerpt(); ?>" target="_blank">
                          <img src="<?php echo $image; ?>">
                        </a>
                        <span class="play">
                          <a href="<?php echo get_the_excerpt(); ?>" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/media-icon-play.png">
                          </a>
                        </span>
                        <span class="feedBar">
                          <a href="<?php echo get_the_excerpt(); ?>" target="_blank">
                            View on Facebook
                          </a>
                        </span>
                      </li>
                  <?php } ?>

                <?php endwhile; else: ?>

                  <p>Sorry, there are no posts at this time</p>

                <?php endif; ?><!-- End the loop -->

              </ul>
            </div>
          </div><!-- End Social Area -->
          <div id="blogsingle" class="no-active ralelight">
            <div class="aboutContainer">
              <a data-id="back_blog" class="back" href="#">Back</a>
              <div class="blogcontent"></div>
            </div>
          </div><!-- End Single Blog Div -->
        </div><!-- End Home Div -->

        <!-- =============================================================================
             STORE
             ========================================================================== -->
        <div id="store" class="no-active">
          
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
            <!-- Bread Crumbs -->
            <div class="productTree">
              <ul>
                <li class="ralebold"><a href="#">ALL PRODCUTS</a></li>
                <span>/</span>
                <li class="ralenormal"><a href="#">TEES</a></li>
              </ul>
            </div>
            <!-- Product Area  -->
            <div class="productsArea">
              <ul class="allProducts">
                <li>
                  <div class="productInfo">
                    <a href="#"><img class="imgProduct" src="<?php echo get_template_directory_uri(); ?>/img/tee.jpg" alt=""></a>
                    <div class="price ralelight">$19.99</div>
                    <div class="productBottomBar">
                      <span class="productName ralelight">THIS IS A PRODUCT</span>
                      <span class="productLink"><a href="#" title="See Product"></a></span>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="productInfo">
                    <a href="#"><img class="imgProduct" src="<?php echo get_template_directory_uri(); ?>/img/tee.jpg" alt=""></a>
                    <div class="price ralelight">$19.99</div>
                    <div class="productBottomBar">
                      <span class="productName ralelight">THIS IS A PRODUCT</span>
                      <span class="productLink"><a href="#" title="See Product"></a></span>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="productInfo">
                    <a href="#"><img class="imgProduct" src="<?php echo get_template_directory_uri(); ?>/img/tee.jpg" alt=""></a>
                    <div class="price ralelight">$19.99</div>
                    <div class="productBottomBar">
                      <span class="productName ralelight">THIS IS A PRODUCT</span>
                      <span class="productLink"><a href="#" title="See Product"></a></span>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="productInfo">
                    <a href="#"><img class="imgProduct" src="<?php echo get_template_directory_uri(); ?>/img/tee.jpg" alt=""></a>
                    <div class="price ralelight">$19.99</div>
                    <div class="productBottomBar">
                      <span class="productName ralelight">THIS IS A PRODUCT</span>
                      <span class="productLink"><a href="#" title="See Product"></a></span>
                    </div>
                  </div>
                </li>
              </ul>

              <!-- Single Item -->
              <div class="singleProductContainer">
                <div class="singleProduct">
                  <ul class="productBig">
                    <li>
                       <a href="#"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/tee.jpg" alt=""></a>
                    </li>
                  </ul>
                  <ul class="productSmall">
                    <li>
                      <a href="#"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/tee.jpg" alt=""></a>
                    </li>
                    <li>
                      <a href="#"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/tee.jpg" alt=""></a>
                    </li>
                    <li>
                      <a href="#"><img class="" src="<?php echo get_template_directory_uri(); ?>/img/tee.jpg" alt=""></a>
                    </li>
                  </ul>
                </div>
                <!-- Product Info Single Page -->
                <div class="productInfoSinglePage">
                  <div class="infoContainer">
                    <h2 class="productTitle ralenormal">THIS IS A PRODUCT</h2>
                    <span class="line"></span>
                    <span class="productPrice ralelight">$15.00</span>
                    <span class="info ralenormal">
                      This is a product description of some stuff that I am making up. If there was internet right now then I would just copy and paste some lorem ipsum but no.
                    </span>
                    <ul>
                      <li>
                        <p>SIZE</p>
                        <select class="size" name="" id="">
                          <option value="">Small</option>
                          <option value="">Medium</option>
                          <option value="">Big</option>
                        </select>
                      </li>
                      <li>
                        <p>QTY</p>
                        <select class="qty" name="" id="">
                          <option value="">1</option>
                          <option value="">2</option>
                          <option value="">3</option>
                          <option value="">4</option>
                          <option value="">5</option>
                          <option value="">6</option>
                        </select>
                      </li>
                    </ul>
                    <span class="addCartSpace">
                      <a href="#" class="addToCart ralelight">
                        ADD TO CART
                      </a>
                    </span>
                  </div>
                </div>
              </div> <!-- singleProductContainer -->
            </div>
          </div>

        </div><!-- End Store Div -->

        <!-- =============================================================================
              SHOWS
             ========================================================================== -->
        <div id="shows" class="no-active"> 
          <ul class="showlist">
            <?php if(have_posts()) : while(have_posts()) : the_post();

                $title = get_the_excerpt();

                if(in_category('shows')) { ?>

                  <li>
                    <div class="date">
                      <div class="dateContainer">
                        <span class="month ralenormal"><?php echo get_post_meta(get_the_id(), 'Event Month', true); ?></span><br />
                        <span class="day ralelight"><?php echo get_post_meta(get_the_id(), 'Event Day', true); ?></span>
                      </div>
                    </div>
                    <a data-id="<?php echo get_the_id(); ?>_show" href="<?php the_permalink(); ?>">
                      <div class="place">
                        <span class="namePlace ralelight"><?php echo $title; ?></span>
                        <span class="button">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-forward.png" alt="<?php echo $title; ?>">
                        </span>
                      </div>
                    </a>
                  </li>

                <?php }

                endwhile; else: ?>

                  <p>Sorry, there are no shows at this time</p>

              <?php endif; ?><!-- End the loop -->
          </ul>
          <div id="showsingle" class="no-active ralelight">
            <div class="aboutContainer">
              <a data-id="back_show" class="back" href="#">Back</a>
              <div class="showcontent"></div>
            </div>
          </div><!-- End Single Shows Div -->
        </div><!-- End Shows Div -->

        <!-- =============================================================================
              ABOUT
             ========================================================================== -->
        <div id="about" class="no-active">
          <div class="aboutContainer">
            <div class="aboutTitle ralelight">LOS RODRIGUEZ DE SINALOA</div>
            <div class="divider"></div>
            <div class="aboutImage"></div>
            <div class="aboutText ralelight group">
              <div class="columText">
                Claw lick climb the curtains litter box jump on the table claw, meow stretching tail flick litter box chase the red dot. Leap stretching chase the red dot give me fish stretching toss the mousie, puking attack fluffy fur jump lick attack your ankles. Scratched sunbathe run scratched chuf catnip, claw rip the couch sunbathe stretching run. Shed everywhere jump on the table jump on the table hiss, attack sleep in the sink meow litter box purr eat the grass catnip give me fish. Judging you jump on the table purr sleep on your keyboard stuck in a tree judging you, meow claw lay down in your way rip the couch. Bat knock over the lamp sleep on your keyboard jump claw hiss, run biting chase the red dot chuf feed me. your keyboard sunbathe chase the red dot litter box, biting sleep on your face biting feed me zzz hairball leap. Jump scratched judging you leap, leap lay down in your way toss the mousie leap I don't like that food zzz run litter box. Claw zzz meow biting give me fish sleep on your face, toss the mousie hiss kittens judging you. Lay down in your way chase the red dot stretching chuf litter box, jump on the table meow hiss hiss judging you jump catnip.
              </div>
              <div class="columText">
                Claw lick climb the curtains litter box jump on the table claw, meow stretching tail flick litter box chase the red dot. Leap stretching chase the red dot give me fish stretching toss the mousie, puking attack fluffy fur jump lick attack your ankles. Scratched sunbathe run scratched chuf catnip, claw rip the couch sunbathe stretching run. Shed everywhere jump on the table jump on the table hiss, attack sleep in the sink meow litter box purr eat the grass catnip give me fish. Judging you jump on the table purr sleep on your keyboard stuck in a tree judging you, meow claw lay down in your way rip the couch. Bat knock over the lamp sleep on your keyboard jump claw hiss, run biting chase the red dot chuf feed me. your keyboard sunbathe chase the red dot litter box, biting sleep on your face biting feed me zzz hairball leap. Jump scratched judging you leap, leap lay down in your way toss the mousie leap I don't like that food zzz run litter box. Claw zzz meow biting give me fish sleep on your face, toss the mousie hiss kittens judging you. Lay down in your way chase the red dot stretching chuf litter box, jump on the table meow hiss hiss judging you jump catnip.
              </div>
            </div>
          </div>
        </div>
        
        <!-- =============================================================================
              SUBSCRIBE
             ========================================================================== -->
        <div id="subscribe" class="no-active">
          dsfdsdf
        </div>
      </div> <!-- End Content -->

<?php get_footer(); ?>