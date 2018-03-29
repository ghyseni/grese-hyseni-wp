<!DOCTYPE html>
<html class="no-js" lang="en-US">

<head>
    <title><?php echo bloginfo('name'); ?> - <?php echo bloginfo('description'); ?></title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no"/>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/frontend/css/screen.css"/>
    <?php wp_head(); ?>
</head>

<body>
<header id="header">
    <h1><a href="<?php echo get_home_url(); ?>"><?php echo bloginfo('name'); ?></a></h1>
    <!-- .opened class will be added to #nav using a jquery funciton, to open the menu after clicking the menu button -->
    <nav id="nav">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'main-menu',
                'menu_class' => 'my_extra_menu_class'
            ));
        wp_nav_menu(
            array(
                'theme_location' => 'social-media-menu',
                'menu_class' => 'network'
            ));
        ?>
    </nav>
    <!-- .close class will be added using jquery function to change the shape of the menu icon to X after menu is opened -->
    <button id="show-nav">
        <span class="button-line"></span>
    </button>
</header>