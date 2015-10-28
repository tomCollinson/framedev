<?php
/*
	ADD PACKAGE DETAILS

	This file holds functions that get settings required for the back end. The result may show on the front but
	the functionality is needed for the framework.
*/


add_action('init', 'undercore_get_footer_columns');

function undercore_get_footer_columns($default){
	global $undercore_config;
     $undercore_config['footer-cols'] = get_option('undercore_footer_columns');

     if (!$undercore_config['footer-cols'] && $default) {
     	return $default;
     } else {
     	return $undercore_config['footer-cols'];
     }

}

function undercore_return_color_schemes() {
     // Output the color schemes as a js object on the theme options panel
     global $ucore;
     echo  "var undercore_schemes = " . json_encode($ucore->color_schemes, 128);
   }
?>