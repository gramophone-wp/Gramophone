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

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
?>

<?php if ( $price_html = $product->get_price_html() ) : ?>
	<h5 class="price-text-color"><?php echo $price_html; ?></h5>
<?php endif; ?>
