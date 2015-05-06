<?php namespace Mhaynes\ScenarioBuilder\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use League\Csv\Writer;
use SplTempFileObject;
/**
 * Scenarios Back-end Controller
 */
class Scenarios extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Mhaynes.ScenarioBuilder', 'scenariobuilder', 'scenarios');
    }

    /** Custom function to export to JSON.  Called by appending '/exportJSON' to URL **/

    public function exportJSON()
    {
        return $this->listExportJSON();
    }

    public function listExportJSON($options = [], $definition = null)
    {
        /*
         * Locate widget
         */
        if (!count($this->listWidgets)) {
            $this->makeLists();
        }
        if (!$definition || !isset($this->listDefinitions[$definition])) {
            $definition = $this->primaryDefinition;
        }
        $widget = $this->listWidgets[$definition];
        /*
         * Parse options
         */
        $defaultOptions = [
            'filename' => 'exportJson.json'
        ];
        $options = array_merge($defaultOptions, $options);
        extract($options);
        /*
         * Prepare CSV
         */
        $csv = Writer::createFromFileObject(new SplTempFileObject);
        /*
         * Add headers
         */
        $headers = [];
        $columns = $widget->getVisibleColumns();
        foreach ($columns as $column) {
            $headers[] = Lang::get($column->label);
        }
        $csv->insertOne($headers);
        /*
         * Add records
         */
        $model = $widget->prepareModel();
        $results = $model->get();
        foreach ($results as $result) {
            $record = [];
            foreach ($columns as $column) {
                $record[] = $widget->getColumnValue($result, $column);
            }
            $csv->insertOne($record);
        }
        /*
         * Output
         */
        $csv->output($filename);
        exit;
    }
}