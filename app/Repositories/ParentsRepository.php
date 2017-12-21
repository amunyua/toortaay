<?php

namespace App\Repositories;

use App\Models\Parents;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ParentsRepository
 * @package App\Repositories
 * @version December 20, 2017, 10:10 pm UTC
 *
 * @method Parents findWithoutFail($id, $columns = ['*'])
 * @method Parents find($id, $columns = ['*'])
 * @method Parents first($columns = ['*'])
*/
class ParentsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'full_name',
        'phone_number',
        'address'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Parents::class;
    }
}
