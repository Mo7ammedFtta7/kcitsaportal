<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class requests
 * @package App\Models
 * @version October 12, 2018, 6:03 pm UTC
 *
 * @property \App\Models\User user
 * @property \App\Models\Job job
 * @property \App\Models\Vehicle vehicle
 * @property \App\Models\Status status
 * @property \Illuminate\Database\Eloquent\Collection vehicleCoverage
 * @property \Illuminate\Database\Eloquent\Collection vehicles
 * @property integer user
 * @property integer job
 * @property integer vehicle
 * @property date start_date
 * @property date end_date
 * @property integer status
 */
class requests extends Model
{
    use SoftDeletes;

    public $table = 'myjobs';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user',
        'job',
        'vehicle',
        'start_date',
        'end_date',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user' => 'integer',
        'job' => 'integer',
        'vehicle' => 'integer',
        'start_date' => 'date',
        'end_date' => 'date',
        'status' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function job()
    {
        return $this->belongsTo(\App\Models\Job::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function vehicle()
    {
        return $this->belongsTo(\App\Models\Vehicle::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function status()
    {
        return $this->belongsTo(\App\Models\Status::class);
    }
}
