<?php

function michiRamen_assets(){
    wp_enqueue_style('michiRamentheme', get_template_directory_uri() .'/css/main.css', microtime());
    wp_enqueue_script('my_script', get_template_directory_uri() . '/js/menuTabs.js', array(), microtime(), true);
    wp_enqueue_script('my_script2', get_template_directory_uri() . '/js/toggleMenu.js', array(), microtime(), true);
    wp_enqueue_style('fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');
}

add_action('wp_enqueue_scripts','michiRamen_assets');