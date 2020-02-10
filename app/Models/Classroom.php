<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Classroom
 * @package App\Models
 * @version February 6, 2020, 10:18 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection classes
 * @property \App\Models\Branch branch
 * @property integer branch_id
 * @property string name
 * @property string week_day
 * @property string schedule
 * @property integer size
 * @property boolean isActive
 * @property boolean isOpen
 */
class Classroom extends Model
{

    public $table = 'classrooms';
    



    public $fillable = [
        'branch_id',
        'name',
        'week_day',
        'schedule',
        'size',
        'isActive',
        'isOpen'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'branch_id' => 'integer',
        'name' => 'string',
        'week_day' => 'string',
        'schedule' => 'string',
        'size' => 'integer',
        'isActive' => 'boolean',
        'isOpen' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'branch_id' => 'required',
        'name' => 'required',
        'week_day' => 'required',
        'schedule' => 'required',
        'size' => 'required',
        'isActive' => 'required',
        'isOpen' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function lessons()
    {
        return $this->hasMany(\App\Models\Lesson::class, 'classroom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function branch()
    {
        return $this->belongsTo(\App\Models\Branch::class, 'branch_id', 'id');
    }

    public function users()
    {
        return $this->belongsToMany('App\Role', 'classroom_user');
    }
}
