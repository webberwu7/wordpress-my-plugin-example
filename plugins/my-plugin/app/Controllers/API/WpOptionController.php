<?php

namespace MyPlugin\Controllers\API;

use MyPlugin\Models\WpOption;
use WP_REST_Request;

class WpOptionController
{
    protected $wpOption;

    public function __construct()
    {
        $this->wpOption = new WpOption();

        $this->registerApiRoutes();
    }

    public function registerApiRoutes()
    {
        add_action('rest_api_init', function () {
            register_rest_route('my-plugin/v1/api/backstage', '/setting/options', [
                'methods' => 'GET',
                'callback' => [$this, 'getOptions'],
            ]);
            register_rest_route('my-plugin/v1/api/backstage', '/setting/options', [
                'methods' => 'POST',
                'callback' => [$this, 'updateOptions'],
                'args' => [
                    'token' => [
                        'required' => false
                    ],
                    'project' => [
                        'required' => false
                    ],
                ]
            ]);
        });
    }

    public function getOptions(WP_REST_Request $request)
    {
        $options = $this->wpOption->getOptions();

        return $options;
    }

    public function updateOptions(WP_REST_Request $request)
    {
        // get input params
        $data = $request->get_params();

        // update data
        $options = $this->wpOption->setOptions($data);

        return $options;
    }
}
