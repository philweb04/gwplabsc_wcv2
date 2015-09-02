<?php

if (!defined('ABSPATH')) {
    exit;
}

if (!class_exists('WBC_Admin_Assets')) {
    class WBC_Admin_Assets
    {
        public function __construct() {
            add_action('admin_enqueue_scripts', array($this, 'load_styles'));
            add_action('admin_enqueue_scripts', array($this, 'load_scripts'));
        }

        public function load_styles() {

            $screen = get_current_screen();

            if (in_array($screen->id, array('product'))) {

                wp_enqueue_style('wristbandcreation_admin_styles-css', WBC_ASSETS_URL . '/css/admin-wristbandcreation.css', array(), WBC_VERSION);
            }
        }


        public function load_scripts() {
            $screen = get_current_screen();

            if (in_array($screen->id, array('product'))) {
                wp_enqueue_script('wristbandcreation_admin_scripts-js', WBC_ASSETS_URL . '/js/admin-wristbandcreation.js', array('jquery'), WBC_VERSION, true);
            }

        }
    }
}


return new WBC_Admin_Assets();
