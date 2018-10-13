<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class statuses
 * @package App\Models
 * @version October 13, 2018, 12:55 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Myjob
 * @property \Illuminate\Database\Eloquent\Collection vehicleCoverage
 * @property \Illuminate\Database\Eloquent\Collection Vehicle
 * @property string name
 */
class statuses extends Model
{
    use SoftDeletes;

    public $table = 'statuses';
    
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
    public function myjobs()
    {
        return $this->hasMany(\App\Models\Myjob::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function vehicles()
    {
        return $this->hasMany(\App\Models\Vehicle::class);
    }
    public function jobs()
    {
        return $this->hasMany(\App\Models\jobs::class,'id','status');
    }
}
