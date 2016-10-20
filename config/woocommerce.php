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

// Remove each style one by one
add_filter( 'woocommerce_enqueue_styles', 'jk_dequeue_styles' );
function jk_dequeue_styles( $enqueue_styles ) {
	unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
	unset( $enqueue_styles['woocommerce-layout'] );		// Remove the layout
	unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
	return $enqueue_styles;
}

// Or just remove them all in one line
add_filter( 'woocommerce_enqueue_styles', '__return_false' );

// Hook in
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields( $fields ) {
     $fields['order']['order_comments'] = array(
     	'class' => array('form-group','form-control' ));;
     return $fields;
}

