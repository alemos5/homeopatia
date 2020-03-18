<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ArticuloEns
 * @package App\Models
 * @version March 18, 2020, 7:23 pm EDT
 *
 * @property integer language_id
 * @property integer reference_id
 * @property string reference_table
 * @property string reference_field
 * @property string value
 * @property string original_value
 * @property string original_text
 */
class ArticuloEns extends Model
{
    use SoftDeletes;

    public $table = 'articulo_ens';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'language_id',
        'reference_id',
        'reference_table',
        'reference_field',
        'value',
        'original_value',
        'original_text'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'language_id' => 'integer',
        'reference_id' => 'integer',
        'reference_table' => 'string',
        'reference_field' => 'string',
        'value' => 'string',
        'original_value' => 'string',
        'original_text' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'language_id' => 'required',
        'reference_id' => 'required',
        'reference_table' => 'required',
        'reference_field' => 'required',
        'value' => 'required',
        'original_text' => 'required'
    ];

    
}
