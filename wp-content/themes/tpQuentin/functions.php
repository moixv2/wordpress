<?php

define('THEME_VERSION', '1.0.0');

function theme_scripts() {
wp_enqueue_style('theme_custom', get_template_directory_uri() . '/
style.css', array('theme_bootstrap-min'),THEME_VERSION, 'all');

wp_enqueue_style('theme_bootstrap-min', get_template_directory_uri() . '/
/css/bootstrap.min.css', array(),THEME_VERSION, 'all');

wp_enqueue_script('theme_mainscript', get_template_directory_uri() . '/
/js/style.js', array('theme_bootstrap-js'),THEME_VERSION, true);

wp_enqueue_script('theme_bootstrap-js', get_template_directory_uri() . '/js/
bootstrap.min.js', array('jquery'),THEME_VERSION, true);


}

add_action('wp_enqueue_scripts', 'theme_scripts');



function wp_setup(){

    /**support de vignette */
    add_theme_support('post-thumbnails');

    /**enleve generateur de version*/ 
    remove_action( 'wp_head', 'wp_generator' );

     add_theme_support('post-thumbnails');
     add_theme_support('title-tag');

}

add_action('after_setup_theme', 'wp_setup');


?>