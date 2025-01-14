<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $event
 * @property string $eventRowIdOrRef
 * @property string $eventDesc
 * @property string $eventTable
 * @property int    $eventTime
 */
class ModularEventlog extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'modular_eventlog';

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
        'event', 'eventRowIdOrRef', 'eventDesc', 'eventTable', 'staffInCharge', 'eventTime'
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
        'event' => 'string', 'eventRowIdOrRef' => 'string', 'eventDesc' => 'string', 'eventTable' => 'string', 'eventTime' => 'timestamp'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'eventTime'
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
