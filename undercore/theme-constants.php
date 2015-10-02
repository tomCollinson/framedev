<?php
/**
 *	THEME CONSTANTS
 *	Setting some constants based on the environment to be
 *  used throughout the framework and theme
 *
 */

/**
 * SERVER ROOT PATH
 *
 */

define('ROOT_PATH', get_template_directory() . '/');

define( 'ROOT_URL', get_template_directory_uri() . '/');



/**
 * THEME NAME
 * Store the name of the theme in use for display on the front end / admin area
 */

define( 'THEMENAME', $base_data['Title'] );


// DEFINE ON THE UNDERCORE_FW OBJECT

if ( ! defined('UNDERCORE_FW'))
{
	define('UNDERCORE_FW', ROOT_PATH . 'undercore/' );

	define('UNDERCORE_PHP', ROOT_FW . 'php/' );

	define('UNDERCORE_JS', ROOT_FW . 'js/' );

	define('UNDERCORE_CSS', ROOT_FW . 'css/' );

	// Path to theme options folder
	define( 'UNDERCORE_OPTIONS', ROOT_PATH . 'includes/theme_options' );




	define( 'UNDERCORE_FW_URL', ROOT_URL . 'undercore/' );

	define( 'UNDERCORE_IMG_URL', UNDERCORE_FW_URL . 'images/' );

	define( 'UNDERCORE_PHP_URL', UNDERCORE_FW_URL . 'php/' );

	define( 'UNDERCORE_JS_URL', UNDERCORE_FW_URL . 'js/' );

	define( 'UNDERCORE_CSS_URL', UNDERCORE_FW_URL . 'css/' );

	define( 'UNDERCORE_OPTIONS_URL', ROOT_URL . 'includes/theme_options' );
}

 ?>