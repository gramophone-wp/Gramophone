<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">

    <title>
      <?php wp_title( '|', true, 'right' ); ?>
      <?php bloginfo( 'name' ); ?>
    </title>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>


<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>
    </div>

    <div class="navbar-collapse collapse">
 <?php 
    $menu_args = array(
      'menu'            => 'header-menu', 
      'container'       => 'container', 
      'container_class' => 'container_class', 
      'container_id'    => 'container_id',
      'menu_class'      => 'nav navbar-nav',
      'menu_id'         => 'menu_id',
      'echo'            => true);
    ?>
    <?php wp_nav_menu($menu_args);?>

    </div><!--/.navbar-collapse -->

  </div>
</div>
