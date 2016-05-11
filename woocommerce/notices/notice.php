<?php
/**
 **********************************************
 * woocommerce/notices/notice.php
 **********************************************
 *
 * Show messages
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
	<div class="woocommerce-info"><?php echo wp_kses_post( $message ); ?></div>
<?php endforeach; ?>
