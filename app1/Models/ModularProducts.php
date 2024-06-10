<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string  $barcode
 * @property string  $projectName
 * @property string  $cabinetName
 * @property string  $partName
 * @property string  $file_1
 * @property string  $file_2
 * @property string  $material
 * @property string  $edge_1
 * @property string  $edge_2
 * @property string  $edge_3
 * @property string  $edge_4
 * @property string  $xfield_1
 * @property string  $xfield_2
 * @property string  $xfield_3
 * @property string  $xfield_4
 * @property string  $xfield_5
 * @property string  $xfield_6
 * @property string  $xfield_7
 * @property string  $xfield_8
 * @property string  $xfield_9
 * @property string  $xfield_10
 * @property boolean $isPartRotation
 * @property int     $opquantity
 * @property int     $quantity
 * @property int     $thickness
 * @property int     $createdOn
 */
class ModularProducts extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'modular_products';

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
        'barcode', 'projectName', 'cabinetName', 'partName', 'file_1', 'file_2', 'length', 'width', 'isPartRotation', 'opquantity', 'quantity', 'material', 'thickness', 'edge_1', 'edge_2', 'edge_3', 'edge_4', 'xfield_1', 'xfield_2', 'xfield_3', 'xfield_4', 'xfield_5', 'xfield_6', 'xfield_7', 'xfield_8', 'xfield_9', 'xfield_10', 'createdOn'
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
        'barcode' => 'string', 'projectName' => 'string', 'cabinetName' => 'string', 'partName' => 'string', 'file_1' => 'string', 'file_2' => 'string', 'isPartRotation' => 'boolean', 'opquantity' => 'int', 'quantity' => 'int', 'material' => 'string', 'thickness' => 'int', 'edge_1' => 'string', 'edge_2' => 'string', 'edge_3' => 'string', 'edge_4' => 'string', 'xfield_1' => 'string', 'xfield_2' => 'string', 'xfield_3' => 'string', 'xfield_4' => 'string', 'xfield_5' => 'string', 'xfield_6' => 'string', 'xfield_7' => 'string', 'xfield_8' => 'string', 'xfield_9' => 'string', 'xfield_10' => 'string', 'createdOn' => 'timestamp'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'createdOn'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = false;

    // Scopes...

    // Functions ...

    // Relations ...
}
