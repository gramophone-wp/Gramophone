<?php
/**
 **********************************************
 * woocommerce/single-product/tabs/description.php
 **********************************************
 *
 * Description tab
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

global $post;

$heading = esc_html( apply_filters( 'woocommerce_product_description_heading', __( 'Product Description', 'woocommerce' ) ) );

?>

<?php if ( $heading ): ?>
  <h3><?php echo $heading; ?></h3>
<?php endif; ?>

<?php the_content(); ?>

