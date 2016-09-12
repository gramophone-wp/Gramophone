<?php
/**
 *******************************************************************************
 * //woocommerce/content-product_cat.php
 *******************************************************************************
 *
 * The template for displaying product category 
 * thumbnails within loops
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

global $woocommerce_loop;

// Store loop count we're currently on.
if ( empty( $woocommerce_loop['loop'] ) ) 
{
    $woocommerce_loop['loop'] = 0;
}

// Store column count for displaying the grid.
if ( empty( $woocommerce_loop['columns'] ) ) 
{
    $woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );
}

// Increase loop count.
$woocommerce_loop['loop']++;

?>

<li <?php wc_product_cat_class( '', $category ); ?>>

    <?php
        /**
        * woocommerce_before_subcategory hook.
        *
        * @hooked woocommerce_template_loop_category_link_open - 10
        */
        do_action( 'woocommerce_before_subcategory', $category );

        /**
        * woocommerce_before_subcategory_title hook.
        *
        * @hooked woocommerce_subcategory_thumbnail - 10
        */
        do_action( 'woocommerce_before_subcategory_title', $category );

        /**
        * woocommerce_shop_loop_subcategory_title hook.
        *
        * @hooked woocommerce_template_loop_category_title - 10
        */
        do_action( 'woocommerce_shop_loop_subcategory_title', $category );

        /**
        * woocommerce_after_subcategory_title hook.
        */
        do_action( 'woocommerce_after_subcategory_title', $category );

        /**
        * woocommerce_after_subcategory hook.
        *
        * @hooked woocommerce_template_loop_category_link_close - 10
        */
        do_action( 'woocommerce_after_subcategory', $category ); 

    ?>
</li>
