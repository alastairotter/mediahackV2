<?php
function my_theme_enqueue_styles() {

    $parent_style = 'media-skeleton-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

wp_enqueue_script('jquery');

function wpb_add_scripts() {
 
wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.css');
wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Raleway:300', false ); 
wp_enqueue_style( 'wpb-google-fonts2', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,700,800,900|Raleway:300', false ); 
    
wp_enqueue_script( 'utility-scripts', get_stylesheet_directory_uri() . '/js/script.js', array(), '20151215', true );
    
}
 
add_action( 'wp_enqueue_scripts', 'wpb_add_scripts' );




 $args = array(
//	'width'         => 980,
//	'height'        => 60,
	'default-image' => get_stylesheet_directory_uri() . '/images/header.jpg',
);
add_theme_support( 'custom-header', $args );



add_theme_support( 'post-formats', array( 'aside', 'gallery', 'video' ) );


// image sizes 

add_theme_support( 'post-thumbnails' );

add_image_size( 'tutorial-thumb', 225, 125, true );
add_image_size( 'guides-thumb', 225, 180, true );


// add footer menu

function register_my_menu() {
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
    register_nav_menu('footer-menu-2',__( 'Footer Menu 2' ));
}
add_action( 'init', 'register_my_menu' );



?>