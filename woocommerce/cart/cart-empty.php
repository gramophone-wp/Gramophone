<?php
/**
 **********************************************
 * woocommerce/cart/cart-empty.php
 **********************************************
 *
 * 
 *
 * @author
 * @copyright
 * @link
 * @todo
 * @license
 * @since
 * @version
**/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

wc_print_notices();

?>

<p class="cart-empty">
    <?php _e( 'Your cart is currently empty.', 'woocommerce' ) ?>
</p>

<?php do_action( 'woocommerce_cart_is_empty' ); ?>

<p class="return-to-shop">
    <a class="button wc-backward" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>">
        <?php _e( 'Return To Shop', 'woocommerce' ) ?>
    </a>
</p>
