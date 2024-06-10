<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string  $barcode
 * @property string  $description
 * @property string  $projectName
 * @property int     $packingOn
 * @property boolean $isActive
 */
class ModularPackings extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'modular_packings';

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
        'barcode', 'description', 'packingOn', 'projectName', 'isActive'
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
        'barcode' => 'string', 'description' => 'string', 'packingOn' => 'timestamp', 'projectName' => 'string', 'isActive' => 'boolean'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'packingOn'
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
