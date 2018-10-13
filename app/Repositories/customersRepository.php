<?php

namespace App\Repositories;

use App\Models\customers;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class customersRepository
 * @package App\Repositories
 * @version October 7, 2018, 12:56 pm UTC
 *
 * @method customers findWithoutFail($id, $columns = ['*'])
 * @method customers find($id, $columns = ['*'])
 * @method customers first($columns = ['*'])
*/
class customersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'img',
        'email_verified_at',
        'password',
        'remember_token',
        'identity_no',
        'gender',
        'bank_name',
        'account_no',
        'mobile_no',
        'home_address',
        'work_address'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return customers::class;
    }
}
