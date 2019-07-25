<?php

namespace App\Models\Dispositivo;

use App\Models\Modelfa;

class Dispositivo extends Modelfa
{
    protected $table      = 'fa_dispositivo';
    protected $fillable = ['fazenda_id','usuario_id_criacao','cod_dispositivo',
                            'nom_dispositivo','num_latitude','num_longitude','ind_situacao'];
    protected $primaryKey = 'id';
}
