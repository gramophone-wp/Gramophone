<?php
/**
 *******************************************************************************
 * //woocommerce/checkout/form-checkout.php
 *******************************************************************************
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

if ( ! defined( 'ABSPATH' ) ) 
{
    exit;
}

wc_print_notices();

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout
if ( ! $checkout->enable_signup && ! $checkout->enable_guest_checkout && ! is_user_logged_in() ) 
{
    echo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) );
    return;
}

?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

    <?php if ( sizeof( $checkout->checkout_fields ) > 0 ) : ?>

    <?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

        <div class="col2-set" id="customer_details">
            <div class="col-1">
            <?php do_action( 'woocommerce_checkout_billing' ); ?>
            </div>

            <div class="col-2">
            <?php do_action( 'woocommerce_checkout_shipping' ); ?>
            </div>
        </div>

        <?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

    <?php endif; ?>

    <h3 id="order_review_heading"><?php _e( 'Your order', 'woocommerce' ); ?></h3>

    <?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

    <div id="order_review" class="woocommerce-checkout-review-order">
        <?php do_action( 'woocommerce_checkout_order_review' ); ?>
    </div>

    <?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
