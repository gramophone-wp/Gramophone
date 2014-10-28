<?php


/*
	Change this to your theme's footer
*/
function bigbooty_footer() 
{
	echo "<a href='https://github.com/pjhampton/BigBooty' target='_blank'>BigBooty</a> &hearts;'s You!</p>";
}
add_filter('admin_footer_text', 'bigbooty_footer');


?>