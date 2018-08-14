<?php
/**
 * File config/menus.php
 *
 * The various menus.
 *
 * @link https://codex.wordpress.org/Navigation_Menus
 * @package gramophone
 */

 /**
  * register_theme_menus
  *
  * Add additional menus below
  *
  */
function register_theme_menus() {
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'gramophone' )
		)
	);
}
add_action( 'init', 'register_theme_menus' );
