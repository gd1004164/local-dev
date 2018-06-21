<?php 
add_action('wp_enqueue_scripts', 'load_parent_style');
function load_parent_style(){
    wp_enqueue_style('child-style', get_stylesheet_directory_uri().'/src/css/main.css', array(), '1.000');php?>
