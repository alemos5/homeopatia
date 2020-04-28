<?php

namespace App\Repositories;

use App\Models\ClientesCreditos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ClientesCreditosRepository
 * @package App\Repositories
 * @version April 27, 2020, 1:24 pm EDT
 *
 * @method ClientesCreditos findWithoutFail($id, $columns = ['*'])
 * @method ClientesCreditos find($id, $columns = ['*'])
 * @method ClientesCreditos first($columns = ['*'])
*/
class ClientesCreditosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return ClientesCreditos::class;
    }
}
