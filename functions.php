<?php
function beecome_style() {
	wp_enqueue_style( 'normalize', get_theme_file_uri() . '/css/reset.css', array(), '4.5.0' );
	wp_enqueue_style( 'style', get_theme_file_uri() . '/style.css', array(), '1.0.0' );
	wp_enqueue_script( 'Jquery-script', plugin_dir_url( __FILE__ ) . '/js/my-script.js', array( 'jquery' ), '1.0.0', true  );
	wp_enqueue_script( 'aside', get_theme_file_uri() .'/aside.js', array('slick'), '1.0.0', true);
	if ( is_single ) {
		wp_enqueue_style( 'normalize', get_theme_file_uri() . '/css/kaikousya.css', array(), '4.5.0' );
		}
	elseif( is_page ){
		wp_enqueue_style( 'slick', get_theme_file_uri() . '/css/slick.css', array(), '4.5.0' );
		wp_enqueue_style( 'beecome', get_theme_file_uri() . '/css/front.css', array(), '1.0.0' );
		wp_enqueue_script( 'slick', get_theme_file_uri() .'/slick.min.js', array(), '1.0.0', true); 
	}	
}
add_action( 'wp_enqueue_scripts', 'beecome_style' );
