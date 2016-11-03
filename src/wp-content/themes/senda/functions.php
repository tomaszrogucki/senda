<?php

add_action('wp_enqueue_scripts', 'enqueue_parent_styles');
function enqueue_parent_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

/**
 * Remove parent functions
 */


add_action( 'wp_loaded', 'senda_remove_parent_functions' );
function senda_remove_parent_functions() {
    remove_action( 'amadeus_footer', 'amadeus_footer_credits' );
}

/**
 * Footer credits
 */

add_action( 'amadeus_footer', 'senda_amadeus_footer_credits', 15);
function senda_amadeus_footer_credits() {
	echo '<a href="' . esc_url( __( 'http://senda.com.pl/', 'senda' ) ) . '">';
		printf( __( '%s', 'senda' ), 'Senda' );
	echo '</a>';
	echo '<span class="sep"> | </span>';
	printf( __( 'Copyright 2016 by %1$s.', 'senda' ), '<a href="http://senda.com.pl" rel="designer">Senda</a>' );
}
