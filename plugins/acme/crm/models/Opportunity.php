<?php namespace Acme\Crm\Models;

use Model;

/**
 * Opportunity Model
 */
class Opportunity extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'acme_crm_opportunities';

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
    
    public $hasMany = [
            'notes' => ['Acme\Crm\Models\Note'],
            ];

    public $belongsTo = [ 
            'status' => ['Acme\Crm\Models\Status']
            ];

    public $belongsToMany = [
            'contacts' => [
                    'Acme\Crm\Models\Contact',
                    'table' => 'acme_crm_opportunities_contacts'
                    ],
            'offerings' => [
                    'Acme\Crm\Models\Offering',
                    'table' => 'acme_crm_opportunities_offerings'
            ],
        ];
    
    /*
    public $hasOne = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
    */

}