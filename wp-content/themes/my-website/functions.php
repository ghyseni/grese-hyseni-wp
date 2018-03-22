<?php
function register_my_menus() {
    register_nav_menus(
        array(
            'main-menu' => __( 'Main Menu' ),
            'social-media-menu' => __( 'Social Media Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );
