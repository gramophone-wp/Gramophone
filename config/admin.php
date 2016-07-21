<?php
/**
 **********************************************
 * config/admin.php
 ********************************************** 
 *
 * Custom configuration for the administration
 * area.
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
 * admin_colors/0
 ********************************************** 
 *
 * admin_colors/0 adds a custom color scheme  
 * to the theme. This color scheme is just
 * a friendly example. The `array` of hex
 * codes are the colors of the theme.
 * 
**/

function admin_colors()
{
  wp_admin_css_color(
    'BigBooty', 
    __( 'BigBooty' ),
    admin_url("admin/bigbooty.css"),
    array('#07273E', '#14568A', '#D54E21', '#2683AE')
  );
}
add_action('admin_init', 'admin_colors');


/**
 **********************************************
 * clean_dashboard/0
 ********************************************** 
 *
 * WordPress by default comes with a lot of 
 * crud. Let's clean up the admin dashboard.
 * 
 **/

function clean_dashboard(){
  global $wp_meta_boxes;

  // unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);       // Right Now Widget
  // unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);        // Activity Widget
  // unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']); // Comments Widget
  // unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);  // Incoming Links Widget
  // unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);         // Plugins Widget
  // unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);       // Quick Press Widget
  // unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);     // Recent Drafts Widget
  // unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
  // unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);

  // remove plugin dashboard boxes
  // unset($wp_meta_boxes['dashboard']['normal']['core']['yoast_db_widget']);           // Yoast's SEO Plugin Widget
  // unset($wp_meta_boxes['dashboard']['normal']['core']['rg_forms_dashboard']);        // Gravity Forms Plugin Widget
  // unset($wp_meta_boxes['dashboard']['normal']['core']['bbp-dashboard-right-now']);   // bbPress Plugin Widget

}
add_action( 'wp_dashboard_setup', 'clean_dashboard' );


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
  echo "Built with <a href='https://github.com/pjhampton/BigBooty' target='_blank'>BigBooty</a>, the Bootstrap starter theme.";
}
add_filter('admin_footer_text', 'admin_footer');

?>
