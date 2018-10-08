<?php
/**
 * The theme header
 *
 * @link https://codex.wordpress.org/Theme_Development#Document_Head_.28header.php
 * @package gramophone
 **/

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="<?php esc_url( get_template_directory_uri() ); ?>lib/images/favicons/favicon.ico">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?> <?php post_class( 'title_post group' ); ?>>

