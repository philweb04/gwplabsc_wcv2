<?php

if (!defined('ABSPATH')) {
    exit;
}

if (!class_exists('WBC_Pricing_Chart')) {
    class WBC_Pricing_Chart
    {
        public function __construct() {
            //add_action( 'woocommerce_product_after_variable_attributes', array($this, 'variable_fields'), 10, 3 );
            add_action('woocommerce_product_write_panel_tabs', array($this, 'pricing_chart_tab_options_tab'));
            add_action('woocommerce_product_write_panels', array($this, 'pricing_chart_tab_options'));


        }


        public function pricing_chart_tab_options_tab() {
            echo ' <li class="custom_tab"><a href="#pricing_tab_data">'. __('Pricing Chart', WBC_TEXT_DOMAIN) . '</a></li>';
        }

        public function pricing_chart_tab_options() {
            include_once (WBC_INCLUDES_DIR . '/admin/views/html-admin-pricing-chart.php');
        }

    }
}

return new WBC_Pricing_Chart();