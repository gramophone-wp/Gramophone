<?php
/**
 *******************************************************************************
 * //config/widgets.php
 *******************************************************************************
 * 
 * Theme widgets.
 *
 * @author
 * @copyright
 * @link
 * @todo
 * @license
 * @since
 * @version
**/

function create_left_footer_widget() 
{
    register_sidebar( array(
        'name' => __( "Footer Left" ),   
        'id' => __("footer_left"), 
        'description' => __( "The left footer widget" ),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="text-center" id="widget-title">',
        'after_title' => '</h4>'
    ));
}
add_action( 'widgets_init', 'create_left_footer_widget' );


function create_center_footer_widget() 
{
    register_sidebar( array(
        'name' => __( "Footer Center" ),
        'id' => __("footer_center"), 
        'description' => __( "The center footer widget" ),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="text-center" id="widget-title">',
        'after_title' => '</h4>'
    ));
}
add_action( 'widgets_init', 'create_center_footer_widget' );


function create_right_footer_widget() 
{
    register_sidebar( array(
        'name' => __( "Footer Right" ),
        'id' => __("footer_right"), 
        'description' => __( "The right footer widget" ),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="text-center" id="widget-title">',
        'after_title' => '</h4>'
    ));
}
add_action( 'widgets_init', 'create_right_footer_widget' );


function create_page_widget() 
{
    register_sidebar( array(
        'name' => __( "Page Widget" ),
        'id' => __("page"), 
        'description' => __( "The page widget container" ),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="text-center" id="widget-title">',
        'after_title' => '</h4>'
    ));
}
add_action( 'widgets_init', 'create_page_widget' );


function create_post_widget() 
{
    register_sidebar( array(
        'name' => __( "Post Widget" ),
        'id' => __("post"), 
        'description' => __( "The post widget container" ),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="text-center" id="widget-title">',
        'after_title' => '</h4>'
    ));
}
add_action( 'widgets_init', 'create_page_widget' );

// ...add more

add_filter( 'widget_archives_args', 'gramophone_bootstrap_override' );

function gramophone_bootstrap_override( $args ) {
    $args['format'] = 'custom';
    $args['before'] = '<li class="list-group-item widget-li">';
    $args['after'] = '</li>';
    return $args;
}

?>
