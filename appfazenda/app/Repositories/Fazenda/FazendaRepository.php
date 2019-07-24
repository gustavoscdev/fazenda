<?php
namespace App\Repositories\Fazenda;

use Illuminate\Http\Request;
use App\Models\Fazenda\Fazenda;



class FazendaRepository extends Fazenda
{ 
    public function listarFazendas(int $qtdItens = 15, Request $request = NULL){
        $fazendas = new Fazenda();
        return $fazendas->get();
    }

    public function showFazenda($id){
        $fazenda = new Fazenda();        
        return $fazenda->find($id);
    }
}