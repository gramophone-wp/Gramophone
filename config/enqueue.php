<?php
/**
 **********************************************
 * config/enqueue.php
 **********************************************
 *
 * Enqueues scripts and styles.
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
 * bigbooty_styles/0 
 ********************************************** 
 *
 * 
 *   
 * 
**/

function bigbooty_styles() 
{

  wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/static/css/bootstrap.min.css' );
  wp_enqueue_style( 'font_awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
  wp_enqueue_style( 'demo_theme_css', get_template_directory_uri() . '/static/css/app.css' );	

  // Add more...
}


/**
 **********************************************
 * bigbooty_js/0
 ********************************************** 
 *
 * 
 *   
 * 
**/

function bigbooty_js() 
{

  global $wp_scripts;

  wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
  wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );

  $wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
  $wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

  wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/static/js/bootstrap.min.js', array('jquery'), '', true );

  // Add more...
    
}


add_action( 'wp_enqueue_scripts', 'bigbooty_styles' );
add_action( 'wp_enqueue_scripts', 'bigbooty_js' );

?>
