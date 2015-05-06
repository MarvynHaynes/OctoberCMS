<?php namespace Acme\Crm;

use Backend;
use System\Classes\PluginBase;

/**
 * crm Plugin Information File
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
            'name'        => 'CRM',
            'description' => 'Customer Relationship Managmenet',
            'author'      => 'Acme',
            'icon'        => 'icon-leaf'
        ];
    }
/* Rerefernces The Controller. Allows somewhere to go when you 
go to the backend */

    public function registerNavigation()
    {
        return [
            'crm' => [
                'label'              => 'CRM',
                'url'                => Backend::url('acme/crm/opportunities'),
                'icon'               => 'icon-trophy',
                'permissions'        => ['crm.*'],
                'order'              => 100,
                ]
            ];
    }

}
