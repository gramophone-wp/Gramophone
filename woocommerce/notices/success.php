<?php
/**
 * Show messages
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! $messages ){
	return;
}

?>

<?php foreach ( $messages as $message ) : ?>
	<div class="woocommerce-message"><?php echo wp_kses_post( $message ); ?></div>
<?php endforeach; ?>
