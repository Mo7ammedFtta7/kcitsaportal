<?php

namespace App\Repositories;

use App\Models\clients;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class clientsRepository
 * @package App\Repositories
 * @version October 7, 2018, 12:52 pm UTC
 *
 * @method clients findWithoutFail($id, $columns = ['*'])
 * @method clients find($id, $columns = ['*'])
 * @method clients first($columns = ['*'])
*/
class clientsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'icon',
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return clients::class;
    }
}
