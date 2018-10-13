<?php

namespace App\Repositories;

use App\Models\statuses;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class statusesRepository
 * @package App\Repositories
 * @version October 13, 2018, 12:55 pm UTC
 *
 * @method statuses findWithoutFail($id, $columns = ['*'])
 * @method statuses find($id, $columns = ['*'])
 * @method statuses first($columns = ['*'])
*/
class statusesRepository extends BaseRepository
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
        return statuses::class;
    }
}
