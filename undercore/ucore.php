<?php

/**
 * UNDERCORE FRAMEWORK
 * 
 * A theme framework that acts as a core over which various themes can be applied
 *
 **/


define( 'UCORE_FRAMEWORK_VERSION', "1.0");

/**
 * Pre framework initialisation requirements executed here
 * @todo Create method to run here. Likely checking for plugins or other methods to call
 */
//do_action( 'ucore_pre_init' );


/**
 * CONFIG PRESETS
 * Define some constants for file locations, used throughout the framework
 * i.e. base URL, theme Stylesheet, theme name etc.
 */
require ( 'theme-constants.php');


/**
 * Load Core SuperClass
 * Primary class of the framework
 */
require('class-core.php');


/**
 * Backend Functions
 * Functions used by the backend, mainly with theme options
 */
require('functions-backend.php');


/***
	POSSIBLE - LOAD OPTIONS ARRAY WITH MANUALLY PASSED FUNCTIONS
**/


/**
 * Initialise the super class 'core'
 *
 */

$ucore = new ucore_coreclass($base_data);

?>

