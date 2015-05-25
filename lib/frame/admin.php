<?php
/**
 * Custom Login
 * 
 *
 * Custom styling for the backend
 *
 * @author pjh
 * @copyright 2014 - 2015
 * @link http://codex.wordpress.org/Customizing_the_Login_Form
 * @todo Finish Structure, better documentation
 * @since BigBooty 1.0.0
 */


function bigbooty_login_styles() 
{
    wp_enqueue_style( 'bigbooty-login', get_template_directory_uri() . '/admin/login/login.css' );
}
add_action( 'login_enqueue_scripts', 'bigbooty_login_styles' );


function wpse_login_enqueue_scripts() 
{
    wp_enqueue_script( 'login.js', get_template_directory_uri() . '/admin/login/login.js', array( 'jquery' ), 1.0 );
}
add_action( 'login_enqueue_scripts', 'wpse_login_enqueue_scripts', 10 );

/*
	Custom Logo
*/

function bigbooty_logo() 
{ ?>
    <style>
        body.login div#login h1 a {
        	display: none;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'bigbooty_logo' );


/*
	Custom Admin Theme
*/

function bigbooty_admin_colors()
{
	wp_admin_css_color(
		'BigBooty', 
		__( 'BigBooty' ),
		admin_url("admin/colors/bigbooty/colors.css"),
		array('#07273E', '#14568A', '#D54E21', '#2683AE')
	);
}
add_action('admin_init', 'bigbooty_admin_colors');


/*
	Change this to your theme's footer
*/
	
function bigbooty_footer() 
{
	echo "<a href='https://github.com/pjhampton/BigBooty' target='_blank'>BigBooty</a> &hearts;'s You!</p>";
}
add_filter('admin_footer_text', 'bigbooty_footer');

?>