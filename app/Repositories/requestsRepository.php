<?php

namespace App\Repositories;

use App\Models\requests;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class requestsRepository
 * @package App\Repositories
 * @version October 12, 2018, 6:03 pm UTC
 *
 * @method requests findWithoutFail($id, $columns = ['*'])
 * @method requests find($id, $columns = ['*'])
 * @method requests first($columns = ['*'])
*/
class requestsRepository extends BaseRepository
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
        return requests::class;
    }
}
