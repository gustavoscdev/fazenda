<?php
namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Usuario\UsuarioRepository;
/*  */
class UsuarioController extends Controller
{
    private $repository;

    public function __construct(){
        $this->repository = new UsuarioRepository;
    }

    public function index(Request $request)
    {
        $perPage = (int) $request->input('per_page');
        if(!$perPage){
            $perPage = 10;
        }

        return $this->repository->listarUsuarios($perPage, $request);
    }
   
}
