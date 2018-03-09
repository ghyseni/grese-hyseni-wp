<!DOCTYPE html>
<html class="no-js" lang="en-US">

<head>
  <title><?php bloginfo('title'); ?></title>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no" />
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" />
  <link rel="stylesheet" href="../css/screen.css" />
</head>
<body>
  <header id="header">
    <h1><a href="../"><?php bloginfo('title'); ?></a></h1>
    <!-- .opened class will be added to #nav using a jquery funciton, to open the menu after clicking the menu button -->
    <nav id="nav">
  <?php  wp_nav_menu( array( 'theme_location' => 'main-menu', 'class' => 'menu' ) ); ?>
    <ul class="network">
        <li><a class="facebook" href="#"></a></li>
        <li><a class="linkedin" href="#"></a></li>
    </ul>
    </nav>
    <!-- .close class will be added using jquery function to change the shape of the menu icon to X after menu is opened -->
    <button id="show-nav">
      <span class="button-line"></span>
    </button>
  </header>
