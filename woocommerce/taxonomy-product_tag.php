<?php
/**
 *******************************************************************************
 * //woocommerce/taxonomy-product_tag.php
 *******************************************************************************
 *
 * The Template for displaying products in a product tag. 
 * Simply includes the archive template.
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

wc_get_template( 'archive-product.php' );

