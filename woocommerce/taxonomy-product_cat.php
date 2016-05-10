<?php
/**
 * The Template for displaying products in a product category. Simply includes the archive template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

wc_get_template( 'archive-product.php' );
