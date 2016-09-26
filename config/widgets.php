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


/**
 *******************************************************************************
 * create_widget/3
 *******************************************************************************
 *
 * The `create_widget` function takes 3 params-
 * `$name`, `$id` and `$desciption`. It is 
 * responsible for defining the cast of a 
 * widget. It is possible to duplicate this
 * function into more than one function.
 * 
**/

function create_widget( $name, $id, $description ) 
{
    register_sidebar( array(
        'name' => __( $name ),	 
        'id' => $id, 
        'description' => __( $description ),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="text-center" id="widget-title">',
        'after_title' => '</h4>'
    ));
}
// add_action( 'widgets_init', 'create_widget' );

/**
 *******************************************************************************
 * CALL: create_widget/3
 *******************************************************************************
 *
 * To create a widget, we call the function 
 * here. The first param is the name of the
 * widget is the name, second the name in the
 * database and the thrid, the description of
 * the footer.
 * 
**/

create_widget( 'Footer Left',   'footer_left',   'This is the left footer' );
create_widget( 'Footer Center', 'footer_center', 'This is the center footer' );
create_widget( 'Footer Right',  'footer_right',  'This is the right footer' );
create_widget( 'Page Sidebar',  'page',          'Displays on the side of normal pages' );
create_widget( 'Post Sidebar',  'blog',          'Displays on the side of blog pages' );
// ...add more

?>
