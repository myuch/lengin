<?php

add_action('after_setup_theme', 'theme_register_nav_menu');

/* ================== Menu =================== */
function theme_register_nav_menu(){
    register_nav_menus(array(
        'header-menu' => esc_html__('header-menu', 'Header Menu'),
    ));
}