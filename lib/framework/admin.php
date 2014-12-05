<?php

/*
	Custom Login Screen
	Codex: http://codex.wordpress.org/Customizing_the_Login_Form
*/

function bigbooty_login() 
{
    wp_enqueue_style( 'bigbooty-login', get_template_directory_uri() . '/admin/login/login.css' );
}
add_action( 'login_enqueue_scripts', 'bigbooty_login' );


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