<?php
/**
 **********************************************
 * frame/admin.php
 ********************************************** 
 *
 * Custom styling for the backend.
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
 * login_styles/0 
 ********************************************** 
 *
 * login_styles/0 enqueues the `wp-login` css  
 * for the WordPress login page.  
 * 
**/

function login_styles() 
{
    wp_enqueue_style( 
        'bigbooty-login', 
        get_template_directory_uri() . '/admin/login/login.css'
    );
}
add_action( 'login_enqueue_scripts', 'login_styles' );


/**
 **********************************************
 * admin_logo/0
 ********************************************** 
 *
 * admin_logo/0 replaces the default WordPress
 * `logo` on the `/wp-login/`. It is set to
 * `display: none;` by default.
 * 
**/

function admin_logo() 
{ ?>
<style>
    body.login div#login h1 a {
        display: none;
    }
</style>
<?php }
add_action( 'login_enqueue_scripts', 'admin_logo' );


/**
 **********************************************
 * admin_colors/0
 ********************************************** 
 *
 * admin_colors/0 adds a custom color scheme  
 * to the theme. This color scheme is just
 * a friendly example.
 * 
**/

function admin_colors()
{
    wp_admin_css_color(
        'BigBooty', 
	__( 'BigBooty' ),
	admin_url("admin/colors/bigbooty.css"),
	array('#07273E', '#14568A', '#D54E21', '#2683AE')
    );
}
add_action('admin_init', 'admin_colors');


/**
 **********************************************
 * admin_footer/0
 ********************************************** 
 *
 * admin_footer/0 is the function that adds a
 * `message` to the admin footer.
 * 
**/
	
function admin_footer() 
{
    echo "Built with <a href='https://github.com/pjhampton/BigBooty' target='_blank'>BigBooty Starter Theme</a>";
}
add_filter('admin_footer_text', 'admin_footer');

?>
