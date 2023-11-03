<?php

// Setup
/*
 * Creamos las variables Globales y constantes de nuestro theme
 */

	define('MC_THEME_DIR', get_template_directory()); //Representa la direccion del tema de los archivos
	define('MC_THEME_URI', get_stylesheet_directory_uri()); //Representa la direccion del URL de los archivos


// Includes
/*
 * Incluimos los archivos de PHP que son parte del theme pero que no son reconocidos por Wordpress
 */

	include(MC_THEME_DIR . '/includes/admin/mc-enqueue.php');

// Hooks
/*
 * Se hace el llamado a las funciones adicionales del theme para su correcto funcionamiento enganchandolas en el hooks apropiado
 */

// Hook para incorporar los archivos CSS y JS que ya venian con el tema que descargamos para usar (se puediera poner aqui pero tendriamos muchas funciones en la misma pagina).
add_action('wp_enqueue_scripts','mc_enqueue_cb');