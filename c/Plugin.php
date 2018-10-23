<?php namespace ThirdPartyLoad\C;

use Backend;
use System\Classes\PluginBase;

/**
 * C Plugin Information File
 */
class Plugin extends PluginBase
{
    
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'C',
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
            'ThirdPartyLoad\C\Components\MyComponent' => 'myComponent',
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
            'thirdpartyload.c.some_permission' => [
                'tab' => 'C',
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
            'c' => [
                'label'       => 'C',
                'url'         => Backend::url('thirdpartyload/c/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['thirdpartyload.c.*'],
                'order'       => 500,
            ],
        ];
    }
}
