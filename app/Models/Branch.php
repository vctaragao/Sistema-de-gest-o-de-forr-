<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Branch
 * @package App\Models
 * @version February 6, 2020, 10:17 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection users
 * @property \Illuminate\Database\Eloquent\Collection classrooms
 * @property string name
 */
class Branch extends Model
{

    public $table = 'branches';
    



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
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
    public function users()
    {
        return $this->hasMany(\App\Models\User::class, 'branch_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function classrooms()
    {
        return $this->hasMany(\App\Models\Classroom::class, 'branch_id');
    }
}
