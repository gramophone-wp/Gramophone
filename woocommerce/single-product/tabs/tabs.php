<?php
/**
 *******************************************************************************
 * //woocommerce/single-product/tabs/tabs.php
 *******************************************************************************
 *
 * This is the tabular area under the product
 * which includes areas such as `Description`
 * or `Reviews`. It has been restyled to 
 * fit BootStrap default styling.
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
    exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) : ?>

<div class="col-md-12 tabs">
    <div class="woocommerce-tabs wc-tabs-wrapper">

        <ul class="nav nav-tabs nav-justified tabs">
        <?php
            $first = true;
            foreach ( $tabs as $key => $tab ) :

                if( $first == true ):

                    ?>
                    <li class="<?php echo esc_attr( $key ); ?>_tab nav-item">
                        <a href="#tab-<?php echo esc_attr( $key ); ?>" class="active nav-link"><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', esc_html( $tab['title'] ), $key ); ?></a>
                    </li>

                    <?php
                        $first = false;
                        else:
                    ?>

                    <li class="<?php echo esc_attr( $key ); ?>_tab nav-item">
                        <a href="#tab-<?php echo esc_attr( $key ); ?>" class="nav-link"><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', esc_html( $tab['title'] ), $key ); ?></a>
                    </li>

            <?php endif; endforeach; ?>
        </ul>

        <?php foreach ( $tabs as $key => $tab ) : ?>

        <div class="panel entry-content wc-tab" id="tab-<?php echo esc_attr( $key ); ?>">
            <?php call_user_func( $tab['callback'], $key, $tab ); ?>
        </div>
        
        <?php endforeach; ?>

    </div>
</div>

<?php endif; ?>
