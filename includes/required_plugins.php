<?php
/**
 * config/required_plugins.php
 *
 * Plugins required / recommend by this theme.
 *
 * @package gramophone
 */

function required_plugins() {

	$plugins = array(

		array(
			'name'               => 'Bootstrap 3 Shortcodes',
			'slug'               => 'bootstrap-3-shortcodes',
			'source'             => 'http://downloads.wordpress.org/plugin/bootstrap-3-shortcodes.zip',
			'required'           => false,
			'version'            => '3.3.6',
			'force_activation'   => true,
			'force_deactivation' => false,
			'external_url'       => '',
		),

		// add more...
	);

	$config = array(
		'domain'           => 'gramophone',
		'default_path'     => '',
		'parent_menu_slug' => 'themes.php',
		'parent_url_slug'  => 'themes.php',
		'menu'             => 'install-required-plugins',
		'has_notices'      => true,
		'is_automatic'     => false,
		'message'          => '',

		'strings'          => array(
			'page_title'                      => __( 'Install Required Plugins', 'gramophone' ),
			'menu_title'                      => __( 'Install Plugins', 'gramophone' ),
			'installing'                      => __( 'Installing Plugin: %s', 'gramophone' ), // %1$s = plugin name
			'oops'                            => __( 'Something went wrong with the plugin API.', 'gramophone' ),
			'notice_can_install_required'     => _n_noop( 'Gramophone requires the following plugin: %1$s.', 'Gramophone requires the following plugins: %1$s.', 'gramophone' ),
			'notice_can_install_recommended'  => _n_noop( 'Gramophone recommends the following plugin: %1$s.', 'Gramophone recommends the following plugins: %1$s.', 'gramophone' ),
			'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'gramophone' ), // %1$s = plugin name(s)
			'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'gramophone' ), // %1$s = plugin name(s)
			'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'gramophone' ), // %1$s = plugin name(s)
			'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'gramophone' ), // %1$s = plugin name(s)
			'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'gramophone' ), // %1$s = plugin name(s)
			'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'gramophone' ), // %1$s = plugin name(s)
			'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'gramophone' ),
			'activate_link'                   => _n_noop( 'Activate installed plugin', 'Activate installed plugins', 'gramophone' ),
			'return'                          => __( 'Return to Required Plugins Installer', 'gramophone' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'gramophone' ),
			'complete'                        => __( 'All plugins installed and activated successfully. %s', 'gramophone' ),
			'nag_type'                        => 'updated',
		),
	);

	tgmpa( $plugins, $config );

}
add_action( 'tgmpa_register', 'required_plugins' );


