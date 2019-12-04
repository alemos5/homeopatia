<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
     protected $table = 'geo_countries';

    protected $primaryKey = 'id';

    public $timestamps = false;

     protected $fillable = [
        'name',
    ];
}
