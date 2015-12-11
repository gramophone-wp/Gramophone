<?php
/**
 * header.php
 *
 * The header
 *
 * @author pjh
 * @copyright 2014 - 2015
 * @link http://codex.wordpress.org/Function_Reference/register_nav_menus
 * @since BigBooty 1.0.0
 */



function register_bigbooty_menus() 
{
	register_nav_menus(
		array(
			'primary'	=> __( 'Primary Menu' ),
			'footer'   => __( 'Footer Menu' ),
			
			// 'misc' => __( 'Side Menu' ),
			// .. add more
		)
	);
}
add_action( 'init', 'register_bigbooty_menus' );

?>
