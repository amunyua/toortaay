<?php

namespace App\Repositories;

use App\Models\Pupil;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PupilRepository
 * @package App\Repositories
 * @version December 20, 2017, 10:00 pm UTC
 *
 * @method Pupil findWithoutFail($id, $columns = ['*'])
 * @method Pupil find($id, $columns = ['*'])
 * @method Pupil first($columns = ['*'])
*/
class PupilRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'full_name',
        'class_id',
        'parent_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pupil::class;
    }
}
