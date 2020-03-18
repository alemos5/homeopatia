<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Articulos
 * @package App\Models
 * @version March 16, 2020, 8:52 pm EDT
 *
 * @property string title
 * @property string alias
 * @property string title_alias
 * @property string introtext
 * @property string fulltext
 * @property boolean state
 * @property integer sectionid
 * @property integer mask
 * @property integer catid
 * @property integer created_by
 * @property string created_by_alias
 * @property integer modified_by
 * @property integer checked_out
 * @property string images
 * @property string urls
 * @property string attribs
 * @property integer version
 * @property integer parentid
 * @property integer ordering
 * @property string metakey
 * @property string metadesc
 * @property integer access
 * @property integer hits
 * @property string metadata
 */
class Articulos extends Model
{
    use SoftDeletes;

    public $table = 'articulos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'alias' => 'string',
        'title_alias' => 'string',
        'introtext' => 'string',
        'fulltext' => 'string',
        'state' => 'boolean',
        'sectionid' => 'integer',
        'mask' => 'integer',
        'catid' => 'integer',
        'created_by' => 'integer',
        'created_by_alias' => 'string',
        'modified_by' => 'integer',
        'checked_out' => 'integer',
        'images' => 'string',
        'urls' => 'string',
        'attribs' => 'string',
        'version' => 'integer',
        'parentid' => 'integer',
        'ordering' => 'integer',
        'metakey' => 'string',
        'metadesc' => 'string',
        'access' => 'integer',
        'hits' => 'integer',
        'metadata' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'alias' => 'required',
        'title_alias' => 'required',
        'introtext' => 'required',
        'fulltext' => 'required',
        'state' => 'required',
        'sectionid' => 'required',
        'mask' => 'required',
        'catid' => 'required',
        'created_by' => 'required',
        'created_by_alias' => 'required',
        'modified_by' => 'required',
        'checked_out' => 'required',
        'images' => 'required',
        'urls' => 'required',
        'attribs' => 'required',
        'version' => 'required',
        'parentid' => 'required',
        'ordering' => 'required',
        'metakey' => 'required',
        'metadesc' => 'required',
        'access' => 'required',
        'hits' => 'required',
        'metadata' => 'required'
    ];

    
}
