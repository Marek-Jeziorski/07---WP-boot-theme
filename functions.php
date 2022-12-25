<?php

// Load Stylesheets
function load_css()
{
    wp_register_style('variables', get_template_directory_uri() . '/assets/css/variables.css', array(), false);
    wp_enqueue_style('variables');

    wp_register_style('global', get_template_directory_uri() . '/assets/css/global.css', array(), false);
    wp_enqueue_style('global');

    wp_register_style('menu', get_template_directory_uri() . '/assets/css/menu.css', array(), false);
    wp_enqueue_style('menu');

}

add_action('wp_enqueue_scripts', 'load_css');

// Load JavaScript
function load_js()
{
    wp_register_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);
    wp_enqueue_script('main-js');
}

add_action('wp_enqueue_scripts', 'load_js');

// Theme Options
add_theme_support('menus');

// Register Menu Locations
register_nav_menus(
    array(
        'main-menu' => 'Umieść w lokalizacji main-menu',
        'support-menu' => 'Umieść w lokalizacji support-menu'
    )
);