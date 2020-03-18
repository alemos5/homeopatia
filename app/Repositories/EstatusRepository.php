<?php

namespace App\Repositories;

use App\Models\Estatus;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EstatusRepository
 * @package App\Repositories
 * @version March 16, 2020, 8:43 pm EDT
 *
 * @method Estatus findWithoutFail($id, $columns = ['*'])
 * @method Estatus find($id, $columns = ['*'])
 * @method Estatus first($columns = ['*'])
*/
class EstatusRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'estatus'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Estatus::class;
    }
}
