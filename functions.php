<?php 

// Function to load styles
function load_stylesheets() {

  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, "all");
  wp_enqueue_style('bootstrap');

  wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, "all");
  wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');


// function to include jquery
function include_jquery() {
  wp_deregister_script( 'jquery' );
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.6.0.min.js','', 1, true );
  add_action('wp_enqueue_scripts', 'jquery');
}
add_action('wp_enqueue_scripts', 'include_jquery');


// Function to load scripts
function loadjs() {
  wp_register_script( 'customjs', get_template_directory_uri() . '/js/scripts.js', array(), 1, true);
  wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'loadjs');