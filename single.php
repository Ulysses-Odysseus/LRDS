<?php get_header(); ?>

<!-- =============================================================================
    ABOUT
   ========================================================================== -->
<div id="about" class="activeCon">

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
</div>

<?php get_footer(); ?>