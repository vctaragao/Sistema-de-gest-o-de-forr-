<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Lesson
 * @package App\Models
 * @version February 6, 2020, 10:43 pm UTC
 *
 * @property \App\Models\Classroom classroom
 * @property integer classroom_id
 * @property string date
 * @property string content
 */
class Lesson extends Model
{

    public $table = 'lessons';
    



    public $fillable = [
        'classroom_id',
        'date',
        'content'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'classroom_id' => 'integer',
        'date' => 'string',
        'content' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'classroom_id' => 'required',
        'date' => 'required',
        'content' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function classroom()
    {
        return $this->belongsTo(\App\Models\Classroom::class, 'classroom_id', 'id');
    }
}
