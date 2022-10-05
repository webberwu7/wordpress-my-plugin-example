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

    public function getOptions(): array
    {
        $response = [];
        foreach ($this->optionNames as $optionName) {
            $response[$optionName] = $this->get($optionName);
        }

        return $response;
    }

    public function setOptions($options): bool|array
    {
        foreach ($options as $key => $value) {
            $this->set($key, $value);
        }

        return $this->getOptions();
    }

    public function get($optionName): false|string
    {
        if (in_array($optionName, $this->optionNames)) {
            return get_option($optionName);
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

    // public function is_const_defined($optionName): false|string
    // {
    //     $return = false;
    //     switch ($optionName) {
    //         case 'token':
    //             $return = defined('MY_PLUGIN_TOKEN') && MY_PLUGIN_TOKEN;
    //             break;
    //         case 'project':
    //             $return = defined('MY_PLUGIN_PROJECT') && MY_PLUGIN_PROJECT;
    //             break;
    //     }

    //     return $return;
    // }
}
