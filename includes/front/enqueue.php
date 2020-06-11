<?php


    function ax_enqueue(){
        $ver                = THEME_DEV_MODE ? time() : false;
        $uri    = get_theme_file_uri();


        wp_register_style( 'main_css', $uri . '/assets/css/main.css', [], $ver );
        wp_register_style( 'slick_css', $uri . '/assets/css/slick.css', [], $ver );
        wp_register_style( 'slick_theme',  $uri . '/assets/css/slick-theme.css', [], $ver);

        wp_register_script( 'main_js', $uri . '/js/main.js', [], $ver );
        wp_register_script( 'gsap_core', $uri . '/js/gsap.min.js', [], $ver ) ;
        wp_register_script( 'draggable', $uri . '/js/Draggable.min.js', [], $ver);
        wp_register_script( 'slick_js', $uri . '/js/slick.min.js', [], $ver );

        wp_enqueue_style( 'main_css' );
        wp_enqueue_style( 'slick_css');
        wp_enqueue_style( 'slick_theme' );

        wp_enqueue_script('jquery');
        wp_enqueue_script( 'gsap_core');
        wp_enqueue_script( 'draggable');
        wp_enqueue_script( 'main_js' );
        wp_enqueue_script( 'slick_js');

    }

    function builder_enqueue_script(){
        $ver                = THEME_DEV_MODE ? time() : false;
        $uri    = get_theme_file_uri();

        wp_register_script( 'elementor_script', $uri . '/js/elementor-scripts.js', [], $ver);

        wp_enqueue_script('elementor_script');

    }