<?php

namespace MyPlugin;

use MyPlugin\Controllers\AdminPageController;
use MyPlugin\Controllers\SettingController;

class MyPlugin
{
    protected $adminPageController;

    public function __construct()
    {
        $this->adminPageController = new AdminPageController();
        $this->settingController = new SettingController();
    }

    public function plugin_init()
    {
    }
}
