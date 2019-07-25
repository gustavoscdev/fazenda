<?php

namespace App\Services;

class ApiService{
  PROTECTED $CLIENT_ID      = 1;
  PROTECTED $SERVER         = 'api.xbusiness';
  PROTECTED $CLIENT_SECRET  = 'NcWqhpPXpoDMSOwlzbxU1MxA8hN5XBbZ0tlp6MPD';//'z5qjkGFDfWklppDO6VbuBQH7T8IMr6cxxij1e5Ob';

	public function __construct(){

	}
  public function getErroResult($result){
    $erro = '';
    foreach($result->json->errors as $key => $varErro) {
      foreach($varErro as $key => $message) {
        $erro .= $message.PHP_EOL;
      }
    }
    if($result->status == 500 || $result->status == 401){
      $erro .= $result->json->message;
    }
    return $erro;
  }

  private function _curlParams($route, $tipo, $token = false, $params = false,$hasFile = false){
    $curl = array(
      CURLOPT_URL => $this->SERVER."/".$route,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => $tipo,
      CURLOPT_HTTPHEADER => array(
        "Content-Type: " . ($hasFile ? "multipart/form-data" : "application/json"),
        "Accept: application/json",
        "Authorization: Bearer $token",
        "cache-control: no-cache"
      ),
    );

    if($tipo == 'POST' || $tipo == 'PUT' || ($tipo == 'GET' && $params) ){
      if(!$hasFile && gettype($params) == "object"){
        foreach($params as $key => $value){
          if(is_null($value)){
            $params->$key = "";
          }
          if(count($value) === 0 and gettype($value) == 'array'){
            $params->$key = "";
          }
        }	
      }
      $curl[CURLOPT_POSTFIELDS] = $hasFile ? $params : json_encode($params);
    }
    return $curl;
  }
  public function _post($route, $params, $token = false, $veficaStatus = true, $hasFile = false){
    $curl = curl_init();
    $curlParams = $this->_curlParams($route, 'POST', $token, $params, $hasFile);
    curl_setopt_array($curl, $curlParams);
    $response = curl_exec($curl);
    $err = curl_error($curl);    
    $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);
    if ($err) {
      return false;
    } else {
      $json = (object) array('status'=>$httpcode,'json'=>json_decode($response));
      if ($veficaStatus) {
        $this->verificaStatus($json);
      }
      return $json;
    }
  }
  public function _get($route, $token = false, $veficaStatus = true, $params=false){
    $curl = curl_init();
    curl_setopt_array($curl, $this->_curlParams($route, 'GET', $token, $params));
    $response = curl_exec($curl);
    $err = curl_error($curl);
    $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);
    if ($err) {
      return false;
    } else {
      $json = (object) array('status'=>$httpcode,'json'=>json_decode($response));
      if ($veficaStatus) {
        $this->verificaStatus($json);
      }
      return $json;
    }
  }
  public function _put($route, $params, $token = false, $veficaStatus = true){
    $curl = curl_init();
    curl_setopt_array($curl, $this->_curlParams($route, 'PUT', $token, $params));
    $response = curl_exec($curl);
    $err = curl_error($curl);
    $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);
    if ($err) {
      return false;
    } else {
      $json = (object) array('status'=>$httpcode,'json'=>$response);
      if ($veficaStatus) {
        $this->verificaStatus($json);
      }
      return $json;
    }
  }
  public function _delete($route, $token = false, $veficaStatus = true){
    $curl = curl_init();
    curl_setopt_array($curl, $this->_curlParams($route, "DELETE", $token));
    $response = curl_exec($curl);
    $err = curl_error($curl);
    $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);
    if ($err) {
      return false;
    } else {
      $json = (object) array('status'=>$httpcode,'json'=>json_decode($response));
      if ($veficaStatus) {
        $this->verificaStatus($json);
      }
      return $json;
    }
  }

  public function getToken($usuario, $senha, $tokenInstalacao){
    $params = array(  'grant_type'=>'password',
                      'client_id'=>$this->CLIENT_ID,
                      'client_secret'=>$this->CLIENT_SECRET,
                      'username'=>$usuario,
                      'password'=>$senha,
                      'scope'=>'' );
    if($tokenInstalacao){
      $params['instalacao'] = $tokenInstalacao;
    }

    return $this->_post("oauth/token/", $params);
  }

  private function verificaMsgErro($objeto) {
    $retorno = "";
    if (!empty($objeto->errors)) {
      foreach($objeto->errors as $arrMsg) {
        foreach($arrMsg as $msg) {
          $retorno .= $msg . "\n";
        }
      }
    } else {
      $retorno = $objeto->message;
    }
    return $retorno;
  }

  public function verificaStatus($dados, $retornaErro = true) {
    global $_RS;
    switch ($dados->status) {
      case 200:
      case 201:
        $_RS['erro'] = false;
        break;
      case 401:
        $_RS['erro'] = true;
        $_RS['codigoErro'] = 4;
        break;
      case 422:
        $_RS['erro'] = true;
        $_RS['valErro'] = $this->verificaMsgErro($dados->json);
        break;

      default:
        $_RS['erro'] = true;
        $_RS['valErro'] = $this->verificaMsgErro($dados->json);
        break;
    }
  }

  public function getTokenWithRefresh($refresh_token, $tokenInstalacao){
    $params = array(  'grant_type'=>'refresh_token',
                      'client_id'=>$this->CLIENT_ID,
                      'client_secret'=>$this->CLIENT_SECRET,
                      'refresh_token'=>$refresh_token,
                      'scope'=>'' );
      if($tokenInstalacao){
        $params['instalacao'] = $tokenInstalacao;
      }
    return $this->_post("oauth/token/", $params);
  }


}