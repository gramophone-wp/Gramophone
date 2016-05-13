<?php
/**
 **********************************************
 * woocommerce/single-product/short-description.php
 **********************************************
 *
 * Single product short description
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

if ( ! $post->post_excerpt ) {
  return;
}

?>

<div itemprop="description">
  <?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>
</div>
