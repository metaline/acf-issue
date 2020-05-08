<?php

/**
 * WP Child Themes
 *
 * @link https://developer.wordpress.org/themes/advanced-topics/child-themes/
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
});

/**
 * ACF Local JSON
 *
 * @link https://www.advancedcustomfields.com/resources/local-json/
 */
add_filter('acf/settings/save_json', function () {
    return get_stylesheet_directory() . '/acf-json';
});

add_filter('acf/settings/load_json', function ($paths) {
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/acf-json';

    return $paths;
});
