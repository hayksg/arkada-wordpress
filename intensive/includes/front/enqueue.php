<?php

function intensive_enqueue() {
    wp_register_style( 'intensive-animate', get_template_directory_uri() . '/site/css/animate.css' );
    wp_register_style( 'intensive-bootstrap', get_template_directory_uri() . '/site/css/bootstrap.css' );
    wp_register_style( 'intensive-slick-theme', get_template_directory_uri() . '/site/css/slick-theme.css' );
    wp_register_style( 'intensive-slick', get_template_directory_uri() . '/site/css/slick.css' );
    wp_register_style( 'intensive-slicknav-min', get_template_directory_uri() . '/site/css/slicknav.min.css' );
    wp_register_style( 'intensive-style', get_template_directory_uri() . '/site/css/style.css' );

    wp_enqueue_style( 'intensive-animate' );
    wp_enqueue_style( 'intensive-bootstrap' );
    wp_enqueue_style( 'intensive-slick-theme' );
    wp_enqueue_style( 'intensive-slick' );
    wp_enqueue_style( 'intensive-slicknav-min' );
    wp_enqueue_style( 'intensive-style' );

    wp_register_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyC88xBYuhNDzlY7RZUWb6i4pfHclRv_Ya8', array(), null, true );
    wp_register_script( 'intensive-maskedinput-min', get_template_directory_uri() . '/site/js/jquery.maskedinput.min.js', array(), null, true );
    wp_register_script( 'intensive-slick-min', get_template_directory_uri() . '/site/js/slick.min.js', array(), null, true );
    wp_register_script( 'intensive-jquery-slicknav', get_template_directory_uri() . '/site/js/jquery.slicknav.min.js', array(), null, true );
    wp_register_script( 'intensive-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array(), null, true );
    wp_register_script( 'intensive-ie10-viewport-bug-workaround', 'https://maxcdn.bootstrapcdn.com/js/ie10-viewport-bug-workaround.js', array(), null, true );
    wp_register_script( 'intensive-app-script', get_template_directory_uri() . '/site/js/app-script.js', array(), null, true );

    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'google-map' );
    wp_enqueue_script( 'intensive-maskedinput-min' );
    wp_enqueue_script( 'intensive-slick-min' );
    wp_enqueue_script( 'intensive-jquery-slicknav' );
    wp_enqueue_script( 'intensive-bootstrap' );
    wp_enqueue_script( 'intensive-ie10-viewport-bug-workaround' );
    wp_enqueue_script( 'intensive-app-script' );
}
