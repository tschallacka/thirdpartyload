<?php namespace ThirdPartyLoad\B;

use Backend;
use System\Classes\PluginBase;

/**
 * B Plugin Information File
 */
class Plugin extends PluginBase
{
    public $require = [
        'ThirdPartyLoad.C',
    ];
    
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'B',
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
            'ThirdPartyLoad\B\Components\MyComponent' => 'myComponent',
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
            'thirdpartyload.b.some_permission' => [
                'tab' => 'B',
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
            'b' => [
                'label'       => 'B',
                'url'         => Backend::url('thirdpartyload/b/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['thirdpartyload.b.*'],
                'order'       => 500,
            ],
        ];
    }
}
