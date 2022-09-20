<?php

/**
 * my-plugin
 * 
 * Plugin Name: my-plugin
 * Description: 學習開發wordpress插件
 * Version:     0.1
 * Author:      webber.wu
 */

// autoload class object
require __DIR__ . "/autoload.php";

use MyPlugin\MyPlugin;

// define absolute url
defined('MY_PLUGIN_ABS_PLUGIN_URL') || define('MY_PLUGIN_ABS_PLUGIN_URL', plugin_dir_url(__FILE__));
defined('MY_PLUGIN_ABS_PLUGIN_PATH') || define('MY_PLUGIN_ABS_PLUGIN_PATH', plugin_dir_path(__FILE__));

// 讀取這個插件
add_action(
    'plugins_loaded',
    function () {
        $plugin = new MyPlugin();
        $plugin->plugin_init();
        return $plugin;
    }
);
