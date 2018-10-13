<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class advertisers
 * @package App\Models
 * @version October 13, 2018, 11:06 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection vehicleCoverage
 * @property \Illuminate\Database\Eloquent\Collection vehicles
 * @property string name
 * @property string company
 * @property string phone
 * @property string email
 * @property string type
 * @property string fleet_size
 * @property string duration
 * @property string budget
 * @property string remarks
 */
class advertisers extends Model
{
    use SoftDeletes;

    public $table = 'quotes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'company',
        'phone',
        'email',
        'type',
        'fleet_size',
        'duration',
        'budget',
        'remarks'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'company' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'type' => 'string',
        'fleet_size' => 'string',
        'duration' => 'string',
        'budget' => 'string',
        'remarks' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
