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

<header itemscope itemtype="http://schema.org/WPHeader">
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>">
          <?php bloginfo( 'name' ); ?>
        </a>
      </div>

      <div class="navbar-collapse collapse">
      <?php
        wp_nav_menu( array(
          'menu'             =>  'primary',
          'theme_location'   =>  'primary',
          'depth'            =>  2,
          'container'        =>  '',
          'container_class'  =>  'collapse navbar-collapse',
          'container_id'     =>  '',
          'menu_class'       =>  'nav navbar-nav navbar-right',
          'fallback_cb'      =>  'wp_bootstrap_navwalker::fallback',
          'walker'           =>  new wp_bootstrap_navwalker())
        );
      ?>
      </div>
    </div>
  </div>
</header>
