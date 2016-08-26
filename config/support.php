<?php
/**
 **********************************************
 * //config/support.php
 **********************************************
 * 
 * Theme support.
 *
 * @author
 * @copyright
 * @link
 * @todo
 * @license
 * @since
 * @version
**/

$post_formats = array(
    'aside',
    'audio',
    'chat',
    'gallery',
    'image',
    'link',
    'status',
    'video',
    'quote'
);

/**
 **********************************************
 * add_theme_support/0
 ********************************************** 
 *
 * 
 *   
 * 
**/

add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
// add_theme_support( 'custom-header' );
// add_theme_support( 'editor-style' );
// add_theme_support( 'html5' );
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', $post_formats );
add_theme_support( 'title-tag' );
// add_theme_support( 'widgets' );
add_theme_support( 'woocommerce' );
// add_theme_support();

?>
