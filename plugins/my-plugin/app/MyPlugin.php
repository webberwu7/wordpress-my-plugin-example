<?php

namespace MyPlugin;

use MyPlugin\Controllers\AdminPageController;

class MyPlugin
{
    protected $adminPageController;

    public function __construct()
    {
        $this->adminPageController = new AdminPageController();
    }

    public function plugin_init()
    {
    }
}
