<?php namespace Acme\Profile\Models;

use Model;

/**
 * Profile Model
 */
class Profile extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'acme_profile_profiles';

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
        'user' =>['Rainlab\User\Models\User']
    ];
    /**
    * public $hasOne = [];
    * public $hasMany = [];
    * public $belongsTo = [];
    * public $belongsToMany = [];
    * public $morphTo = [];
    * public $morphOne = [];
    * public $morphMany = [];
    * public $attachOne = [];
    * public $attachMany = [];
    */

    public static function getFromUser($user)
    {
        if ($user->profile)
            return $user->profile;

        $profile = new static;
        $profile->user = $user;
        $profile->save();

        $user->profile = $profile;

        return $profile;


    }
}