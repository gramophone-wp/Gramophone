<?php
/**
 **********************************************
 * functions.php
 **********************************************
 *
 * The theme functions.
 *
 * @author
 * @copyright
 * @link
 * @todo
 * @license
 * @since
 * @version
**/


// Theme Dependencies
require_once locate_template('includes/class-tgm-plugin-activation.php');
require_once ( 'includes/wp_bootstrap_navwalker.php' );


// Admin Customisations
require_once( 'frame/admin.php' );


// Theme Specific Customisations
require_once( 'frame/enqueue.php' );
require_once( 'frame/menus.php' );
require_once( 'frame/widgets.php' );
require_once( 'frame/comments.php' );
require_once( 'frame/support.php' );
require_once( 'frame/breadcrumbs.php' );


// Theme Recommended & Required Plugins
require_once( 'frame/required_plugins.php' );


// Theme custom post types
// require_once( '' );

?>
