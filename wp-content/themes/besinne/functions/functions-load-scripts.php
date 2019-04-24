<?php

/* =========

	ENQUEUE SCRIPTS

============ */

add_action( 'wp_enqueue_scripts', 'nakedPress_enqueuer' );

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


/* =========

	SCRIPTS

============ */

// First get rid of the standard Wordpress jQuery and let Google host your jQuery
// Be sure to load the latest version

function modify_jquery() {

	if (!is_admin()) {
	    wp_deregister_script('jquery');
	    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', false, '3.1.1');
	    wp_enqueue_script('jquery');
	}

}

add_action('init', 'modify_jquery');



// Load scripts and styles using the enqueuer. You can add your own style or script by copying the lines.

function nakedPress_enqueuer() {

	wp_register_script( 'mainJS', get_template_directory_uri().'/assets/js/main.js', array( 'jquery' ) );
	wp_enqueue_script( 'mainJS' );

	wp_register_style( 'fonts', '//fast.fonts.net/cssapi/5ac7ba40-26c8-46ed-8ac1-d9a12b1a97c0.css', '', '', 'screen' );
    wp_enqueue_style( 'fonts' );

    wp_register_style( 'fontawesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', '', '', 'screen' );
    wp_enqueue_style( 'fontawesome' );

	wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
    wp_enqueue_style( 'screen' );

}	