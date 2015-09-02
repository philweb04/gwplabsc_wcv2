<?php
if (!defined('ABSPATH')) {
    exit;
}

if (!class_exists('WBC_Autoloader')) {
    class WBC_Autoloader
    {
        public function __construct()
        {
            if (function_exists("__autoload")) {
                spl_autoload_register("__autoload");
            }

            spl_autoload_register(array($this, 'autoload'));
        }


        public function autoload($class)
        {
            //$class = $class;
        }

    }
}
new WBC_Autoloader();