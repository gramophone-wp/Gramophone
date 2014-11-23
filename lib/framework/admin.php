<?php


/*
	Change this to your theme's footer
*/
function bigbooty_footer() 
{
	echo "<a href='https://github.com/pjhampton/BigBooty' target='_blank'>BigBooty</a> &hearts;'s You!</p>";
}
add_filter('admin_footer_text', 'bigbooty_footer');


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

?>