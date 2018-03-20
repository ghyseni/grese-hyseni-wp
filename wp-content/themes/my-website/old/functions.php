<?php

/*
 * Add navigation menu theme support
 */
function register_my_menus() {
    register_nav_menus(
            array(
                'main-menu' => __('Main Menu'),
                'social-media' => __('Social Media'),
            )
    );
}

add_action('init', 'register_my_menus');

/*
 * Register sidebars
 */
$sidebar_args = array(
    'name' => __('Sidebar'),
    'id' => 'sidebar',
    'description' => '',
    'class' => '',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h2 class="widgettitle">',
    'after_title' => '</h2>');

register_sidebar($sidebar_args);


/*
 * Settings options
 */
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'My Settings',
        'menu_title' => 'My Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

/*
 * Enable support for Post Thumbnails on posts and pages.
 *
 */
add_theme_support('post-thumbnails');
set_post_thumbnail_size(825, 510, true);

/*
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded  tag in the document head, and expect WordPress to
 * provide it for us.
 */
add_theme_support('title-tag');




