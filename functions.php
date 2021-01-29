<?php
function beecome_script() {
        wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/reset.css', array(), '4.5.0' );
        wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css', array(), '4.5.0' );
        wp_enqueue_style( 'beecome', get_template_directory_uri() . '/css/front.css', array(), '1.0.0' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
    }
?>