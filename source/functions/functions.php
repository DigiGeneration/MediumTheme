<?php

add_action( 'wp_enqueue_scripts', 'MediumTheme_enqueue_scripts' );

if ( ! function_exists( 'MediumTheme_enqueue_scripts' ) ) :

/**
* Add theme styles and scripts here
*/
function MediumTheme_enqueue_scripts() {

	if ( ! is_admin() ) {
		wp_enqueue_style(
			'MediumTheme-style',
			get_bloginfo( 'stylesheet_url' )
		);
	}

}

endif; // MediumTheme_enqueue_scripts

add_action( 'after_setup_theme', 'MediumTheme_setup' );

if ( ! function_exists( 'MediumTheme_setup' ) ) :

/**
* Set up your theme here
*/
function MediumTheme_setup() {
	add_theme_support( 'post-thumbnails' );
}

endif; // MediumTheme_setup
