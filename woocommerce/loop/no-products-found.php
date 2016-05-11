<?php
/**
 **********************************************
 * woocommerce/loop/no-products-found.php
 **********************************************
 *
 * Displayed when no products are found matching 
 * the current query
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
<p class="woocommerce-info"><?php _e( 'No products were found matching your selection.', 'woocommerce' ); ?></p>
