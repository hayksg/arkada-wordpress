<?php

function arkada_enqueue() {
    wp_register_style( 'arkada-animate', get_template_directory_uri() . '/site/css/animate.css' );
    wp_register_style( 'arkada-bootstrap', get_template_directory_uri() . '/site/css/bootstrap.css' );
    wp_register_style( 'arkada-slick-theme', get_template_directory_uri() . '/site/css/slick-theme.css' );
    wp_register_style( 'arkada-slick', get_template_directory_uri() . '/site/css/slick.css' );
    wp_register_style( 'arkada-slicknav-min', get_template_directory_uri() . '/site/css/slicknav.min.css' );
    wp_register_style( 'arkada-style', get_template_directory_uri() . '/site/css/style.css' );
    wp_register_style( 'arkada-font-awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css' );

    wp_enqueue_style( 'arkada-animate' );
    wp_enqueue_style( 'arkada-bootstrap' );
    wp_enqueue_style( 'arkada-slick-theme' );
    wp_enqueue_style( 'arkada-slick' );
    wp_enqueue_style( 'arkada-slicknav-min' );
    wp_enqueue_style( 'arkada-style' );
    wp_enqueue_style( 'arkada-font-awesome' );

    wp_register_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyC88xBYuhNDzlY7RZUWb6i4pfHclRv_Ya8', array(), null, true );
    wp_register_script( 'arkada-maskedinput-min', get_template_directory_uri() . '/site/js/jquery.maskedinput.min.js', array(), null, true );
    wp_register_script( 'arkada-slick-min', get_template_directory_uri() . '/site/js/slick.min.js', array(), null, true );
    wp_register_script( 'arkada-jquery-slicknav', get_template_directory_uri() . '/site/js/jquery.slicknav.min.js', array(), null, true );
    wp_register_script( 'arkada-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array(), null, true );
    wp_register_script( 'arkada-ie10-viewport-bug-workaround', 'https://maxcdn.bootstrapcdn.com/js/ie10-viewport-bug-workaround.js', array(), null, true );
    wp_register_script( 'arkada-app-script', get_template_directory_uri() . '/site/js/app-script.js', array(), null, true );

    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'google-map' );
    wp_enqueue_script( 'arkada-maskedinput-min' );
    wp_enqueue_script( 'arkada-slick-min' );
    wp_enqueue_script( 'arkada-jquery-slicknav' );
    wp_enqueue_script( 'arkada-bootstrap' );
    wp_enqueue_script( 'arkada-ie10-viewport-bug-workaround' );
    wp_enqueue_script( 'arkada-app-script' );
}
