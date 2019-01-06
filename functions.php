<?php
/**
 * Theme functions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 * @package gramophone
 **/

if ( ! isset( $content_width ) ) {
	$content_width = 600;
}

add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats' );
add_theme_support( 'title-tag' );
add_theme_support( 'editor-style' );
add_theme_support( 'html5' );
add_theme_support( 'widgets' );

// Theme Dependencies
require_once locate_template( 'externals/class-tgm-plugin-activation.php' );
// require_once 'externals/bootstrap_walker.php';
require_once 'externals/class-wp-bootstrap-navwalker.php';
require_once 'internals/comments.php';

// Admin Customisations.
require_once 'includes/admin.php';
require_once 'includes/login.php';

// Gramophone Specific Customisations.
require_once 'includes/enqueue.php';
require_once 'includes/menus.php';
require_once 'includes/comments.php';
require_once 'includes/breadcrumbs.php';
require_once 'includes/pagination.php';
require_once 'includes/styling.php';

// Theme Recommended & Required Plugins.
require_once 'includes/required_plugins.php';

function create_left_footer_widget() {
	register_sidebar(
		array(
			'name'          => __( 'Footer Left', 'gramophone' ),
			'id'            => __( 'footer_left', 'gramophone' ),
			'description'   => __( 'The left footer widget', 'gramophone' ),
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="text-center" id="widget-title">',
			'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'create_left_footer_widget' );


function create_center_footer_widget() {
	register_sidebar(
		array(
			'name'          => __( 'Footer Center', 'gramophone' ),
			'id'            => __( 'footer_center', 'gramophone' ),
			'description'   => __( 'The center footer widget', 'gramophone' ),
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="text-center" id="widget-title">',
			'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'create_center_footer_widget' );


function create_right_footer_widget() {
	register_sidebar(
		array(
			'name'          => __( 'Footer Right', 'gramophone' ),
			'id'            => __( 'footer_right', 'gramophone' ),
			'description'   => __( 'The right footer widget', 'gramophone' ),
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="text-center" id="widget-title">',
			'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'create_right_footer_widget' );


function create_page_widget() {
	register_sidebar(
		array(
			'name'          => __( 'Page Widget', 'gramophone' ),
			'id'            => __( 'page', 'gramophone' ),
			'description'   => __( 'The page widget container', 'gramophone' ),
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="text-center" id="widget-title">',
			'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'create_page_widget' );


function create_post_widget() {
	register_sidebar(
		array(
			'name'          => __( 'Post Widget', 'gramophone' ),
			'id'            => __( 'post', 'gramophone' ),
			'description'   => __( 'The post widget container', 'gramophone' ),
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="text-center" id="widget-title">',
			'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'create_page_widget' );


function theme_queue_js() {
	if ( ! is_admin() ) {
		if ( is_singular() && comments_open() && ( get_option( 'thread_comments' ) === 1 ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}
add_action( 'get_header', 'theme_queue_js' );

function add_class_to_excerpt( $excerpt ) {
	return str_replace( '<p', '<p class="card-title"', $excerpt );
}
add_filter( 'the_excerpt', 'add_class_to_excerpt' );

function format_gallery_bootstrap( $output, $atts, $instance ) {

	$atts = shortcode_atts(
		array(
			'columns' => 3,
			'link'    => 'attachment',
			'size'    => 'thumbnail',
		), $atts
	);

	$output = '<div id="container" class="container">';
	$posts  = get_posts(
		array(
			'post_type' => 'attachment',
		)
	);

	$post_chuncks = array_chunk( $posts, $atts['columns'] );

	foreach ( $post_chuncks as $post_chunk ) {
		$output .= '<div class="row">';
		foreach ( $post_chunk as $post ) {

			$image_metadata = wp_get_attachment_image_src( $post->ID, $atts['size'] );
			$src = $image_metadata[0];

			$link = false;
			if ( 'attachment' === $atts['link'] ) {
				$link = get_attachment_link( $post->ID );
			} elseif ( 'file' === $atts['link'] ) {
				$link = $src;
			}

			$class = ( 'thumbnail' === $atts['size'] ) ? 'img-thumbnail' : 'img-fluid';

			$output .= '<div class="col-sm">';
			if ( $link ) {
				$output .= '<a href="' . $link . '" style="display:block;">';
			}
					$output     .= '<div class="text-center">';
						$output .= '<img alt="' . $post->post_title . '" src="' . $src . '" class="' . $class . '" style="margin:auto;" />';
						$output .= '</div>';
			if ( $link ) {
				$output .= '</a>';
			}
				$output .= '<div class="text-muted text-center">' . $post->post_excerpt . '</div>';
			$output     .= '</div>';
		}
		$output .= '</div>';
	}

	$output .= '</div>';

	return $output;
}
add_filter( 'post_gallery', 'format_gallery_bootstrap', 10, 3 );
