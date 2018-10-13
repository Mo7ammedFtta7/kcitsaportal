<?php

namespace App\Repositories;

use App\Models\vehicleCoverage;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class vehicleCoverageRepository
 * @package App\Repositories
 * @version October 8, 2018, 9:55 pm UTC
 *
 * @method vehicleCoverage findWithoutFail($id, $columns = ['*'])
 * @method vehicleCoverage find($id, $columns = ['*'])
 * @method vehicleCoverage first($columns = ['*'])
*/
class vehicleCoverageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type',
        'coverage'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return vehicleCoverage::class;
    }
}
