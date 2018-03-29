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
add_theme_support('post-thumbnails');

/* Add a new Settings page */
add_action('acf/init', 'my_acf_init');

function my_acf_init()
{

    if (function_exists('acf_add_options_page')) {

        acf_add_options_page(array(
            'page_title' => __('Theme General Settings', 'my_text_domain'),
            'menu_title' => __('Theme Settings', 'my_text_domain'),
            'menu_slug' => 'theme-general-settings',
        ));

    }

}