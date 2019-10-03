<?php
/*
 * Plugin Name: CRUD
 * Plugin URI: http://github.com/amaismkt/plugin
 * Description: protótipo de crud
 * Version: 1.0.0
 * Author: A Mais
 * Author URI: http://amaismkt.com.br
 * License: GPLv2
 * * */

add_action( 'admin_menu', 'my_admin_menu' );

function my_admin_menu() 
{
	add_menu_page( 'CRUD', 'CRUD', 'manage_options', 'crud/cadastrar.php', 'cadastrar', 'dashicons-admin-users', 6  );
}

function cadastrar()
{
    require 'views/index.php';
}

add_action('wp_enqueue_scripts', 'brickbones_enqueue_styles');

function includeJS()
{
    wp_enqueue_scripts('main-script', get_stylesheet_directory_uri() . '/public/assets/js/index.js', array('jquery'), '1.12.4', false);
}