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

		var $fe_options;

		public function undercore_super () {

			if(is_admin()){
				$this->_merge_options();
			}
			else {
				// Build an array of option names/ids and values for the front end
				$this->frontend_options();
			}
		}

		/**
		 * Get the option configuration file and then query the database for the matching values
		 * Make the resuting array available if we're in the admin area
		 */
		protected function _merge_options () {
			require( ROOT_PATH . '/undercore/includes/theme-options/register-theme-options.php' );

			// Now have access to $undercore_options. Let's get the data from the db so we have everything in one array
			// to avoid multiple DB calls. Also gives us more flexibility to extend functionality.
			$this->options = $undercore_options;
			foreach($this->options as &$option) {

				// If a value exists in the db use that, otherwise use the standard value - if not set
				if (trim(get_option($option['id']))) {
					$option['value'] = get_option($option['id']);
				} else {
					$option['value'] = $option['std'];
				}
				
			}
			
		}

		/**
         * Get front end options. Build an array from the theme settings and match it with values stored in the db
         * Return all values even if unset or null as this in itself can be useful.
		 */
		protected function frontend_options(){
			require( ROOT_PATH . '/undercore/includes/theme-options/register-theme-options.php' );

			$temp_options = $undercore_options;

			foreach($temp_options as &$option) {
				$value = get_option($option['id']);
				$this->fe_options[] = array(
					'id' => $option['id'],
					'value' => $value,
					'bodyClass' => $option['bodyClass']
					);
			}

		}
	
	}
}

?>