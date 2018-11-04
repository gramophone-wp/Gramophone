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

	<nav class="navbar navbar-expand-md navbar-light bg-ligh" role="navigation">
		<div class="container">

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a>
			<?php
			wp_nav_menu( array(
				'theme_location'    => 'primary',
				'depth'             => 2,
				'container'         => 'div',
				'container_class'   => 'collapse navbar-collapse',
				'container_id'      => 'bs-example-navbar-collapse-1',
				'menu_class'        => 'nav navbar-nav',
				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				'walker'            => new WP_Bootstrap_Navwalker(),
			) );
			?>
			<form class="form-inline my-2 my-lg-0 hidden-md-down" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<input name="s" id="s" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-info search-btn my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>
