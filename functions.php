<?php

function add_stylesheet(){
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'urelles-style', get_stylesheet_directory_uri() .'/css/urelles-style.css' );

}

add_action('wp_enqueue_scripts', 'add_stylesheet');

function my_scripts_method() {
    wp_enqueue_script(
        'urlles_js',
        get_stylesheet_directory_uri() . '/js/urelles_js.js',
        array( 'jquery' )
    );
}





add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

   

?>