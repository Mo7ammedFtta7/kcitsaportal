<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class customers
 * @package App\Models
 * @version October 7, 2018, 12:56 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Myjob
 * @property \Illuminate\Database\Eloquent\Collection Vehicle
 * @property string name
 * @property string email
 * @property string img
 * @property string|\Carbon\Carbon email_verified_at
 * @property string password
 * @property string remember_token
 * @property string identity_no
 * @property boolean gender
 * @property string bank_name
 * @property string account_no
 * @property string mobile_no
 * @property string home_address
 * @property string work_address
 */
class customers extends Model
{
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'email',
        'img',
        'email_verified_at',
        'password',
        'remember_token',
        'identity_no',
        'gender',
        'bank_name',
        'account_no',
        'mobile_no',
        'home_address',
        'work_address'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'img' => 'string',
        'password' => 'string',
        'remember_token' => 'string',
        'identity_no' => 'string',
        'gender' => 'boolean',
        'bank_name' => 'string',
        'account_no' => 'string',
        'mobile_no' => 'string',
        'home_address' => 'string',
        'work_address' => 'string'
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
    public function cjobs()
    {
        return $this->hasMany(\App\Models\cjob::class,'id','user');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function vehicles()
    {
        return $this->hasMany(\App\Models\Vehicle::class);
    }
}
