<?php

namespace App\Repositories;

use App\Models\EstatusBk;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EstatusBkRepository
 * @package App\Repositories
 * @version March 16, 2020, 8:45 pm EDT
 *
 * @method EstatusBk findWithoutFail($id, $columns = ['*'])
 * @method EstatusBk find($id, $columns = ['*'])
 * @method EstatusBk first($columns = ['*'])
*/
class EstatusBkRepository extends BaseRepository
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
        return EstatusBk::class;
    }
}
