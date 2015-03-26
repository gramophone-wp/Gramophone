<?php

/*
 * Add your theme menus here!
 *
 * http://codex.wordpress.org/Function_Reference/register_nav_menus
*/

function register_bigbooty_menus() 
{
	register_nav_menus(
		array(
			'primary'	=> __( 'Primary Menu' ),
			'footer'   => __( 'Footer Menu' ),
			// 'misc' => __( 'Side Menu' ),
		)
	);
}
add_action( 'init', 'register_bigbooty_menus' );

?>
