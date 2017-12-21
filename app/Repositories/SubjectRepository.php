<?php

namespace App\Repositories;

use App\Models\Subject;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SubjectRepository
 * @package App\Repositories
 * @version December 20, 2017, 9:50 pm UTC
 *
 * @method Subject findWithoutFail($id, $columns = ['*'])
 * @method Subject find($id, $columns = ['*'])
 * @method Subject first($columns = ['*'])
*/
class SubjectRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'code',
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Subject::class;
    }
}
