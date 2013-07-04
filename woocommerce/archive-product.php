<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header('shop'); ?>

<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action('woocommerce_before_main_content');
	?>

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
        <li class="standarBack ralelight"><a class="checkoutbb" href="#">CHECKOUT</a></li>
      </ul>
    </div>
  </div>

  <!-- Search Bar
  ---------------------->
  <?php get_search_form(); ?>

		<!-- <h1 class="page-title"><?php woocommerce_page_title(); ?></h1> -->

		<?php do_action( 'woocommerce_archive_description' ); ?>

		<?php if ( have_posts() ) : ?>

		<!-- <div class="productsListMainArea"> Remove from content-single? -->

		<div class="productTree">
      <ul>

      	<!-- Add to breadcrumb.php -->
      	<li class="ralebold"><a href="#">ALL PRODCUTS</a></li>
        <span>/</span>
        <li class="ralenormal"><a href="#">TEES</a></li>
			<?php
				/**
				 * woocommerce_before_shop_loop hook
				 *
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				do_action( 'woocommerce_before_shop_loop' );
			?>
			</ul>
     </div>
		
			<?php woocommerce_product_loop_start(); ?>

				<?php woocommerce_product_subcategories(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php woocommerce_get_template_part( 'content', 'product' ); ?>

				<?php endwhile; // end of the loop. ?>

			<?php woocommerce_product_loop_end(); ?>

			<?php
				/**
				 * woocommerce_after_shop_loop hook
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			?>

		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php woocommerce_get_template( 'loop/no-products-found.php' ); ?>

		<?php endif; ?>

	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action('woocommerce_after_main_content');
	?>

	<?php
		/**
		 * woocommerce_sidebar hook
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		//do_action('woocommerce_sidebar');
	?>

<?php get_footer('shop'); ?>