<?php
/**
 **********************************************
 * woocommerce/loop/price.php
 **********************************************
 *
 * Loop price
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

<?php if ( $price_html = $product->get_price_html() ) : ?>
    <p class="price-text-color text-xs-center"><?php echo $price_html; ?></p>
<?php endif; ?>
