<?php

namespace App\Http\Controllers\Dispositivo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Dispositivo\DispositivoRepository;


class DispositivoController extends Controller
{  
    private $repository;

    public function __construct()
    {
        $this->repository = new DispositivoRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {           
        $perPage = false;     

        if(!$perPage){
            $perPage = 10;
        }
        $obj = array('dados' => $this->repository->listarDispositivos($perPage, $id));

        return view('dispositivo.dispositivos',$obj);
    }
    public function show(int $id)
    {
        $obj = array('dado' => $this->repository->showDispositivo($id));
        return view('dispositivo.dispositivo',$obj);
    }
    
    public function showV(Request $request, int $id)
    {   
        
    }
    
    public function getDispositivos()
    {   
        return $this->repository->getRfids();
        return view('dispositivo.dispositivos',$obj);
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function salvar(Request $request)
    {
        $control = $this->repository->salvarDispositivo($request->all());
        if($control) {            
            $disp = $this->repository->listarDispositivos();
            $dado = array('dados' => $disp);
            return view('dispositivo.dispositivos',$dado);
        }else {
            $obj = array('dado' =>  $this->repository->showFazenda(1));
            return view('fazenda.fazenda',$obj);
        }
        
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
