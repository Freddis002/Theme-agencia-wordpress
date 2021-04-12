<?php 
defined('ABSPATH') or die('');

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('html5');
    add_theme_support('post-thumbnails');


});

/* Permet de filter les types qui sont affichés svg etc - Cela ne fonctionne pas pourquoi ? il faut mettre dans le logo svg une ligne de code '<?xml version="1.0" encoding="utf-8" ?> */

add_filter('upload_mimes', function ($mimes) {
    $mimes['svg'] = 'image/svg+xml' ;
    return $mimes;

});

?>