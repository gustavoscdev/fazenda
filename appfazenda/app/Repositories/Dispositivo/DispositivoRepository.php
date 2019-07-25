<?php
namespace App\Repositories\Dispositivo;

use App\Services\ApiService;


use Illuminate\Http\Request;
use App\Models\Dispositivo\Dispositivo;

class DispositivoRepository extends Dispositivo
{ 
    public function listarDispositivos(int $qtdItens = 15){
        
        $dispositivo = new Dispositivo();
        return $dispositivo->get();       
    }

    public function showDispositivo($id){
        $dispositivo = new Dispositivo();        
        return $dispositivo->find($id);
    }

    public function salvarDispositivo($disp){
        
        $dispNovo = new Dispositivo();

        $dispNovo->cod_dispositivo      = $disp['cod_dispositivo'];
        $dispNovo->nom_dispositivo      = $disp['nom_dispositivo'];
        $dispNovo->des_dispositivo      = $disp['des_dispositivo'];
        $dispNovo->fazenda_id           = 1;
        $dispNovo->usuario_id_criacao   = 1;
        
        return $dispNovo->save();


    }

    
    
}