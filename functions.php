<?php
function jod_brighters_enqueue_scripts() {
    wp_enqueue_style('jod-brighters-style', get_stylesheet_uri());
    wp_enqueue_script('jod-brighters-script', get_template_directory_uri() . '/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'jod_brighters_enqueue_scripts');
?>