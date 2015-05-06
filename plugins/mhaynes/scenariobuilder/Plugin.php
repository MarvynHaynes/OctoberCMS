<?php namespace Mhaynes\ScenarioBuilder;
use Backend;
use System\Classes\PluginBase;

/**
 * scenarioBuilder Plugin Information File
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
            'name'        => 'Scenario Builder',
            'description' => 'A test scenario builder for the travel wizard',
            'author'      => 'Mhaynes',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerNavigation()
    {
        return [
        'scenarioBuilder' => [
                'label'           => 'Scenario Builder',
                'url'             => Backend::url('mhaynes/scenariobuilder/scenarios'),
                'icon'            => 'icon-briefcase',
                'permissions'     => ['scenarioBuilder.*'],
                'order'           => 100,
            ]
        ];

    }

}
