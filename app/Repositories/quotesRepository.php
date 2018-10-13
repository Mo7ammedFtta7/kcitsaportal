<?php

namespace App\Repositories;

use App\Models\quotes;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class quotesRepository
 * @package App\Repositories
 * @version October 7, 2018, 12:05 pm UTC
 *
 * @method quotes findWithoutFail($id, $columns = ['*'])
 * @method quotes find($id, $columns = ['*'])
 * @method quotes first($columns = ['*'])
*/
class quotesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'company',
        'phone',
        'email',
        'type',
        'fleet_size',
        'duration',
        'budget',
        'remarks'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return quotes::class;
    }
}
