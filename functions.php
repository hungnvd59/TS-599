<?php


//khai bao constant
define("THEME_URL",get_stylesheet_directory());
define("CORE",THEME_URL."/core");

// embed file init
require_once(CORE."/init.php ");

if(!function_exists("TS-599")){
   function TS599() {
   }
   add_action('init', 'TS-599');
}

function add_css()
{
   wp_register_style('styles', get_template_directory_uri() . '/assets/css/style.css', array(),'1','all');
   wp_enqueue_style( 'styles');
}
add_action('wp_enqueue_scripts', 'add_css');

function add_scripts() {
   wp_register_script('js_script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'),'1.1', true);
   wp_enqueue_script('js_script');
   
} 
add_action( 'js_script', 'add_scripts', 999 ); 

add_theme_support('menus');