<?php
/**
 * enqueue.php
 *
 * File that enqueues the scripts and styles
 *
 * @author pjh
 * @copyright 2014 - 2015
 * @since BigBooty 1.1.0
 */


/*
 * Add your theme stylesheets here!
 *
 * http://codex.wordpress.org/Function_Reference/wp_enqueue_style
*/

function bigbooty_styles() 
{

    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/bower_components/bootstrap/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'bigbooty_css', get_template_directory_uri() . '/lib/css/bigbooty.css' );	
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

    // Add more...

}


/*
 * Add your theme scripts here!
 *
 * http://codex.wordpress.org/Function_Reference/wp_enqueue_script
*/

function bigbooty_js() 
{

    global $wp_scripts;

    wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
    wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );

    $wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
    $wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '//bower_components/bootstrap/dist/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/lib/js/theme.js', array('jquery', 'bootstrap_js'), '', true );

    // Add more...
}


add_action( 'wp_enqueue_scripts', 'bigbooty_styles' );
add_action( 'wp_enqueue_scripts', 'bigbooty_js' );

?>
