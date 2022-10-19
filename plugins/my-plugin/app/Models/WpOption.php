<?php

namespace MyPlugin\Models;

class WpOption
{
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
}
