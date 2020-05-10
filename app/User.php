<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use App\Notifications\ResetPasswordNotification;


use Caffeinated\Shinobi\Traits\ShinobiTrait;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, Notifiable, ShinobiTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = "clientes";
    protected $primaryKey = 'id_cliente';
    protected $fillable = [
        'nombre',
        'username',
        'email',
        'email_verified_at',
        'password',
        'code_cliente',
        'pais_id',
        'estado_id',
        'ciudad_id',
        'direccion',
        'telefono',
        'fax',
        'password_admin',
        'completeData',
        'facebook_id',
        'twitter_id',
        'google_id',
        'avatar',
        'nick'
    ];
    public $timestamps = false;


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function prealert()
    {
        return $this->hasMany('\App\Prealerta');
    }

    public function paises()
    {
        return $this->belongsTo('\App\Pais', 'pais', 'id_pais');
    }

    public function ciudades()
    {
        return $this->belongsTo('\App\Ciudad', 'ciudad', 'id_ciudad');
    }

    public function creditos()
    {
        return $this->hasMany('\App\Creditos', 'cliente_id', 'id_cliente');
    }
    public function estudios()
    {
        return $this->hasMany('\App\Models\Estudios', 'id_usuario', 'id_cliente');
    }
    public function perfiles()
    {
        return $this->hasMany(RoleUser::class, 'user_id_cliente', 'id_cliente');
    }


    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

}
