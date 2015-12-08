<?php
/**
 * Theme Support
 * 
 *
 * @author pjh
 * @copyright 2014 - 2015
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 * @todo better documentation, make it easier to create widgets
 * @since BigBooty 1.0.0
 */


function create_widget( $name, $id, $description ) 
{
    register_sidebar( array(
        'name' => __( $name ),	 
        'id' => $id, 
        'description' => __( $description ),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="text-center">',
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
