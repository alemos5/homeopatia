<?php

namespace App\Repositories;

use App\Models\ArticuloEns;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ArticuloEnsRepository
 * @package App\Repositories
 * @version March 18, 2020, 7:23 pm EDT
 *
 * @method ArticuloEns findWithoutFail($id, $columns = ['*'])
 * @method ArticuloEns find($id, $columns = ['*'])
 * @method ArticuloEns first($columns = ['*'])
*/
class ArticuloEnsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'language_id',
        'reference_id',
        'reference_table',
        'reference_field',
        'value',
        'original_value',
        'original_text'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ArticuloEns::class;
    }
}
