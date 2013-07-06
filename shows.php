<?php
/*
Template Name: shows
*/
?>
<?php get_header(); ?>

<!-- =============================================================================
      SHOWS
     ========================================================================== -->
<div id="shows" class="activeCon"> 
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

<?php get_footer(); ?>