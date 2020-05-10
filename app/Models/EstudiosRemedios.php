<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class EstudiosRemedios
 * @package App\Models
 * @version April 4, 2020, 5:54 pm EDT
 *
 * @property integer estudio_id
 * @property string medicamento
 * @property integer medicamento_id
 * @property integer sac
 * @property string reino
 * @property string reino_en
 * @property string clave
 * @property string nota
 */
class EstudiosRemedios extends Model
{
    use SoftDeletes;

    public $table = 'estudios_remedios';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'estudio_id',
        'medicamento',
        'medicamento_id',
        'sac',
        'reino',
        'reino_en',
        'clave',
        'nota'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'estudio_id' => 'integer',
        'medicamento' => 'string',
        'medicamento_id' => 'integer',
        'sac' => 'integer',
        'reino' => 'string',
        'reino_en' => 'string',
        'clave' => 'string',
        'nota' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'estudio_id' => 'required'
    ];


}
