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
        $this->adminPageController = new AdminPageController();
        $this->settingController = new SettingController();
        $this->wpOptionController = new WpOptionController();

        // api controller
        $this->healthCheckController = new HealthCheckController();
    }

    public function plugin_init()
    {
    }
}
