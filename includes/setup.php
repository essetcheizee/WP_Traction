<?php

function theme_setup_theme() {
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    register_nav_menu('header_menu', __('Header Menu'));
    register_nav_menu('extra_links', __('Extra Links Menu'));
    register_nav_menu('contacts', __('Contact List Menu'));
}   