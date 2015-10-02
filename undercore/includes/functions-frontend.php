<?php
/*
	ADD PACKAGE DETAILS

	This file holds functions that get settings to be displayed on the front end
*/


/**
 * ANALYTICS TRACKING CODE
 * Get the input, check the type and build the correct response.
 **/

add_action('init', 'undercore_get_analytics_code');

function undercore_get_analytics_code() {
	global $undercore_config;
     $undercore_config['analytics_code'] = get_option('undercore_analytics_code');
    if (empty($undercore_config['analytics_code'])) return;
    /** Now check the value. We may have been passed any of the following:
     *  UA-ID Only - Build async code and put in the header
     *  Full Legacy Code - put in the footer
     *  Async Code - put in the header
     *
     **/

    // Check if we only have the UA ID and build code if so
    if(strpos($undercore_config['analytics_code'],'UA-') === 0) {
    	$undercore_config['analytics_code'] = "
    	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', '".$undercore_config['analytics_code']."', 'auto');
		ga('send', 'pageview');
		</script>";
    }

    // If we've just built the new code or the async code was provided, put it in the header
    // otherwise put it in the footer
    if(strpos($undercore_config['analytics_code'],'i,s,o,g,r,a,m') !== false)
	{
		add_action('wp_head', 'undercore_echo_tracking_code', 100000);
	}
	else
	{
		add_action('wp_footer', 'undercore_echo_tracking_code', 100000);
	}

}

// Outputs the result of undercore_get_analytics_code()
function undercore_echo_tracking_code() {
	global $undercore_config;
	if (!empty($undercore_config['analytics_code'])) {
		echo $undercore_config['analytics_code'];
	}
}



/********************************************/


function undercore_get_site_logo() {
	global $undercore_config;
	$undercore_config['site_logo'] = get_option('undercore_site_logo');

	if ($undercore_config['site_logo'] !== ''){
		return $undercore_config['site_logo'];
	} else {
		return "haha"; // RETURN THEME LOGO, USE GLOBAL VARS FOR PATHS AS YOU SHOULD BE EVERYWHERE BUT AREN'T YET
	}
	
}

/**
 * FAVICON
 * If a favicon has been provided by the user, build the HTML and make it available
 */
function undercore_get_favicon() {
	$iconUrl = get_option('undercore_favicon');
	$iconOutput = "";

	if ($iconUrl !== '') {

		$iconType = "image/x-icon";

		if ( strpos($iconUrl, '.gif') ) {
			$iconType = "image/gif";
		} 
		else if ( strpos($iconUrl, '.png') ) {
			$iconType = "image/png";
		}

		$iconOutput = '<link rel="icon" href="' . $iconUrl .'" type="'.$iconType.'">';


		return $iconOutput;
	}
}

function undercore_get_footer_col_count() {
	return undercore_get_footer_columns(5);
}


function undercore_get_footer_widths_preserved() {
	return get_option('undercore_footer_column_widths_preserved');
}

function undercore_get_copyright_notice() {
	$copyright = get_option('undercore_copyright_notice');

	if (!$copyright) {
		$copyright = 'BACKUP COPYRIGHT NOTIFICATION, ISNT IT?';
	}

	return $copyright;
}

?>