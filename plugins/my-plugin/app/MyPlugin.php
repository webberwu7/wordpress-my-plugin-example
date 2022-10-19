<?php

namespace MyPlugin;

use MyPlugin\Controllers\AdminPageController;
use MyPlugin\Controllers\API\HealthCheckController;
use MyPlugin\Controllers\API\WpOptionController;
use MyPlugin\Controllers\SettingController;

class MyPlugin
{
    protected $adminPageController;
    protected $settingController;
    protected $wpOptionController;

    // api controller
    protected $healthCheckController;

    public function __construct()
    {
        // page controller
        $this->adminPageController = new AdminPageController();

        // setting controller
        $this->settingController = new SettingController();
        
        // api controller
        $this->wpOptionController = new WpOptionController();
        $this->healthCheckController = new HealthCheckController();
    }

    public function plugin_init()
    {
    }
}
