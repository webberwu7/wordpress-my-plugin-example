<?php

namespace MyPlugin\Controllers\API;


class HealthCheckController
{
    public function __construct()
    {
        $this->registerApiRoutes();
    }

    public function registerApiRoutes()
    {
        add_action('rest_api_init', function () {
            register_rest_route('my-plugin/v1', 'health-check', [
                'methods' => 'GET',
                'callback' => [$this, 'healthCheck'],
            ]);
        });
    }

    public function healthCheck()
    {
        return "success";
    }
}
