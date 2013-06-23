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
        <div id="about">

        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

            <div class="aboutContainer">
              <div class="aboutTitle"><?php the_title(); ?></div>
                  <div class="divider"></div>
                  <div class="aboutText group">
                    <?php the_content(); ?>
                  </div>
            </div>
          </div><!-- End Single Shows Div -->

        <?php endwhile; else: ?>

            <p>Sorry, there are no shows at this time</p>

        <?php endif; ?><!-- End the loop -->

        </div>
      </div> <!-- End Content -->

<?php get_footer(); ?>