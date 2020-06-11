<?php

//SETUP

define('THEME_DEV_MODE', true);

//Includes
    
    include(get_theme_file_path( 'includes/front/enqueue.php' ));
    include(get_theme_file_path( 'includes/setup.php'));
    include(get_theme_file_path( 'includes/nav-walker.php' ));

// HOOKS
    
    add_action('wp_enqueue_scripts', 'ax_enqueue');
    add_action( 'after_setup_theme', 'theme_setup_theme' );

    //Elementor Hooks
    add_action('elementor/editor/before_enqueue_scripts', 'builder_enqueue_script');

// Shortcodes

//Require


    require_once( get_theme_file_path( '/elementor-widgets/widgets-init.php' ) );