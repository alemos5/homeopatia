<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creditos extends Model
{
    protected $table = "clientes_creditos";

    protected $fillable = [
        'cliente_id',
        'pricing_id',
        'cantidad',
        'tipo',
        'costo',
        'fecha',
        'operacion',
        'json'
    ];

//    public function cliente(){
//        return $this->belongsTo('App\Clientes', 'cliente_id');
//    }

    public function cliente(){
        return $this->belongsTo('\App\User', 'cliente_id', 'id_cliente');
    }
}
