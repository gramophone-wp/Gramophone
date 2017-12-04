<?php
/**
 * config/admin.php
 *
 * Custom configuration for the administration area.
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
 * clean_dashboard
 *
 * WordPress by default comes with a lot of
 * crud. Let's clean up the admin dashboard.
 *
 **/

function clean_dashboard() {
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
 * change logo link from wordpress.org to user site
 *
 * function changes url of the admin logo
 *
**/

function login_url() {
    return home_url();
}

/**
 * change logo alt-text to show user site name
 *
 * function changes the alt-text of the admin logo to user site name
 *
**/

function login_title() {
    return get_option('blogname');
}

/**
 * call logo url redirect to user site name on on login
 *
 * function will only call url change on the login page
 *
**/

add_filter('login_headerurl', 'login_url');
add_filter('login_headertitle', 'login_title');


/**
 * admin_footer
 *
 * admin_footer is the function that adds a
 * `message` to the admin footer.
 *
**/

function admin_footer() {
    echo "Built with <a href='https://github.com/pjhampton/Gramophone' target='_blank'>Gramophone</a>, the Bootstrap starter theme.";
}
add_filter('admin_footer_text', 'admin_footer');

?>
