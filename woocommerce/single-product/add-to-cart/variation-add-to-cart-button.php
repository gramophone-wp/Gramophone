<?php
/**
 **********************************************
 * //woocommerce/single-product/add-to-cart/variation-add-to-cart-button.php
 **********************************************
 *
 * Single variation cart button
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
    exit;
}

global $product;

?>

<div class="woocommerce-variation-add-to-cart variations_button">
    
    <?php if ( ! $product->is_sold_individually() ) : ?>
        <?php woocommerce_quantity_input( array( 'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantity'] ) : 1 ) ); ?>
    <?php endif; ?>
    
    <button type="submit" class="btn single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
    <input type="hidden" name="add-to-cart" value="<?php echo absint( $product->id ); ?>" />
    <input type="hidden" name="product_id" value="<?php echo absint( $product->id ); ?>" />
    <input type="hidden" name="variation_id" class="variation_id" value="0" />
</div>
