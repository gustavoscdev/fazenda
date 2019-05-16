<?php
namespace App\Repositories\Usuario;

use Illuminate\Http\Request;
use App\Models\Usuario\Usuario;



class UsuarioRepository extends Usuario
{ 
    public function listarUsuarios(int $qtdItens = 15, Request $request = NULL){
        $usuarios = new Usuario();
        return $usuarios->get();       
    }
}