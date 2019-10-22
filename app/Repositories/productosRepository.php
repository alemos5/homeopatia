<?php

namespace App\Repositories;

use App\Models\productos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class productosRepository
 * @package App\Repositories
 * @version October 21, 2019, 10:30 pm EDT
 *
 * @method productos findWithoutFail($id, $columns = ['*'])
 * @method productos find($id, $columns = ['*'])
 * @method productos first($columns = ['*'])
*/
class productosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return productos::class;
    }
}
