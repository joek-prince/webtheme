<?php
function princeconsulting_theme_scripts() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0');
    wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'princeconsulting_theme_scripts');
