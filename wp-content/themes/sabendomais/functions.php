<?php

    function sabendomais_enqueue_styles() {
        wp_enqueue_style( 'sabendomais-style', get_stylesheet_uri(), '1.9' );
        wp_enqueue_style( 'slickmain', get_template_directory_uri() . '/slick.css' );
        wp_enqueue_style( 'slicktheme', get_template_directory_uri() . '/slick-theme.css' );
    }

    function sabendomais_enqueue_scripts() {
        $dependencies = array('jquery');
        wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', $dependencies, '4.1.3', true );
        wp_enqueue_script( 'slideCase', get_template_directory_uri().'/js/slideCase.js',$dependencies , '1.2', true );
    }

    function sabendomais_enqueue_scripts_slick() {
        wp_enqueue_script('slick', get_template_directory_uri() .'/js/slick.js', array('jquery'), null, true);
    }

    add_theme_support( 'post-thumbnails' );
    add_action( 'wp_enqueue_scripts', 'sabendomais_enqueue_styles' );
    add_action( 'wp_enqueue_scripts', 'sabendomais_enqueue_scripts' );
    add_action( 'wp_enqueue_scripts', 'sabendomais_enqueue_scripts_slick' );

?>