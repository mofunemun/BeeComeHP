<?php
function beecome_style() {
        wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/reset.css', array(), '4.5.0' );
        wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css', array(), '4.5.0' );
        wp_enqueue_style( 'beecome', get_template_directory_uri() . '/css/front.css', array(), '1.0.0' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
    }
add_action( 'wp_enqueue_scripts', 'beecome_style' );

function beecome_script(){
        wp_enqueue_script( 'aside', get_template_directory_uri().'/aside.js', array(), '1.0.0', true);
        wp_enqueue_script( 'slick', get_template_directory_uri().'/slick.min.js', array(), '1.0.0', true); 
}