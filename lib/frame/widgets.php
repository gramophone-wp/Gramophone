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
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

create_widget( 'Front Page Left', 'front-left', 'Displays on the side of pages with a sidebar' );
create_widget( 'Front Page Center', 'front-center', 'Displays on the side of pages with a sidebar' );
create_widget( 'Front Page Right', 'front-right', 'Displays on the side of pages with a sidebar' );
create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );
// ...add more

?>