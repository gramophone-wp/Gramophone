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

function div_wrapper($content)
{
    $supported_formats = ["youtube", "vimeo", "dailymotion"];

    // Match any iframes
    $pattern = '~<iframe.*</iframe>|<embed.*</embed>~';
    preg_match_all($pattern, $content, $matches);

    foreach ($matches[0] as $match) {
        foreach ($supported_formats as $format) {
            // Make sure the iframe/embed is of a supported format to avoid wrapping any non-video iframes
            if (strpos($match, $format) !== false) {
                // Wrap matched iframe with div
                $wrappedframe = '<div class="video-wrapper"><div class="video-inner">' . $match . '</div></div>';

                // Replace original iframe with new in content
                $content = str_replace($match, $wrappedframe, $content);
            }
        }
    }

    return $content;
}
add_filter('the_content', 'div_wrapper');

?>
