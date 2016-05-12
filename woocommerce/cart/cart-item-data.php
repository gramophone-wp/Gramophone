<?php
/**
 **********************************************
 * woocommerce/cart/cart-item-data.php
 **********************************************
 *
 * 
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
  exit;
}
?>
<dl class="variation">
  <?php foreach ( $item_data as $data ) : ?>
    <dt class="variation-<?php echo sanitize_html_class( $data['key'] ); ?>"><?php echo wp_kses_post( $data['key'] ); ?>:</dt>
    <dd class="variation-<?php echo sanitize_html_class( $data['key'] ); ?>"><?php echo wp_kses_post( wpautop( $data['display'] ) ); ?></dd>
  <?php endforeach; ?>
</dl>
