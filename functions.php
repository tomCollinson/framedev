<?php
if ( !defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * Functions initalisation
 *
 * Functions for installation & activation
 *
 * @package        FrameDev
 * @license        license.txt
 * @copyright      2015 TeeMoore
 * @since          1.0
 *
 * Please do not edit this file. This file is part of FrameDev and all modifications
 * should be made in a child theme.
 */


/**
 * Include the Framework
 *
 */
require_once( 'undercore/undercore.php' );


$template_directory = get_template_directory();

/*
	Include all required code
*/
require( $template_directory . '/undercore/includes/functions.php' );
require( $template_directory . '/undercore/includes/functions-sidebars.php' );
require( $template_directory . '/undercore/includes/functions-frontend.php' );
require( $template_directory . '/undercore/includes/theme-options/theme-options.php');

?>