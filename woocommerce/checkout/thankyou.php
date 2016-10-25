<?php
/**
 *******************************************************************************
 * //woocommerce/checkout/thankyou.php
 *******************************************************************************
 *
 * Thankyou page
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

if ( $order ) : ?>

    <?php if ( $order->has_status( 'failed' ) ) : ?>

        <p class="woocommerce-thankyou-order-failed"><?php _e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce' ); ?></p>

        <p class="woocommerce-thankyou-order-failed-actions">
            <a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php _e( 'Pay', 'woocommerce' ) ?></a>
            <?php if ( is_user_logged_in() ) : ?>
                <a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php _e( 'My Account', 'woocommerce' ); ?></a>
            <?php endif; ?>
        </p>

    <?php else : ?>
    <div class="col-sm-12">
    <h4 class="woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', __( 'Thank you. Your order has been received.', 'woocommerce' ), $order ); ?></h4>
    <table class="table table-striped">
        <thead class="thead-inverse">
           <tr>
            <th><?php _e( 'Order Number:', 'woocommerce' ); ?></th>
            <th><?php _e( 'Date:', 'woocommerce' ); ?></th>
            <th><?php _e( 'Total:', 'woocommerce' ); ?></th>
            <?php if ( $order->payment_method_title ) : ?>
            <th><?php _e( 'Payment Method:', 'woocommerce' ); ?></th>
            <?php endif; ?>
           </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong><?php echo $order->get_order_number(); ?></strong></td>
                <td><strong><?php echo date_i18n( get_option( 'date_format' ), strtotime( $order->order_date ) ); ?></strong></td>
                <td><strong><?php echo $order->get_formatted_order_total(); ?></strong></td>
                <?php if ( $order->payment_method_title ) : ?>
                <td><strong><?php echo $order->payment_method_title; ?></strong></td>
                <?php endif; ?>
            </tr>
        </tbody>
    </table>
    </div>
    <?php endif; ?>
    <?php //do_action( 'woocommerce_thankyou_' . $order->payment_method, $order->id ); ?>
    <?php do_action( 'woocommerce_thankyou', $order->id ); ?>

<?php else : ?>

    <p class="woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', __( 'Thank you. Your order has been received.', 'woocommerce' ), null ); ?></p>

<?php endif; ?>
