<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
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

<!-- Social Media Bar
---------------------->
<div class="shopBar">
  <div>
    <ul>
      <li class="standarBack ralenormal">
      	<select id="category_list">
      		<?php
      			$args  = array( 'taxonomy' => 'product_cat' );
						$terms = get_terms('product_cat', $args);
						$url   = get_permalink( woocommerce_get_page_id( 'shop' ) );
						
						$count = count($terms);
				    if ($count > 0) {
			        foreach ($terms as $term) {
			        	echo '<option value="' . $url . '/' . $term->slug . '">' . $term->name . '</option>';
			        }
				    }
      		?>
      	</select>
      </li>
      <li class="dividerVertical"></li>
      <li class="standarBack ralelight"><a href="<?php echo $woocommerce->cart->get_cart_url(); ?>" class="itemsbb"><?php echo sprintf(_n('%d ITEM', '%d ITEMS', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?>&nbsp;<?php echo $woocommerce->cart->get_cart_total(); ?></a></li>
      <li class="dividerVertical"></li>
      <li class="standarBack ralelight"><a href="<?php echo $woocommerce->cart->get_cart_url(); ?>" class="checkoutbb">CHECKOUT</a></li>
    </ul>
  </div>
</div>

<!-- Search Bar
---------------------->
<?php get_search_form(); ?>

<!-- Products List Display Area
---------------------->
<div class="productsListMainArea">

	<div class="productTree">
    <ul>
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

  <!-- Product Area  -->
  <div class="productsArea">

	  <!-- Single Product Container -->
		<div class="singleProductContainer">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php woocommerce_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>
		</div>

	</div> <!-- End Product Area -->
</div> <!-- End Products List Display Area -->

<?php
	/**
	 * woocommerce_after_main_content hook
	 *
	 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
	 */
	do_action('woocommerce_after_main_content');
?>

<?php get_footer('shop'); ?>