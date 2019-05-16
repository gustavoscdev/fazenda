<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Model;

class UsuarioFazenda extends Model
{
    protected $table = "adm_usuario_fazenda";
    protected $primaryKey = ['usuario_id','fazenda_id'];
    public $incrementing = false;
    //
}
