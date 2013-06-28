<?php get_header(); ?>

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
        
        <!-- =============================================================================
          HOME PAGE
        ============================================================================== -->
        <div id="home" class="activeContent">
          <div class="bloglist">

            <!-- Social Media Bar
            ---------------------->
            <div class="socialFeedBar">
              <ul class="filters">
                <li class="all socialIcon"><a class="active" href="#all" data-filter="*">View All</a></li>
                <li class="dividerVertical"></li>
                <li class="blog socialIcon"><a href="#blog" data-filter=".blog">Blog</a></li>
                <li class="dividerVertical"></li>
                <li class="facebook socialIcon"><a href="#facebook" data-filter=".facebook">Facebook</a></li>
                <li class="dividerVertical"></li>
                <li class="twitter socialIcon"><a href="#twitter" data-filter=".twitter">Twitter</a></li>
                <li class="dividerVertical"></li>
                <li class="instagram socialIcon"><a href="#instagram" data-filter=".instagram">Instagram</a></li>
                <li class="dividerVertical"></li>
                <li class="rss socialIcon"><a href="#rss">RSS</a></li>
              </ul>
            </div>

            <!-- Search Bar
            ---------------------->
            <?php get_search_form(); ?>

            <!-- Social Feed Area
            ---------------------->
            <div class="socialFeedArea ralelight">
              <ul class="newsfeed">
                <?php 
                // Start the loop
                if(have_posts()) : while(have_posts()) : the_post();

                  // News items
                  if(in_category('news')) { ?>

                    <li class="socialItem big blog">
                      <a data-id="<?php echo get_the_id(); ?>_blog" href="<?php the_permalink(); ?>" target="_top" title="<?php the_title(); ?>">
                        <?php if(has_post_thumbnail()) { the_post_thumbnail(); } ?>
                      </a>
                      <span class="feedBar">
                        <a data-id="<?php echo get_the_id(); ?>_blog" href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                        </a>
                      </span>
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
                      
                    <li class="socialItem smallBorder twitter">
                      <a href="http://twitter.com/lrds" target="_blank" title="<?php the_title(); ?>">
                        <?php echo substr($text, 0, 70); ?>...
                      </a>
                        <span class="feedBar"></span>
                      
                    </li>

                  <?php } elseif(in_category('facebook') && in_category('message')) { ?>

                      <li class="socialItem smallBorder facebook ralelight">
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
                Orginarios  de Guasave uno de los pequeños pueblos del estado se Sinaloa con mas tradición musical, los hermanos Geovanne “Geo” ( primera voz y acordeon ) y Jose “Checho” ( segunda voz y guitarra ), han estado unidos musicalmente desde 2006.
                <br/>
                Desde niños escucharon música sierreña, norteña y banda tradicional Sinaloense, lo que los motivo a tomar el acordeon y la guitarra, para interpretar la música que preferida por sus abuelos, consiguiendo pronto distinguirse por su estilo original.
                <br/>
                Haciendo uso de redes sociales y con la sencillez heredada de su familia, han logrado mantener el contacto con el publico, que los acompaña en todas sus presentaciones.
              </div>
              <div class="columText">
                Recientemente después de algunas semanas en el estudio de grabación, terminaron lo que será su segunda producción musical que sera titulada  MUJERIEGOS A MORIR.
                <br/>
                Esta producción incluirá una recopilación de sus temas que han sido éxitos  UNDERGOUND  ( la entrevista, si ando en guerra, ojitos negros chinitos ) , asi como el tema Mujeriego a Morir, que empieza a escucharse en las principales radiodifusoras de la Mexico y la Union Americana.
                <br/>
                Los Rodriguez de Sinaloa, concientes de que les espera un largo camino por recorrer en la carrera musical, disfrutan cada oportunidad de cantar y ejecutar sus instrumentos, siempre complaciendo a todos sus seguidores.
              </div>
            </div>
          </div>
        </div>
        
        <!-- =============================================================================
              SUBSCRIBE
             ========================================================================== -->
        <div id="subscribe" class="no-active">
          <span class="ralelight rssTitle">Contact</span>
          <div class="divider"></div>
          <span class="rssSubTitle ralelight">
            Management: 
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
          <span class="ralelight rssTitle">Subscribe</span>
          <div class="divider"></div>
          <span class="rssText ralelight">
            Sign up with your email to get updates on our posts, our releases and special offers!
          </span>
          <form class="rssSubscribe" action="">
            <input type="text" class="ralelight" placeholder="enter you eamil">
            <input type="button" class="rssjoin" value="Join">
          </form>
          <ul class="socialIconsButtons">
            <li class="facebook"><a href="https://www.facebook.com/lrdsmusic">Facebook</a></li>
            <li class="twitter"><a href="https://twitter.com/lrds">Twitter</a></li>
            <li class="instagram"><a href="http://instagram.com/losrodriguezdesinaloa/">Instagram</a></li>
          </ul>
        </div>
      </div> <!-- End Content -->

<?php get_footer(); ?>