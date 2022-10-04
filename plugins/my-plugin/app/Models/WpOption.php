<?php

namespace MyPlugin\Models;

class WpOption
{
    // Wordpress Option Group Name
    public $optionGroup = "my_plugin_options";

    // Options in this group 
    public $optionNames = [
        "token", "project"
    ];

    public function __construct()
    {
        $this->register_options();
    }

    private function register_options()
    {
        foreach ($this->optionNames as $optionName) {
            add_option($optionName);
        }
    }

    public function get($optionName): false|string
    {
        if (in_array($optionName, $this->optionNames)) {
            $option = $this->is_const_defined($optionName);
            if (!$this->is_const_defined($optionName))
                return get_option($optionName);

            return $option;
        }

        return false;
    }

    public function set($optionName, $value): bool
    {
        if (!in_array($optionName, $this->optionNames)) {
            return false;
        }

        return update_option($optionName, $value);
    }

    public function is_const_defined($optionName): false|string
    {
        $return = false;
        switch ($optionName) {
            case 'token':
                $return = defined('MY_PLUGIN_TOKEN') && MY_PLUGIN_TOKEN;
                break;
            case 'project':
                $return = defind('MY_PLUGIN_PROJECT') && MY_PLUGIN_PROJECT;
                break;
        }

        return $return;
    }
}
