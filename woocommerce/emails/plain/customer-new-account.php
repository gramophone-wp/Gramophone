<?php
/**
 **********************************************
 * woocommerce/emails/plain/customer-new-account.php
 **********************************************
 *
 * Customer new account email
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

echo "= " . $email_heading . " =\n\n";

echo sprintf( __( "Thanks for creating an account on %s. Your username is <strong>%s</strong>.", 'woocommerce' ), $blogname, $user_login ) . "\n\n";

if ( 'yes' === get_option( 'woocommerce_registration_generate_password' ) && $password_generated )
    echo sprintf( __( "Your password is <strong>%s</strong>.", 'woocommerce' ), $user_pass ) . "\n\n";

echo sprintf( __( 'You can access your account area to view your orders and change your password here: %s.', 'woocommerce' ), wc_get_page_permalink( 'myaccount' ) ) . "\n\n";

echo "\n=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=\n\n";

echo apply_filters( 'woocommerce_email_footer_text', get_option( 'woocommerce_email_footer_text' ) );
