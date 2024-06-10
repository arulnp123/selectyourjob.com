<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string  $barcode
 * @property string  $customerName
 * @property string  $address
 * @property string  $city
 * @property string  $contactNos
 * @property int     $loadingOn
 * @property boolean $isActive
 */
class ModularLoadings extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'modular_loadings';

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
        'barcode', 'customerName', 'address', 'city', 'contactNos', 'loadingOn', 'isActive'
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
        'barcode' => 'string', 'customerName' => 'string', 'address' => 'string', 'city' => 'string', 'contactNos' => 'string', 'loadingOn' => 'timestamp', 'isActive' => 'boolean'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'loadingOn'
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
