<?php
/**
 **********************************************
 * woocommerce/emails/plain/email-customer-details.php
 **********************************************
 *
 * Additional Customer Details (plain)
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

echo strtoupper( __( 'Customer details', 'woocommerce' ) ) . "\n\n";

foreach ( $fields as $field ) {
  echo wp_kses_post( $field['label'] ) . ': ' . wp_kses_post( $field['value'] ) . "\n";
}
