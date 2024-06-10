<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string   $name
 * @property string   $email
 * @property DateTime $created_on
 * @property DateTime $last_login
 * @property int      $last_edited
 * @property boolean  $isActive
 */
class ModularAdmin extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'modular_admin';

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
        'name', 'email', 'password', 'role', 'created_on', 'last_login', 'last_edited', 'isActive'
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
        'name' => 'string', 'email' => 'string', 'created_on' => 'datetime', 'last_login' => 'datetime', 'last_edited' => 'timestamp', 'isActive' => 'boolean'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_on', 'last_login', 'last_edited'
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
