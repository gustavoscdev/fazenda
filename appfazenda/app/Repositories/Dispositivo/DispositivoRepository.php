<?php
namespace App\Repositories\Dispositivo;

use Illuminate\Http\Request;

use App\Models\Dispositivo\Dispositivo;

class DispositivoRepository extends Dispositivo
{ 
    public function listarDispositivos(int $qtdItens = 15,$id){
        
        $dispositivo = new Dispositivo();
        return $dispositivo->get();       
    }

    public function showDispositivo($id){        
        $dispositivo = new Dispositivo();        
        return $dispositivo->find($id);
    }
}