<?php

function theme_styles() 
{

	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/lib/css/bootstrap.min.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'theme_styles' );


function theme_js() 
{

	global $wp_scripts;

	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );

	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/lib/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/lib/js/theme.js', array('jquery', 'bootstrap_js'), '', true );

}
add_action( 'wp_enqueue_scripts', 'theme_js' );


function register_theme_menus() {
	register_nav_menus(
		array(
			'header-menu'	=> __( 'Header Menu' ),
			'footer-menu'   => __( 'Footer Menu' )
		)
	);
}
add_action( 'init', 'register_theme_menus' );


function create_widget( $name, $id, $description ) 
{

	register_sidebar(array(
		'name' => __( $name ),	 
		'id' => $id, 
		'description' => __( $description ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));

}


create_widget( 'Front Page Left', 'front-left', 'Displays on the left of the homepage' );
create_widget( 'Front Page Center', 'front-center', 'Displays in the center of the homepage' );
create_widget( 'Front Page Right', 'front-right', 'Displays on the right of the homepage' );
create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar' );
create_widget( 'Blog Sidebar', 'blog', 'Displays on the side of pages in the blog section' );


add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );


require_once locate_template('/inc/plugins/class-tgm-plugin-activation.php');

/**
 * Register the required plugins for this theme.
 *
 */
 
add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
 
function my_theme_register_required_plugins() {
 
	/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
 
		// Require ACF
		array(
			'name'     				=> 'Bootstrap 3 Shortcodes',
			'slug'     				=> 'bootstrap-3-shortcodes',
			'source'   				=> 'http://downloads.wordpress.org/plugin/bootstrap-3-shortcodes.zip',
			'required' 				=> false,
			'version' 				=> '3.2.4',
			'force_activation' 		=> true,
			'force_deactivation' 	=> false,
			'external_url' 			=> '',
		),
 
	);
 
	// Change this to your theme text domain, used for internationalising strings
	$theme_text_domain = 'delicias';
 

	$config = array(
		'domain'       		=> $theme_text_domain,         	
		'default_path' 		=> '',                         
		'parent_menu_slug' 	=> 'themes.php', 				
		'parent_url_slug' 	=> 'themes.php', 				
		'menu'         		=> 'install-required-plugins', 	
		'has_notices'      	=> true,                       	
		'is_automatic'    	=> false,					   	
		'message' 			=> '',
		'strings'      		=> array(
			'page_title'                       			=> __( 'Install Required Plugins', $theme_text_domain ),
			'menu_title'                       			=> __( 'Install Plugins', $theme_text_domain ),
			'installing'                       			=> __( 'Installing Plugin: %s', $theme_text_domain ), // %1$s = plugin name
			'oops'                             			=> __( 'Something went wrong with the plugin API.', $theme_text_domain ),
			'notice_can_install_required'     			=> _n_noop( 'BigBooty requires the following plugin: %1$s.', 'BigBooty requires the following plugins: %1$s.' ),
			'notice_can_install_recommended'			=> _n_noop( 'BigBooty recommends the following plugin: %1$s.', 'BigBooty recommends the following plugins: %1$s.' ),
			'notice_cannot_install'  					=> _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
			'notice_can_activate_required'    			=> _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_activate_recommended'			=> _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_activate' 					=> _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
			'notice_ask_to_update' 						=> _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_update' 						=> _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
			'install_link' 					  			=> _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
			'activate_link' 				  			=> _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
			'return'                           			=> __( 'Return to Required Plugins Installer', $theme_text_domain ),
			'plugin_activated'                 			=> __( 'Plugin activated successfully.', $theme_text_domain ),
			'complete' 									=> __( 'All plugins installed and activated successfully. %s', $theme_text_domain ),
			'nag_type'									=> 'updated'
		)
	);
 
	tgmpa( $plugins, $config );
 
}


function alter_footer_admin () 
{
	echo "A <a href='https://github.com/pjhampton/BigBooty' target='_blank'>BigBooty</a> &hearts;'in Theme | ...Designed by you! <strong>:-)</strong></p>";
}
add_filter('admin_footer_text', 'alter_footer_admin');


?>