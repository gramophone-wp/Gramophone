<?php

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
require_once( 'lib/frame/plugin_settings.php' );

// Theme custom post types
require_once( 'lib/frame/customs/portfolio.php' );

?>