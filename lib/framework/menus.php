<?php

/*
 * Add your theme menus here!
 *
 * http://codex.wordpress.org/Function_Reference/register_nav_menus
*/

function register_bigbooty_menus() {
	register_nav_menus(
		array(
			'header-menu'	=> __( 'Header Menu' ),
			// 'footer-menu'   => __( 'Footer Menu' ),
		)
	);
}
add_action( 'init', 'register_bigbooty_menus' );

?>