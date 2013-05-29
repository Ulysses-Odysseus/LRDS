<?php get_header();  ?>

    <div class="news nine columns">
      <div class="row">
        <div class="eight columns">
          <h1>THE GOOD NEWS <a class="rss" href="<?php bloginfo('rss_url'); ?>" target="_top" title="RSS Feed"><img src="<?= get_template_directory_uri(); ?>/images/rss_icon_large.png" border="0" alt="RSS Feed" /></a></h1>
        </div>

        <div class="four columns">
          <?php get_search_form(); ?>
        </div>

        <div class="eight columns">
     		  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <article>
                  <h3><?php the_title(); ?></h3>
                  <time datetime="<?php the_time('F j, Y'); ?>" pubdate />
                    <a href="" target="_top" title=""><?php the_time('F j, Y'); ?></a>
                  </time>
                  <?php
                    if ( has_post_thumbnail() ) { the_post_thumbnail(); } 
                    the_content();
                  ?>
              </article>
              <?php endwhile; else: ?>
    		    <p>Sorry, no posts are coming through! We'll have to take a look under the hood :)</p>
     		  <?php endif; ?>
        </div>

        <aside>
          <section class="four columns">
            <h3>CATEGORY</h3>
            <?php wp_list_categories('title_li='); ?>
          </section>

          <section class="four columns">
            <h3>OUR BEERS</h3>
            
            <div id="featured">
              <img src="<?= get_template_directory_uri(); ?>/images/ipa_label_square.gif" alt="" border="0" />
              <img src="<?= get_template_directory_uri(); ?>/images/porter_label_square.gif" alt="" border="0" />
              <img src="<?= get_template_directory_uri(); ?>/images/kolsch_label_square.gif" alt="" border="0" />
              <img src="<?= get_template_directory_uri(); ?>/images/pale_label_square.gif" alt="" border="0" />
            </div>
          </section>

          <section class="four columns">
            <h3>ARCHIVE</h3>
            <div class="six columns">
              <?php wp_get_archives('type=monthly'); ?>
            </div>

            <div class="six columns">
              <?php wp_get_archives('type=monthly'); ?>
            </div>
          </section>
        </aside>
      </div>

<?php get_footer(); ?>