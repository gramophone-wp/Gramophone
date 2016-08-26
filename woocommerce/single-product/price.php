<?php
/**
 **********************************************
 * woocommerce/single-product/price.php
 **********************************************
 *
 * Single Product Price, including microdata for SEO
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

global $product;

?>
<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">

    <p class="price"><?php echo $product->get_price_html(); ?></p>

    <meta itemprop="price" content="<?php echo esc_attr( $product->get_price() ); ?>" />
    <meta itemprop="priceCurrency" content="<?php echo esc_attr( get_woocommerce_currency() ); ?>" />
    <link itemprop="availability" href="http://schema.org/<?php echo $product->is_in_stock() ? 'InStock' : 'OutOfStock'; ?>" />

</div>
