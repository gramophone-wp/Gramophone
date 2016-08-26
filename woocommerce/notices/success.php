<?php
/**
 **********************************************
 * //woocommerce/notices/success.php
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
    <div class="woocommerce-message alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
        </button> 
        <?php echo wp_kses_post( $message ); ?>
    </div>
<?php endforeach; ?>
