<?php get_header(); ?>
        
        <!-- =============================================================================
          HOME PAGE
        ============================================================================== -->
        <div id="home" class="activeContent">
          <div class="bloglist">

            <!-- Social Media Bar
            ---------------------->
            <div class="socialFeedBar ralelight">
              <ul class="filters novisible">
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

              <a class="visible" href="<?php echo esc_url(home_url('/')); ?>" target="_top">Back to home page</a></li>
            </div>

            <!-- Search Bar
            ---------------------->
            <?php get_search_form(); ?>

            <!-- Social Feed Area
            ---------------------->
            <div class="socialFeedArea ralelight">
              <ul class="newsfeed">
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
      </div> <!-- End Content -->

<?php get_footer(); ?>