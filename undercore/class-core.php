<?php

if (!class_exists('undercore_super')) {
	class undercore_super {

		/**
		 * This object holds basic information like theme or plugin name, version, description etc
		 * @var obj
		 */
		var $base_data;
		
		
	
		/**
		 * After calling the constructor this variable holds the framework data stored in the database & config files to render the frontend
		 * @var array
		 */
		var $options;


		public function undercore_super () {

			if(is_admin()){
				$this->_merge_options();
			}
		}

		/**
		 * Get the option configuration file and then query the database for the matching values
		 * Make the resuting array available if we're in the admin area
		 */
		protected function _merge_options () {
			include( ROOT_PATH . '/undercore/includes/theme-options/register-theme-options.php' );

			// Now have access to $undercore_options. Let's get the data from the db so we have everything in one array
			// to avoid multiple DB calls. Also gives us more flexibility to extend functionality.
			$this->options = $undercore_options;
			foreach($this->options as &$option) {
				$option['value'] = get_option($option['id']);
			}

			var_dump(get_option('undercore_options'));
		}
	
        
	}
}

?>