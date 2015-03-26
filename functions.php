<?php
/**
 * functions.php
 * @copyright 2014 - 2015
 *
 * The functions page
 *
 * @author pjh
 * @link http://codex.wordpress.org/
 * @since BigBooty 1.0.0
 */


// Theme Dependencies
require_once locate_template('inc/plugins/class-tgm-plugin-activation.php');
require_once ( 'inc/plugins/wp_bootstrap_navwalker.php' );

// Admin Customisations
require_once( 'lib/frame/admin.php' );

// Theme Specific Customisations
require_once( 'lib/frame/enqueue.php' );
require_once( 'lib/frame/menus.php' );
require_once( 'lib/frame/widgets.php' );
require_once( 'lib/frame/support.php' );
require_once( 'lib/frame/breadcrumbs.php' );

// Theme Recommended & Required Plugins
require_once( 'lib/frame/required_plugins.php' );

// Theme custom post types
require_once( 'lib/frame/customs/portfolio.php' );

?>