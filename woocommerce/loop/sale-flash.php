<?php
/**
 *******************************************************************************
 * //woocommerce/loop/sale-flash.php
 *******************************************************************************
 *
 * This is the flash message that is displayed
 * when there is a sale on, indicated within
 * the WooCommerce plugin.
 *
 * @author
 * @copyright
 * @link
 * @todo
 * @license
 * @since
 * @version
**/

if ( ! defined( 'ABSPATH' ) ) 
{
    exit; // Exit if accessed directly
}

global $post, $product;

?>

<?php if ( $product->is_on_sale() ) : ?>

<?php 
    echo apply_filters( 
        'woocommerce_sale_flash', 
        '<div class="alert alert-info" role="alert">' . __( 'Sale!', 'woocommerce' ) . '</div>', 
        $post, $product 
    ); 
?>

<?php endif; ?>
