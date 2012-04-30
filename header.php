<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
  <title>
    <?php // Outputs a page title with your site's name from the WP settings and the individual page/post title, separated by a '|' ?>
    <?php bloginfo('name'); ?><?php wp_title( '|', true, 'right' ); ?>
  </title>

  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">

  <?php // wp_head(); allows different plugins to add any CSS or JavaScript files they may need ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- Begin #header -->
  <div id="header">
    <h1 id="logo">
      <a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a>
    </h1>
    <p id="tagline"><?php bloginfo( 'description' ); ?></p>

    <?php // This will output the menu you create and assign to the 'Header Menu' position in the admin; otherwise, it will output a Home link and links to each top-level page ?>
    <?php wp_nav_menu( array( 'container_class' => 'menu', 'theme_location' => 'header-menu' ) ); ?>
  </div>
  <!-- End #header -->

  <!-- Begin #main -->
  <div id="main">

<!-- End header.php -->