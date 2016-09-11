<?php
/**
 *******************************************************************************
 * //functions.php
 *******************************************************************************
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

if( !isset( $content_width ) ) {
    $content_width = 600;
}

// Theme Dependencies ~ best not remove these!
require_once locate_template('includes/class-tgm-plugin-activation.php');
require_once ( 'includes/bootstrap_walker.php' );

// Admin Customisations
require_once( 'config/admin.php' );
require_once( 'config/login.php' );

// Theme Specific Customisations
require_once( 'config/enqueue.php' );
require_once( 'config/menus.php' );
require_once( 'config/widgets.php' );
require_once( 'config/comments.php' );
require_once( 'config/support.php' );
require_once( 'config/breadcrumbs.php' );
require_once( 'config/pagination.php' );
require_once( 'config/woocommerce.php' );

// Theme Recommended & Required Plugins
require_once( 'config/required_plugins.php' );

// Theme custom post types
// require_once( '' );

function theme_queue_js()
{
    if (!is_admin())
    {
        if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1))
            wp_enqueue_script( 'comment-reply' );
    }
}
add_action('get_header', 'theme_queue_js');

?>
