<?php

if (!defined('ABSPATH')) {
    exit;
}

if (!class_exists('WBC_Pricing_Chart')) {
    class WBC_Pricing_Chart
    {
        public function __construct() {
            add_action( 'woocommerce_product_after_variable_attributes', array($this, 'variable_fields'), 10, 3 );
        }

        public function variable_fields() {
            include_once (WBC_INCLUDES_DIR . '/admin/views/html-admin-pricing-chart.php');
        }

    }
}

return new WBC_Pricing_Chart();