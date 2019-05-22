<?php

function add_stylesheet(){
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'urelles-style', get_template_directory_uri() .'/css/urelles-style.css' );

}

add_action('wp_enqueue_scripts', 'add_stylesheet')

   

?>