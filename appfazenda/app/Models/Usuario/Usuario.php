<?php
namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Model;


class Usuario extends Model {
    protected $table      = 'adm_usuario';
    protected $primaryKey = 'id';

    // campos que podem ser passados pelo usuario em objeto request
    //protected $fillable   = ['negocio_id','cliente_id','des_titulo','des_acao','dt_planejado_ini','dt_planejado_fim','acao_tp_id','acao_id_pai','acao_id_ori','ind_realizado','dt_realizado','des_resultado','endereco_id','ind_audit','dt_audit','des_resultado_audit'];
    // protected $hidden     = ['negocio_id','cliente_id','acao_tp_id','acao_id_pai','acao_id_ori','usuario_id_criacao','usuario_id_alteracao','usuario_id_realizado','usuario_id_checkin','usuario_id_checkout','usuario_id_audit','instalacao_id'];
    //protected $appends = ['descricao_text'];

}