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
class Bulkjobpost extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'jobs_post_new';

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
       'job_post_id','job_tittle', 'Job_description', 'company_name', 'company_location', 'job_location', 'job_category', 'experience', 'status', 'phone', 'email', 'salary', 'websites', 'Key_responsibilities', 'industry', 'Skill_experience', 'skills_needed', 'urgent_need', 'deadline_date', 'position_available', 'Job_type', 'job_sector', 'gender', 'qualification', 'country', 'complete_address', 'created_at'
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
