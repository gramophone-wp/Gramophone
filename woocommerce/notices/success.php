<?php
/**
 **********************************************
 * woocommerce/notices/success.php
 **********************************************
 *
 * Success notice
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

if ( ! $messages ){
  return;
}

?>

<?php foreach ( $messages as $message ) : ?>
  <div class="woocommerce-message alert alert-info"><?php echo wp_kses_post( $message ); ?></div>
<?php endforeach; ?>
