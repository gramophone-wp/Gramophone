<?php
/**
 **********************************************
 * //woocommerce/single-product/tabs/additional-information.php
 **********************************************
 *
 * Additional Information tab
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

$heading = apply_filters( 'woocommerce_product_additional_information_heading', __( 'Additional Information', 'woocommerce' ) );

?>

<?php if ( $heading ): ?>
    <h2><?php echo $heading; ?></h2>
<?php endif; ?>

<?php $product->list_attributes(); ?>
