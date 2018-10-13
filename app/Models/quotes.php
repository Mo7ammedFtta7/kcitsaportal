<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class quotes
 * @package App\Models
 * @version October 7, 2018, 12:05 pm UTC
 *
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
class quotes extends Model
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
