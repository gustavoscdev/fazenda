<?php

namespace App\Http\Controllers\Fazenda;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Fazenda\FazendaRepository;

class FazendaController extends Controller
{  
    private $repository;

    public function __construct()
    {
        $this->repository = new FazendaRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request = null)
    { 
        
        // $f = new FazendaController();
        // $f->index();
        // $obj = ['dados' => $f->index()];
        // return view('fazenda.fazendas',$obj);

        $perPage = false;     
        if($request){
            $perPage = (int) $request->input('per_page');        
        }

        if(!$perPage){
            $perPage = 10;
        }
        $obj = $this->repository->listarFazendas($perPage, $request);

        return view('fazenda.fazendas',['dados' => $obj]);
    }
    public function show(Request $request, int $id)
    {   
        return $this->repository->showFazenda($id);
    }
    
    public function showV(Request $request, int $id)
    {   
        $obj = array('dado' =>  $this->repository->showFazenda($id));        
        return view('fazenda.fazenda',$obj);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     //   $this->repository->removerUsuario($id);
    }



}
