<?php namespace Acme\Crm\Models;

use Model;

/**
 * Note Model
 */
class Note extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'acme_crm_notes';

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
    public $belongsTo = [
        'Opportunity' => ['Acme\Crm\Models\Opportunity'],
        'owner' => ['Acme\Crm\Models\User']
    ];
    /*
    protected $fillable = [];
    public $hasOne = [];
    public $hasMany = [];
    
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
    */
}