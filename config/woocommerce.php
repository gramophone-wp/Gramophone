<?php
/**
 *******************************************************************************
 * //config/woocommerce.php
 *******************************************************************************
 * 
 * Woommerce theme config.
 *
 * @author
 * @copyright
 * @link
 * @todo
 * @license
 * @since
 * @version
 **/

// Filters
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

// Override action after shop loop - remove link close
add_action('woocommerce_after_shop_loop_item', 'remove_link_close_from_after_shop_loop_item');

// Function to override action after shop loop
function remove_link_close_from_after_shop_loop_item() {

    add_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

}

// Close item link in loop
add_action( 'woocommerce_close_item_link', 'woocommerce_template_loop_category_link_close', 10 );

?>
