<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class coverages
 * @package App\Models
 * @version October 8, 2018, 10:10 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection VehicleCoverage
 * @property \Illuminate\Database\Eloquent\Collection vehicles
 * @property string name
 */
class coverages extends Model
{
    use SoftDeletes;

    public $table = 'coverage';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function vehicleCoverages()
    {
        return $this->hasMany(\App\Models\VehicleCoverage::class);
    }
}
