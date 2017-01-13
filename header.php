<?php
/**
 *******************************************************************************
 * //header.php
 *******************************************************************************
 *
 * The header.
 *
 * CODEX REF
 * https://codex.wordpress.org/Theme_Development#Document_Head_.28header.php
 *
 * @author
 * @copyright
 * @link
 * @todo
 * @license
 * @since
 * @version
**/
?>
<!DOCTYPE html>
<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]> <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?php esc_url(get_template_directory_uri()) ?>lib/images/favicons/favicon.ico">

    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> <?php post_class('title_post group'); ?>>

    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="container">
      <a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>"><?php bloginfo( 'name' ); ?></a>

      <div class="collapse navbar-collapse">

        <?php
            wp_nav_menu( array(
                'menu'           => 'primary',
                'theme_location' => 'primary',
                'depth'          => 1,
                'container'      => "ul",
                'menu_class'     => "navbar-nav mr-auto",
                'fallback_cb'    => 'bootstrap_walker::fallback',
                'walker'         => new Bootstrap_Walker()
            ) );
        ?>

        <form class="form-inline hidden-xs-down pull-right" method="get" action="<?php echo home_url( '/' ); ?>">
            <input name="s" id="s" class="form-control" type="text" placeholder="Search">
            <button class="btn btn-outline-info" type="submit">Search</button>
        </form>
        </div>
      </div>
    </nav>
