<?php 


function project_posts() 
{

  $labels = array(
    'name'               => _x( 'Projects', 'post type general name' ),
    'singular_name'      => _x( 'Project', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'project' ),
    'add_new_item'       => __( 'Add New Project' ),
    'edit_item'          => __( 'Edit Project' ),
    'new_item'           => __( 'New Project' ),
    'all_items'          => __( 'All Projects' ),
    'view_item'          => __( 'View Project' ),
    'search_items'       => __( 'Search Projects' ),
    'not_found'          => __( 'No projects found' ),
    'not_found_in_trash' => __( 'No projects found in the Trash' ),
    'menu_name'          => __( 'Projects' ),
  );

  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our projects and product specific data',
    'public'        => true,
    'menu_position' => 25,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
    'menu_icon'		=> 'dashicons-video-alt',
  );
  register_post_type( 'project', $args ); 

}
add_action( 'init', 'project_posts' );



function project_taxonomies() 
{
	$labels = array(
		'name'              => _x( 'Project Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Projectt Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Project Categories' ),
		'all_items'         => __( 'All Project Categories' ),
		'parent_item'       => __( 'Parent Project Category' ),
		'parent_item_colon' => __( 'Parent Project Category:' ),
		'edit_item'         => __( 'Edit Project Category' ), 
		'update_item'       => __( 'Update Project Category' ),
		'add_new_item'      => __( 'Add New Project Category' ),
		'new_item_name'     => __( 'New Project Category' ),
		'menu_name'         => __( 'Categories' ),
	);

	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
	);

	register_taxonomy( 'project_category', 'project', $args );

}
add_action( 'init', 'project_taxonomies', 0 );


// look into contextual help

function project_messages( $messages ) 
{

	global $post, $post_ID;

	$messages['project'] = array(
	0 => '', 
	1 => sprintf( __('Product updated. <a href="%s">View product</a>'), esc_url( get_permalink($post_ID) ) ),
	2 => __('Custom field updated.'),
	3 => __('Custom field deleted.'),
	4 => __('Product updated.'),
	5 => isset($_GET['revision']) ? sprintf( __('Product restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
	6 => sprintf( __('Product published. <a href="%s">View product</a>'), esc_url( get_permalink($post_ID) ) ),
	7 => __('Product saved.'),
	8 => sprintf( __('Product submitted. <a target="_blank" href="%s">Preview product</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
	9 => sprintf( __('Product scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview product</a>'), date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
	10 => sprintf( __('Product draft updated. <a target="_blank" href="%s">Preview product</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
	);
	return $messages;

}
add_filter( 'post_updated_messages', 'project_messages' );




?>
