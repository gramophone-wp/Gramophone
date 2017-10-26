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
require_once( 'includes/bootstrap_walker.php' );
require_once( 'includes/comments.php' );

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
require_once( 'config/styling.php' );

// Theme Recommended & Required Plugins
require_once( 'config/required_plugins.php' );

// Theme custom post types
// require_once( '' );

function theme_queue_js() {
    if (!is_admin()) {
        if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
}
add_action('get_header', 'theme_queue_js');


add_filter( "the_excerpt", "add_class_to_excerpt" );

function add_class_to_excerpt( $excerpt ) {
    return str_replace('<p', '<p class="card-title"', $excerpt);
}

add_filter('post_gallery','format_gallery_bootstrap',10,3);
function format_gallery_bootstrap( $output, $atts, $instance ){

    $atts = shortcode_atts( array(
    	'columns' => 3,
        'link' => 'attachment',
        'size' => 'thumbnail'
    ), $atts);

    $output = '<div id="container" class="container">';
    $posts = get_posts(array('include' => $atts['ids'],'post_type' => 'attachment','orderby'=>$atts['orderby']));

    $post_chuncks = array_chunk( $posts, $atts[ 'columns' ] );

    foreach( $post_chuncks as $post_chunk ){
        $output .= '<div class="row">';
        foreach( $post_chunk as $post ){

            $src = wp_get_attachment_image_src($post->ID, $atts['size'])[0];

            $link = false;
            if( 'attachment' == $atts[ 'link' ] ){
                $link = get_attachment_link($post->ID);
            } elseif( 'file' == $atts[ 'link' ] ){
                $link = $src;
            }

            $class = ( 'thumbnail' == $atts[ 'size' ] ) ? 'img-thumbnail' : 'img-fluid';

            $output .= '<div class="col-sm">';
                if( $link ) $output .= '<a href="'.$link.'" style="display:block;">';
                    $output .= '<div class="text-center">';
                        $output .= '<img alt="'.$post->post_title.'" src="'.$src.'" class="'.$class.'" style="margin:auto;" />';
                        $output .= '</div>';
                if( $link ) $output .= '</a>';
                $output .= '<div class="text-muted text-center">'.$post->post_excerpt.'</div>';
            $output .= '</div>';
        }
        $output .= '</div>';
    }

    $output .= "</div>";

    return $output;
}

?>
