<?php

namespace MyPlugin\Controllers;

use MyPlugin\Models\WpOption;

class SettingController
{
    public $wpOption;

    public function __construct()
    {
        $this->wpOption = new WpOption();
    }
}
