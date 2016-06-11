<?php
/**
 **********************************************
 * woocommerce/cart/proceed-to-checkout-button.php
 **********************************************
 *
 * Shipping Methods Display
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
?>

<a href="<?php echo esc_url( wc_get_checkout_url() ) ;?>" class="checkout-button button btn btn-primary alt wc-forward">
  <?php echo __( 'Proceed to Checkout', 'woocommerce' ); ?>
</a>
