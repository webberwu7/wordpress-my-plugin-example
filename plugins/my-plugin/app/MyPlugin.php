<?php

namespace MyPlugin;

use MyPlugin\Controllers\AdminPageController;
use MyPlugin\Controllers\API\WpOptionController;
use MyPlugin\Controllers\SettingController;

class MyPlugin
{
    protected $adminPageController;
    protected $settingController;
    protected $wpOptionController;

    public function __construct()
    {
        $this->adminPageController = new AdminPageController();
        $this->settingController = new SettingController();
        $this->wpOptionController = new WpOptionController();
    }

    public function plugin_init()
    {
    }
}
