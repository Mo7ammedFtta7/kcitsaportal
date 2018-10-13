<?php

namespace App\Repositories;

use App\Models\advertisers;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class advertisersRepository
 * @package App\Repositories
 * @version October 13, 2018, 11:06 am UTC
 *
 * @method advertisers findWithoutFail($id, $columns = ['*'])
 * @method advertisers find($id, $columns = ['*'])
 * @method advertisers first($columns = ['*'])
*/
class advertisersRepository extends BaseRepository
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
        return advertisers::class;
    }
}
