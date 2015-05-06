<?php namespace Mhaynes\ScenarioBuilder\Models;

use Model;

/**
 * scenario Model
 */
class Scenario extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'mhaynes_scenariobuilder_scenarios';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}