<?php

namespace App\Repositories;

use App\Models\Classes;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ClassesRepository
 * @package App\Repositories
 * @version December 20, 2017, 10:21 pm UTC
 *
 * @method Classes findWithoutFail($id, $columns = ['*'])
 * @method Classes find($id, $columns = ['*'])
 * @method Classes first($columns = ['*'])
*/
class ClassesRepository extends BaseRepository
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
        return Classes::class;
    }
}
