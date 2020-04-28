<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ClientesCreditos
 * @package App\Models
 * @version April 27, 2020, 1:24 pm EDT
 *
 * @property integer cliente_id
 * @property integer pricing_id
 * @property integer cantidad
 * @property string tipo
 * @property number costo
 * @property string fecha
 * @property string operacion
 * @property string json
 */
class ClientesCreditos extends Model
{
    use SoftDeletes;

    public $table = 'clientes_creditos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'cliente_id',
        'pricing_id',
        'cantidad',
        'tipo',
        'costo',
        'fecha',
        'operacion',
        'json'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cliente_id' => 'integer',
        'pricing_id' => 'integer',
        'cantidad' => 'integer',
        'tipo' => 'string',
        'costo' => 'float',
        'fecha' => 'date',
        'operacion' => 'string',
        'json' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
