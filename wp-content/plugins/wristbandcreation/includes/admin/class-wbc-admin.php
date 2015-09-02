<?php

if (!defined('ABSPATH')) {
    exit;
}

if (!class_exists('WBC_Admin')) {
    class WBC_Admin
    {
        public function __construct() {
            add_action('init', array($this, 'includes'));
        }

        public function includes() {
            include_once('wbc-admin-functions.php');
            include_once('class-wbc-admin-assets.php');
            include_once('pricing-chart/class-wbc-pricing-chart.php');
        }

    }
}


return new WBC_Admin();