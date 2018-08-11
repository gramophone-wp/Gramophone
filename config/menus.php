<?php
/**
 * config/menus.php
 *
 * The various menus.
 *
 * @package gramophone
 */

function register_theme_menus() {
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'gramophone' ),
			// 'misc' => __( 'Side Menu', 'gramophone' ),
			// .. add more
		)
	);
}
add_action( 'init', 'register_theme_menus' );


