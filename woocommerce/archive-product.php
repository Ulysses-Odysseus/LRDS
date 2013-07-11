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

global $woocommerce;

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
      	<select id="category_list" onchange="changeCat(this)">
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

	<?php do_action( 'woocommerce_archive_description' ); ?>

	<?php if ( have_posts() ) : ?>

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