<?php
function add_css()
{
   wp_register_style('first', get_template_directory_uri() . '/assets/css/style.css', false,'1.1','all');
   wp_enqueue_style( 'first');
}
add_action('wp_enqueue_scripts', 'add_css');

function add_scripts() {
   wp_register_script('js_script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'),'1.1', true);
   wp_enqueue_script('js_script');
   
} 
add_action( 'js_script', 'add_scripts', 999 ); 

add_theme_support('menus');