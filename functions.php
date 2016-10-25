<?php
/**
 *******************************************************************************
 * //functions.php
 *******************************************************************************
 *
 * The theme functions.
 *
 * CODEX REF
 * https://codex.wordpress.org/Functions_File_Explained
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
require_once( 'config/styling.php' );

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

// Add Bootstrap Styling to Password Protected form
function bootstrap_password_form() {
    global $post;
    $label = 'pwbox-' . ( empty($post->ID) ? rand() : $post->ID );
    $output = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" class="post-password-form form-control" method="post">
    <p>' . __( 'This content is password protected. To view it please enter your password below:' ) . '</p>
    <div class="form-group"><p><label for="' . $label . '">' . __( 'Password:' ) . ' <input name="post_password" class="form-control" id="' . $label . '" type="password" size="20" /></label> <input type="submit" class="btn btn-primary" name="Submit" value="' . esc_attr_x( 'Enter', 'post password form' ) . '" /></p></div></form>
    ';
    return $output;
};

add_filter( 'the_password_form', 'bootstrap_password_form' );


?>
