<?php
/**
 **********************************************
 * header.php
 **********************************************
 *
 * The general header.
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
<!doctype html>

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]> <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php esc_url(get_template_directory_uri()) ?>lib/images/favicons/favicon.ico">

  <title>
    <?php wp_title( '|', true, 'right' ); ?>
  </title>

  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> <?php post_class('title_post group'); ?>>

<!--
<header class="navbar navbar-dark navbar-static-top bg-inverse" role="banner">
  <div class="clearfix">
    <button class="navbar-toggler pull-xs-right hidden-sm-up" type="button" data-toggle="collapse" data-target="#bd-main-nav">
      &#9776;
    </button>
    <a class="navbar-brand hidden-sm-up" href="<?php echo esc_url(home_url()); ?>">
      <?php bloginfo( 'name' ); ?>
    </a>
  </div>
  <div class="collapse navbar-toggleable-xs" id="bd-main-nav">
    <nav class="nav navbar-nav">
      <a class="nav-item nav-link " href="<?php echo esc_url(home_url()); ?>"><?php bloginfo( 'name' ); ?></a>
      <a class="nav-item nav-link active" href="/getting-started/introduction/">Documentation</a>
      <a class="nav-item nav-link " href="/examples/">Examples</a>
      <a class="nav-item nav-link" href="http://themes.getbootstrap.com">Themes</a>
      <a class="nav-item nav-link" href="http://expo.getbootstrap.com">Expo</a>
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
      <a class="nav-item nav-link" href="http://blog.getbootstrap.com">Blog</a>
    </nav>
  </div>
</header>
-->
<header class="navbar navbar-dark navbar-static-top bg-inverse" role="banner">
  <div class="clearfix">
    <button class="navbar-toggler pull-xs-right hidden-sm-up" type="button" data-toggle="collapse" data-target="#bd-main-nav">
      &#9776;
    </button>
    <a class="navbar-brand hidden-sm-up" href="<?php echo esc_url(home_url()); ?>">
      <?php bloginfo( 'name' ); ?>
    </a>
  </div>
  <div class="collapse navbar-toggleable-xs" id="bd-main-nav">
    <nav class="" role="banner">

    <!-- Brand -->
      <a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>"><?php bloginfo( 'name' ); ?></a>

      <!-- Links -->

        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-toggleable-xs',
                'container_id'      => 'bd-main-nav',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>

<!--
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Link 1</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Link 2</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="Preview">
            <a class="dropdown-item" href="#">Dropdown Link 1</a>
            <a class="dropdown-item" href="#">Dropdown Link 2</a>
            <a class="dropdown-item" href="#">Dropdown Link 3</a>
          </div>
        </li>
      </ul>
-->

      <form class="form-inline pull-xs-right">
        <input class="form-control" type="text" placeholder="Search">
        <button class="btn btn-success-outline" type="submit">Search</button>
      </form>

    </nav>
  </div>
</header>
