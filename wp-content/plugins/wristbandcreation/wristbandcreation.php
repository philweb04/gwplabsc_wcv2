<?php
/**
 * Plugin Name: WristbandCreation
 * Plugin URI: http://wristbandcreation.com
 * Description: Extend installed wordpress plugins, themes, widgets functionality and custom functionality
 * Author: Wristbandcreation
 * Author URI: http://wristbandcreation.com
 * Version: 1.0
 *
 * Text Domain: wristbandcreation
 */

if (!defined('ABSPATH')) {
	exit;// Exit if access directly
}

if (! class_exists('WristbandCreation')) {
	class WristbandCreation {
		/**
		 * @var String
		 */
		public $version = '1.0';


		// Class initializations
		public function __construct() {
			$this->define_constants();
			$this->includes();

		}

		/**
		 * Define WBC Constant
		 */
		public function define_constants() {
			// Define constant variable
			$this->define('WBC_PLUGIN_DIR', __dir__);
			$this->define('WBC_PLUGIN_URL', untrailingslashit(plugin_dir_url(__FILE__)));
			// Plugin text domain
			$this->define('WBC_TEXT_DOMAIN', 'wristbandcreation');
			// Assets url
			$this->define('WBC_ASSETS_URL', WBC_PLUGIN_URL .'/assets');
			// includes dir
			$this->define('WBC_INCLUDES_DIR', WBC_PLUGIN_DIR . '/includes');

			$this->define('WBC_VERSION', $this->version);
		}

		/**
		 * Defined constant if not exists
		 *
		 * @param STRING $name - constant variable name
		 * @param STRING $val - constant variable value
		 * @return none
		 */
		public function define($name, $val) {
			if (!defined($name)) {
				define($name, $val);
			}
		}

		/**
		 * Include required core files used in admin and on the frontend.
		 */
		public function includes() {
			//include_once ('includes/class-wbc-autoloader.php');
			include_once ('includes/wbc-core-functions.php');

			if ($this->is_request('admin')) {
				include_once ('includes/admin/class-wbc-admin.php');
			}
		}


		/**
		 * What type of request is this?
		 * string $type ajax, frontend or admin
		 * @return bool
		 */
		private function is_request( $type ) {
			switch ( $type ) {
				case 'admin' :
					return is_admin();
				case 'ajax' :
					return defined( 'DOING_AJAX' );
				case 'cron' :
					return defined( 'DOING_CRON' );
				case 'frontend' :
					return ( ! is_admin() || defined( 'DOING_AJAX' ) ) && ! defined( 'DOING_CRON' );
			}
		}



		/**
		 * Include required files on the frontend
		 */
		public function frontend_includes() {

		}

	}

}

// Call Wristbandcreation
function wbc() {
	return new Wristbandcreation();
}

$GLOBALS['wristbandcreation'] = wbc();


