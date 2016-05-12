<?php
/**
 **********************************************
 * woocommerce/emails/plain/email-addresses.php
 **********************************************
 *
 * Email Addresses (plain)
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
  exit;
}

echo "\n" . strtoupper( __( 'Billing address', 'woocommerce' ) ) . "\n\n";
echo preg_replace( '#<br\s*/?>#i', "\n", $order->get_formatted_billing_address() ) . "\n";

if ( ! wc_ship_to_billing_address_only() && $order->needs_shipping_address() && ( $shipping = $order->get_formatted_shipping_address() ) ) {
  echo "\n" . strtoupper( __( 'Shipping address', 'woocommerce' ) ) . "\n\n";
  echo preg_replace( '#<br\s*/?>#i', "\n", $shipping ) . "\n";
}
