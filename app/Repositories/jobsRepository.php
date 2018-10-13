<?php

namespace App\Repositories;

use App\Models\jobs;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class jobsRepository
 * @package App\Repositories
 * @version October 7, 2018, 12:58 pm UTC
 *
 * @method jobs findWithoutFail($id, $columns = ['*'])
 * @method jobs find($id, $columns = ['*'])
 * @method jobs first($columns = ['*'])
*/
class jobsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return jobs::class;
    }
}
