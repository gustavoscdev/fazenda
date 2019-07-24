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

    public function getRfids(){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');
        
        echo $response->getStatusCode(); # 200
        echo $response->getHeaderLine('content-type'); # 'application/json; charset=utf8'
        echo $response->getBody(); # '{"id": 1420053, "name": "guzzle", ...}'
        
        # Send an asynchronous request.
        $request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
        $promise = $client->sendAsync($request)->then(function ($response) {
            echo 'I completed! ' . $response->getBody();
        });
        
        $promise->wait();
    }
    
}