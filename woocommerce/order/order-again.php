<?php
/**
 *******************************************************************************
 * //woocommerce/order/order-again.php
 *******************************************************************************
 *
 * Order again button
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

?>

<p class="order-again">
    <a href="<?php echo esc_url( wp_nonce_url( add_query_arg( 'order_again', $order->id ) , 'woocommerce-order_again' ) ); ?>" class="button"><?php _e( 'Order Again', 'woocommerce' ); ?></a>
</p>
