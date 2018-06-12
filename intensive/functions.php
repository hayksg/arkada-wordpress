<?php

// Set Up
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );

// Includes
include( get_template_directory() . '/includes/front/enqueue.php');

// Action Hooks
add_action( 'wp_enqueue_scripts', 'arkada_enqueue' );


// Filter Hooks


function my_acf_google_map_api( $api ){
    
    $api['key'] = 'AIzaSyC88xBYuhNDzlY7RZUWb6i4pfHclRv_Ya8';
    
    return $api;
    
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
