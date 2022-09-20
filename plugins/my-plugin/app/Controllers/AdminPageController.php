<?php

namespace MyPlugin\Controllers;

class AdminPageController
{
    public function __construct()
    {
        add_action('admin_menu', function () {
            // 建立主選單
            add_menu_page(
                '我的插件',
                '我的插件',
                'manage_options',
                'my-plugin-options',
                function () {
                    $myPluginPagePath = MY_PLUGIN_ABS_PLUGIN_PATH . "public/admin/my-plugin-admin-page.php";
                    load_template($myPluginPagePath);
                },
                'dashicons-email-alt',
                99
            );
        });
    }
}
