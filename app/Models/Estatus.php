<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Estatus
 * @package App\Models
 * @version March 16, 2020, 8:43 pm EDT
 *
 * @property string estatus
 */
class Estatus extends Model
{
    use SoftDeletes;

    public $table = 'estatus';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'estatus'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_estatus' => 'integer',
        'estatus' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'estatus' => 'required'
    ];

    
}
