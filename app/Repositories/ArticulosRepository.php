<?php

namespace App\Repositories;

use App\Models\Articulos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ArticulosRepository
 * @package App\Repositories
 * @version March 16, 2020, 8:52 pm EDT
 *
 * @method Articulos findWithoutFail($id, $columns = ['*'])
 * @method Articulos find($id, $columns = ['*'])
 * @method Articulos first($columns = ['*'])
*/
class ArticulosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'alias',
        'title_alias',
        'introtext',
        'fulltext',
        'state',
        'sectionid',
        'mask',
        'catid',
        'created_by',
        'created_by_alias',
        'modified_by',
        'checked_out',
        'images',
        'urls',
        'attribs',
        'version',
        'parentid',
        'ordering',
        'metakey',
        'metadesc',
        'access',
        'hits',
        'metadata'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Articulos::class;
    }
}
