<?php

/**
 * Include CSS files
 */
function theme_enqueue_scripts() {
        wp_enqueue_style( 'Font_Awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
        wp_enqueue_style( 'Bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
        wp_enqueue_style( 'MDB', get_template_directory_uri() . '/css/mdb.min.css' );
        wp_enqueue_style( 'Style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), '3.2.1', true );
        wp_enqueue_script( 'Tether', get_template_directory_uri() . '/js/tether.min.js',array('jquery'));
        wp_enqueue_script( 'Popper', get_template_directory_uri() . '/js/popper.min.js', array('jquery'));
        wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'));
        wp_enqueue_script( 'MDB', get_template_directory_uri() . '/js/mdb.js', array('jquery'));
        wp_enqueue_script('CustomJS', get_template_directory_uri() . '/js/custom-js.js', array('jquery'));
       }
       add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

?>