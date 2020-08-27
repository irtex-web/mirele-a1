<?php

/**
 *
 * @package WordPress
 * @subpackage Mirele
 * @version 1.0.0
 */

\Mirele\TWIG::Render('Layout/header', [
    'blog' => [
        'name' => get_bloginfo ('name', 'display'),
        'description' => get_bloginfo ('description', 'display'),
        'wpurl' => get_bloginfo ('wpurl', 'display'),
        'url' => get_bloginfo ('url', 'display'),
        'charset' => get_bloginfo ('charset', 'display'),
        'version' => get_bloginfo ('version', 'display'),
        'html_type' => get_bloginfo ('html_type', 'display'),
        'text_direction' => get_bloginfo ('text_direction', 'display'),
        'language' => get_bloginfo ('language', 'display'),
        'stylesheet_url' => get_bloginfo ('stylesheet_url', 'display'),
        'stylesheet_directory' => get_bloginfo ('stylesheet_directory', 'display'),
        'template_url' => get_bloginfo ('template_url', 'display'),
        'pingback_url' => get_bloginfo ('pingback_url', 'display'),
        'atom_url' => get_bloginfo ('atom_url', 'display'),
        'home' => get_bloginfo ('home', 'display'),
        'siteurl' => get_bloginfo ('siteurl', 'display')
    ],
    'user' => (object) wp_get_current_user(),
    'permalink' => [
        'account' => [
            'main' => get_permalink(wc_get_page_id('myaccount'))
        ]
    ]
]);
