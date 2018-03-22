<?php
/* Register Menus, without this your theme won't support Menu,
and Appearance -> Menus won't be visible from the dashboard*/
function register_my_menus()
{
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu'),
            'social-media-menu' => __('Social Media Menu')
        )
    );
}

add_action('init', 'register_my_menus');

/* Add theme support for post thumbnails */
add_theme_support( 'post-thumbnails' );
