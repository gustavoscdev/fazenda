<?php

namespace App\Http\Controllers\Animal;



use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Animal\AnimalRepository;

class AnimalController extends Controller
{
    private $repository;

    public function __construct()
    {
        $this->repository = new AnimalRepository;
    }

    public function procurar()
    {   
        return $this->repository->getRfids();
        return view('dispositivo.dispositivos',$obj);
    }

    public function salvar(Request $request)
    {
        $control = $this->repository->salvarAnimal($request->all());
        if($control) {
            $animais = $this->repository->listarAnimais();            
            $dado = array('dados' => $animais);
            return view('animal.animais',$dado);
        }else {
            $obj = array('dado' =>  $this->repository->showFazenda(1));
            return view('fazenda.fazenda',$obj);
        }
        
    }

    public function index(){
        $obj = array('dados' => $this->repository->getAll());
        return view('animal.animais',$obj);
    }

    public function show($id){
        
        $obj = array('dado' => $this->repository->showAnimal($id));
        return view('animal.animal',$obj);
    }
}
