<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string   $name
 * @property string   $compname
 * @property string   $address
 * @property string   $area
 * @property string   $city
 * @property string   $state
 * @property string   $pin
 * @property string   $website
 * @property string   $email
 * @property string   $contact
 * @property string   $status
 * @property string   $dbstatus
 * @property DateTime $created_on
 * @property boolean  $isActive
 */
class ModularCompany extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'modular_company';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'compname', 'address', 'area', 'city', 'state', 'pin', 'website', 'email', 'contact', 'status', 'dbstatus', 'created_on', 'isActive'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string', 'compname' => 'string', 'address' => 'string', 'area' => 'string', 'city' => 'string', 'state' => 'string', 'pin' => 'string', 'website' => 'string', 'email' => 'string', 'contact' => 'string', 'status' => 'string', 'dbstatus' => 'string', 'created_on' => 'datetime', 'isActive' => 'boolean'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_on'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = true;

    // Scopes...

    // Functions ...

    // Relations ...
}
