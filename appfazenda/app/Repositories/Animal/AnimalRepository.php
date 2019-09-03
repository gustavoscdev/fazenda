<?php
namespace App\Repositories\Animal;

use App\Services\ApiService;


use Illuminate\Http\Request;
use App\Models\Animal\Animal;

class AnimalRepository extends Animal
{ 

    public function salvarAnimal($disp){
        $novoAnimal = new Animal();

        $novoAnimal->rf_id      = $disp['rf_id'];
        $novoAnimal->nom_animal      = $disp['nom_animal'];
        $novoAnimal->num_peso      = $disp['num_peso'];
        $novoAnimal->nom_raca      = $disp['nom_raca'];

        $novoAnimal->dt_nascimento      = array_key_exists('dt_nascimento',$disp) ? 
                                            $disp['dt_nascimento'] : null;
        $novoAnimal->val_comprado      = array_key_exists('val_comprado',$disp) ? 
                                            $disp['val_comprado'] : null;
        $novoAnimal->val_estimado      = array_key_exists('val_estimado',$disp) ? 
                                            $disp['val_estimado'] : null;
        $novoAnimal->ind_vendido      = array_key_exists('ind_vendido',$disp) ? 
                                            $disp['ind_vendido'] : null;
        $novoAnimal->val_vendido      = array_key_exists('val_vendido',$disp) ? 
                                            $disp['val_vendido'] : null;
        

        $novoAnimal->ind_situacao      = 'A';        
        $novoAnimal->fazenda_id           = 1;
        $novoAnimal->animal_tipo_id   = 1;
        $novoAnimal->usuario_id_alteracao   = 1;
        $novoAnimal->usuario_id_criacao   = 1;
        $novoAnimal->dt_alteracao = '2019-12-12 00:00:00';
        $novoAnimal->dt_criacao = '2019-12-12 00:00:00';
        
        return $novoAnimal->save();


    }

    public function getRfids(){        
        $client = new ApiService();       
        $response = $client->_get('http://192.168.100.9/getIds');
        $codDisp = $response->json;

        if($codDisp == '')
            return view('animal.animais',array('dados' => []));

        $disp = Animal::where('rf_id',$codDisp)->get();
        if(count($disp) == 0) {
             $disp = new Animal();

             $disp->rf_id = $codDisp;
             
             return view('animal.cadastro',array('dado' => $disp));
         }
         
         $dado = array('dados' => $disp);
         return view('animal.animais',$dado);
     }

     public function listarAnimais(){        
        $animal = new Animal();
        return $animal->get();    
     }

     public function showAnimal($id){
         $ani = new Animal();
        return $ani->find($id);
     }

     public function getAll(){
        $ani = new Animal();
        return $ani->get();
     }
}
