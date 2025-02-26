<?php 

function project_final_ice_cream_files(){
    wp_enqueue_style('project_bakery_main_files', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'project_final_ice_cream_files');
add_theme_support('post-thumbnails');

function enqueue_font_awesome() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_font_awesome');

?>