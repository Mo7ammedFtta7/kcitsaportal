<?php

namespace App\Repositories;

use App\Models\cjobs;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class cjobsRepository
 * @package App\Repositories
 * @version October 13, 2018, 11:07 am UTC
 *
 * @method cjobs findWithoutFail($id, $columns = ['*'])
 * @method cjobs find($id, $columns = ['*'])
 * @method cjobs first($columns = ['*'])
*/
class cjobsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user',
        'job',
        'vehicle',
        'start_date',
        'end_date',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return cjobs::class;
    }
}
