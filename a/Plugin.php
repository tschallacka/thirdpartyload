<?php namespace ThirdPartyLoad\A;

use Backend;
use System\Classes\PluginBase;

/**
 * A Plugin Information File
 */
class Plugin extends PluginBase
{
    public $require = [
        'ThirdPartyLoad.B',
    ];
    
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'A',
            'description' => 'No description provided yet...',
            'author'      => 'ThirdPartyLoad',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'ThirdPartyLoad\A\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'thirdpartyload.a.some_permission' => [
                'tab' => 'A',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'a' => [
                'label'       => 'A',
                'url'         => Backend::url('thirdpartyload/a/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['thirdpartyload.a.*'],
                'order'       => 500,
            ],
        ];
    }
}
