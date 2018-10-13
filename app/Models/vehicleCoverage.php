<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class vehicleCoverage
 * @package App\Models
 * @version October 8, 2018, 9:55 pm UTC
 *
 * @property \App\Models\Coverage coverage
 * @property \App\Models\VehicleType vehicleType
 * @property \Illuminate\Database\Eloquent\Collection vehicles
 * @property integer type
 * @property integer coverage
 */
class vehicleCoverage extends Model
{
    use SoftDeletes;

    public $table = 'vehicle_coverage';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'type',
        'coverage'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type' => 'integer',
        'coverage' => 'integer'
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
    public function coverages()
    {
        return $this->belongsTo(\App\Models\coverages::class,'coverage','id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function types()
    {
        return $this->belongsTo(\App\Models\vehicleType::class,'type','id');
    }
}
