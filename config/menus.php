<?php
/**
 * config/menus.php
 *
 * The various menus.
 *
 * @author
 * @copyright
 * @link
 * @todo
 * @license
 * @since
 * @version
**/

function register_theme_menus() {
    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu' ),
            // 'misc' => __( 'Side Menu' ),
            // .. add more
        )
    );
}
add_action( 'init', 'register_theme_menus' );

?>
