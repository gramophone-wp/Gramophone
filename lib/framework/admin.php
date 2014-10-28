<?php

/*
	Change this to your theme's footer
*/
function bigbooty_footer () 
{
	echo "A <a href='https://github.com/pjhampton/BigBooty' target='_blank'>BigBooty</a> &hearts;'in Theme | ...Designed by you! <strong>:-)</strong></p>";
}
add_filter('admin_footer_text', 'bigbooty_footer');



?>