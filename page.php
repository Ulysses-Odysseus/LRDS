<?php get_header(); ?>

        <div id="store" class="activeCon">

        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

            <div class="aboutContainer">
              <a style="font-size:12px;color:#ccc;" href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) ); ?>">&larr;&nbsp;CONTINUE SHOPPING</a>
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

<?php get_footer(); ?>