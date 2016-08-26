<?php
/**
 **********************************************
 * //woocommerce/notices/error.php
 **********************************************
 *
 * Show error messages
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

if ( ! $messages )
{
    return;
}

?>

<ul class="woocommerce-error alert alert-danger">
    <?php foreach ( $messages as $message ) : ?>
        <li><?php echo wp_kses_post( $message ); ?></li>
    <?php endforeach; ?>
</ul>
