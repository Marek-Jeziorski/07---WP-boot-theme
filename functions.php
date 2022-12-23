<?php

// Load Stylesheets
function load_css()
{
    wp_register_style('myStyle', get_template_directory_uri() . '/css/mystyle.css', array(), false);
    wp_enqueue_style('myStyle');
}

add_action('wp_enqueue_scripts', 'load_css');

// Load JavaScript
function load_js()
{
    wp_register_script('main-js', get_template_directory_uri() . '/js/main.js', array(), false, true);
    wp_enqueue_script('main-js');
}

add_action('wp_enqueue_scripts', 'load_js');

// Theme Options
add_theme_support('menus');

// Register Menu Locations
register_nav_menus(
    array(
        'main-menu' => 'Lokalizacja Menu Głównego',
        'support-menu' => 'Lokalizacja Menu Dodatkowego'
    )
);