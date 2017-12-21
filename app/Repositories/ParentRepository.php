<?php

namespace App\Repositories;

use App\Models\Parent;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ParentRepository
 * @package App\Repositories
 * @version December 20, 2017, 10:07 pm UTC
 *
 * @method Parent findWithoutFail($id, $columns = ['*'])
 * @method Parent find($id, $columns = ['*'])
 * @method Parent first($columns = ['*'])
*/
class ParentRepository extends BaseRepository
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
        return Parent::class;
    }
}
