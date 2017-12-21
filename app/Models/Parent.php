<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Parent
 * @package App\Models
 * @version December 20, 2017, 10:07 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Pupil
 * @property \Illuminate\Database\Eloquent\Collection roleRoute
 * @property \Illuminate\Database\Eloquent\Collection users
 * @property string full_name
 * @property string phone_number
 * @property string address
 */
class Parent extends Model
{
    use SoftDeletes;

    public $table = 'parents';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'full_name',
        'phone_number',
        'address'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'full_name' => 'string',
        'phone_number' => 'string',
        'address' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function pupils()
    {
        return $this->hasMany(\App\Models\Pupil::class);
    }
}
