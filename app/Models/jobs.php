<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class jobs
 * @package App\Models
 * @version October 7, 2018, 12:58 pm UTC
 *
 * @property \App\Models\Client client
 * @property \Illuminate\Database\Eloquent\Collection Myjob
 * @property \Illuminate\Database\Eloquent\Collection vehicles
 * @property string jopname
 * @property string img
 * @property integer slots
 * @property integer duration
 * @property integer price
 * @property integer client
 * @property date req_start_date
 * @property date reg_end_date
 * @property date ins_start_date
 * @property date ins_end_date
 * @property date comp_start_date
 * @property date comp_end_date
 * @property string unin_period
 * @property date un_start_date
 * @property date un_end_date
 * @property string sticker_placements
 * @property integer status
 */
class jobs extends Model
{
    use SoftDeletes;

    public $table = 'jobs';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'jopname',
        'img',
        'slots',
        'duration',
        'price',
        'client',
        'req_start_date',
        'reg_end_date',
        'ins_start_date',
        'ins_end_date',
        'comp_start_date',
        'comp_end_date',
        'unin_period',
        'un_start_date',
        'un_end_date',
        'sticker_placements',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'jopname' => 'string',
        'img' => 'string',
        'slots' => 'integer',
        'duration' => 'integer',
        'price' => 'integer',
        'client' => 'integer',
        'req_start_date' => 'date',
        'reg_end_date' => 'date',
        'ins_start_date' => 'date',
        'ins_end_date' => 'date',
        'comp_start_date' => 'date',
        'comp_end_date' => 'date',
        'unin_period' => 'string',
        'un_start_date' => 'date',
        'un_end_date' => 'date',
        'sticker_placements' => 'string',
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
    public function clients()
    {
        return $this->belongsTo(\App\Models\clients::class,'client','id');
    }
    public function statuses()
    {
        return $this->belongsTo(\App\Models\statuses::class,'status','id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function cjobs()
    {
        return $this->hasMany(\App\Models\cjob::class,'id','job');
    }
}
