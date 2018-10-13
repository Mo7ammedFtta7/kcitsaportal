<?php

namespace App\Repositories;

use App\Models\vehicleType;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class vehicleTypeRepository
 * @package App\Repositories
 * @version October 8, 2018, 9:43 pm UTC
 *
 * @method vehicleType findWithoutFail($id, $columns = ['*'])
 * @method vehicleType find($id, $columns = ['*'])
 * @method vehicleType first($columns = ['*'])
*/
class vehicleTypeRepository extends BaseRepository
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
        return vehicleType::class;
    }
}
