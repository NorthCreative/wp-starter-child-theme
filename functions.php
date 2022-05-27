<?php
/**
 * NCB DevTeam
 * This is the child theme for Twenty Twenty-One theme.
 */
add_action( 'wp_enqueue_scripts', 'wpsct_enqueue_styles' );
function wpsct_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
