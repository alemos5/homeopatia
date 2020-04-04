<?php

namespace App\Repositories;

use App\Models\EstudiosRemedios;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EstudiosRemediosRepository
 * @package App\Repositories
 * @version April 4, 2020, 5:54 pm EDT
 *
 * @method EstudiosRemedios findWithoutFail($id, $columns = ['*'])
 * @method EstudiosRemedios find($id, $columns = ['*'])
 * @method EstudiosRemedios first($columns = ['*'])
*/
class EstudiosRemediosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'estudio_id',
        'medicamento',
        'medicamento_id',
        'sac',
        'reino',
        'clave',
        'nota'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return EstudiosRemedios::class;
    }
}
