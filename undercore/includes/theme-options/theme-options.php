<?php
// ADD PACKAGE DETAILS

// ADD THEME SPECIFIC FUNCTIONS

/*
	Register Options page
*/
add_action('admin_menu', 'undercore_create_menu');
function undercore_create_menu() {

	//create new top-level menu
	add_menu_page(__('Theme Settings', 'undercore'), __('Undercore', 'undercore'), 'administrator', 'undercore-theme-settings', 'undercore_settings_page', 'dashicons-megaphone');	
}

/**
* Step 2: Create settings fields.
*/


require( ROOT_PATH . '/undercore/includes/theme-options/register-theme-options.php' );
// Clean this up. The settings array needs to merged with the database records so we're not making separate calls but will work for now
function register_undercoresettings() {

	global $undercore_options;
	register_setting('undercore_theme_options','undercore_options'); //IMPORTANT - ADD A SANITISATION FUNCTION FOR INPUTS AS A THIRD ARGUEMENT

 	//Now register every field in the options file included above. We use the id when we generate the admin pages so they match up
 	foreach($undercore_options as $option) {
 		register_setting( 'undercore_options', $option['id']);
 	}
}

add_action( 'admin_init', 'register_undercoresettings' );


// MOVE ME
// Search for the $slug - does it match what's provided?
// if so check if the $key matches the request. If so, return it
// ie undercore(option('general', 'analytics_code')) should return the right array item
function undercore_option($slug,$key){

	global $undercore_options;

	$result;

	foreach ($undercore_options as $subArray) {
		
		if ($subArray["slug"] === $slug && $subArray["id"] === $key) {
			echo $subArray;
			$result = $subArray;
		}
	}

	return $result;

}

/**
 * ALSO MOVE THIS
 * Get all options for an options setion, i.e. general and return all fields
 * Looking in the global $ucore options array, not making additional calls
 *
 */
function undercore_section_options($slug) {
	global $ucore;

	$results = array();

	foreach($ucore->options as $subArray) {
		if ($subArray["slug"] === $slug) {
			$results[] = $subArray;
		}
	}

	return $results;
}
/**
 * Add options stylesheets and CSS
 */


function admin_register_head() {  
	$url = get_bloginfo('template_directory') . '/undercore/includes/theme-options/';  
	wp_enqueue_style( 'theme-options-style', $url . 'theme-options-style.css');
	wp_enqueue_script('jQuery', $url . 'jquery.js'); // DON'T DO THIS IN PRODUCTION
	wp_enqueue_script('theme-options-colorpicker', $url . 'colorpicker.js');
	wp_enqueue_script('theme-options-script', $url . 'theme-options-script.js');
}
add_action('admin_enqueue_scripts', 'admin_register_head');

if(function_exists( 'wp_enqueue_media' )){
    wp_enqueue_media();
}else{
    wp_enqueue_style('thickbox');
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
}


/** 
* Step 3: Create the markup for the options page
*/
function undercore_settings_page() {
?>
<script>
	<?php undercore_return_color_schemes() ?>
</script>
<div class="undercore-options_wrap">
<div class="undercore-options__header">
	<h2><?php _e('Theme Settings', 'undercore'); ?></h2>
</div>
<?php require( ROOT_PATH . '/undercore/includes/theme-options/theme-options-sidebar.php' );  ?>
<?php require( ROOT_PATH . '/undercore/includes/theme-options/html-helpers.php' );  ?>
<div class="undercore-options__main">
	<form method="post" action="options.php">
		<?php if(isset( $_GET['settings-updated'])) { ?>
        <div class="updated">
            <p><?php _e('Settings updated successfully', 'undercore'); ?></p>
        </div>
        <?php } ?>
		<?php 
			global $undercore_options;
			$undercore_settings = get_option('undercore_options'); 
			settings_fields( 'undercore_options' );
			?>
		<?php 
		require( ROOT_PATH. '/undercore/includes/theme-options/panels/general.php' ); 
		require( ROOT_PATH . '/undercore/includes/theme-options/panels/styles.php' );
		require( ROOT_PATH . '/undercore/includes/theme-options/panels/sidebars.php' );  
	    require( ROOT_PATH . '/undercore/includes/theme-options/panels/header.php' );
	    require( ROOT_PATH . '/undercore/includes/theme-options/panels/social-accounts.php' );
	    require( ROOT_PATH . '/undercore/includes/theme-options/panels/footer.php' );
	    require( ROOT_PATH . '/undercore/includes/theme-options/panels/blog.php' ); ?>
	  <?php submit_button(); ?>
	 </form>
	</div>
</div>
<?php }
?>