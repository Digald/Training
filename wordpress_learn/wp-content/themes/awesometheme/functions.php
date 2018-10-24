<?php

/**
 * Function to get the asset files from my project and import them into the php files without using link or script tags
 */
function awesome_script_enqueue()
{
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/awesome.css', array(), '1.0.0', 'all');

    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/awesome.js', array(), '1.0.0', true);
}

/**
 * function that takes the functions inside awesome_script_enqueue() and makes them avaiable to be attached to the header and footer
 */
add_action('wp_enqueue_scripts', 'awesome_script_enqueue');

/**
 * theme setup and support
 */
function awesome_theme_setup()
{
    add_theme_support('menus');

    // making multiple menus for different cases. First param is name, and second is descritption.
    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');
}

/**
 * runs whatever the function you give it before a certain event. First param is action, and second is what to run.
 */
add_action('init', 'awesome_theme_setup');
