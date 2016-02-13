<?php
/**
 **********************************************
 * frame/widgets.php
 **********************************************
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
 **********************************************
 * create_widget/3
 ********************************************** 
 *
 * 
 *   
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


create_widget( 'Footer Left', 'footer_left', 'This is the left footer' );
create_widget( 'Footer Center', 'footer_center', 'This is the center footer' );
create_widget( 'Footer Right', 'footer_right', 'This is the right footer' );
create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
create_widget( 'Post Sidebar', 'blog', 'Displays on the side of pages in the blog section' );
// ...add more

?>
