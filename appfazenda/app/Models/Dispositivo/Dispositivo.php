<?php

namespace App\Models\Dispositivo;

use App\Models\Modelfa;
use App\Models\Dispositivo\DispositivoAtivador;

class Dispositivo extends Modelfa
{
    protected $table      = 'fa_dispositivo';
    protected $fillable = ['fazenda_id','usuario_id_criacao','cod_dispositivo',
                            'nom_dispositivo','num_latitude','num_longitude','ind_situacao'];
    protected $primaryKey = 'id';

    public function ativadores(){
        return $this->hasMany(DispositivoAtivador::class, 'dispositivo_id');
    }


}
