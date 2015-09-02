<?php
if (!defined('ABSPATH')) {
    exit;
}

if (!class_exists('WBC_Frontend_Scripts')) {
    class WBC_Frontend_Scripts
    {
        /**
         * Contains an array of script handles registered by WC
         * @var array
         */
        private static $scripts = array();

        /**
         * Contains an array of script handles localized by WC
         * @var array
         */
        private static $wp_localize_scripts = array();


        public static function init() {
            add_action('wp_enqueue_scripts', __CLASS__, 'load_scripts');
        }

        /**
         * Register a script for use.
         *
         * @uses   wp_register_script()
         * @access private
         * @param  string   $handle    [description]
         * @param  string   $path      [description]
         * @param  string[] $deps      [description]
         * @param  string   $version   [description]
         * @param  boolean  $in_footer [description]
         */
        private static function register_script( $handle, $path, $deps = array( 'jquery' ), $version = WC_VERSION, $in_footer = true ) {
            self::$scripts[] = $handle;
            wp_register_script( $handle, $path, $deps, $version, $in_footer );
        }


        /**
         * Register and enqueue a script for use.
         *
         * @uses   wp_enqueue_script()
         * @access private
         * @param  string   $handle    [description]
         * @param  string   $path      [description]
         * @param  string[] $deps      [description]
         * @param  string   $version   [description]
         * @param  boolean  $in_footer [description]
         */
        private static function enqueue_script( $handle, $path = '', $deps = array( 'jquery' ), $version = WC_VERSION, $in_footer = true ) {
            if ( ! in_array( $handle, self::$scripts ) && $path ) {
                self::register_script( $handle, $path, $deps, $version, $in_footer );
            }
            wp_enqueue_script( $handle );
        }



        /**
         * Load all scripts
         */
        public static function load_scripts() {
            //self::register_script( 'chosen', $assets_path . 'js/chosen/chosen.jquery' . $suffix . '.js', array( 'jquery' ), '1.0.0' );
        }
    }
}


