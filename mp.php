<?php
/*
Plugin Name: Название плагина
Plugin URI: http://страница_с_описанием_плагина_и_его_обновлений
Description: Краткое описание плагина.
Version: Номер версии плагина, например: 1.0
Author: Имя автора плагина
Author URI: http://страница_автора_плагина
*/



add_action('wp_enqueue_scripts', 'cp_enqueue_magnificpopup');
function cp_enqueue_magnificpopup() {
    wp_register_style('magnific_popup_style', plugin_dir_url( __FILE__ ).'/magnific-popup/magnific-popup.css');
    wp_enqueue_style('magnific_popup_style');
 
    wp_register_script('magnific_popup_script', plugin_dir_url( __FILE__ ).'/magnific-popup/jquery.magnific-popup.min.js', array('jquery'));
    wp_enqueue_script('magnific_popup_script');

    wp_register_script('magnific_init_script', plugin_dir_url( __FILE__ ).'/jquery.magnific-popup-init.js', array('jquery'), '1', true);
    wp_enqueue_script('magnific_init_script');
}