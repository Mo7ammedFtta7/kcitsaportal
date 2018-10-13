<?php

namespace App\Repositories;

use App\Models\coverages;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class coveragesRepository
 * @package App\Repositories
 * @version October 8, 2018, 10:10 pm UTC
 *
 * @method coverages findWithoutFail($id, $columns = ['*'])
 * @method coverages find($id, $columns = ['*'])
 * @method coverages first($columns = ['*'])
*/
class coveragesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return coverages::class;
    }
}
