<?php
/**
 * config/login.php
 *
 * Custom styling for the login page.
 *
 * @license GPL-2
 */

/**
 * login_styles
 *
 * login_styles enqueues the `wp-login` css
 * for the WordPress login page.
 */

function login_styles() {
	wp_enqueue_style(
		'admin-login',
		get_template_directory_uri() . '/admin/login.css'
	);
}
add_action( 'login_enqueue_scripts', 'login_styles' );


/**
 * admin_logo
 *
 * admin_logo replaces the default WordPress
 * `logo` on the `/wp-login/`. It is set to
 * `display: none;` by default.
 */

function admin_logo() { ?>
	<style>
	#login h1 a {
		background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/static/images/logos/wordpress.png);
	}
	</style>
	<?php
}
add_action( 'login_enqueue_scripts', 'admin_logo' );

?>
