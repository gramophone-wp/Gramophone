<?php
/**
 **********************************************
 * config/menus.php
 **********************************************
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


/**
 **********************************************
 * register_bigbooty_menus/0
 ********************************************** 
 *
 * 
 *   
 * 
**/

function register_bigbooty_menus() 
{
  register_nav_menus(
    array(
     'primary' => __( 'Primary Menu' ),
     // 'footer'  => __( 'Footer Menu' ),
     // 'misc' => __( 'Side Menu' ),
     // .. add more
    )
  );
}

add_action( 'init', 'register_bigbooty_menus' );

?>
