<?php
/*
Plugin Name: Wordpress-Widget-Example
Description: Wordpress Widget powered by ReactJS
Version:     0.1.0
Author:      Federico Knüssel
Author URI:  http://fknussel.github.io
*/

function wp_widget_example() {
  echo '<div id="root"></div>';
}

function include_react_files() {
    wp_enqueue_style( 'prefix-style', plugins_url('css/main.9a0fe4f1.css', __FILE__) );
    wp_enqueue_script( 'plugin-scripts', plugins_url('js/main.fdc4e6ad.js', __FILE__), array(), '0.1.0', true );
}

add_action( 'wp_enqueue_scripts', 'include_react_files' );
