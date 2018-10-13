<?php

namespace App\Repositories;

use App\Models\admins;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class adminsRepository
 * @package App\Repositories
 * @version October 7, 2018, 11:31 am UTC
 *
 * @method admins findWithoutFail($id, $columns = ['*'])
 * @method admins find($id, $columns = ['*'])
 * @method admins first($columns = ['*'])
*/
class adminsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'work_address'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return admins::class;
    }
}
