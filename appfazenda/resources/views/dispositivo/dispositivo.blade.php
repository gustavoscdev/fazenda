<!DOCTYPE html>
<html lang="pt-BR" ng-app="listaContatos">
    <head>
        <title>Lista de Fazendas</title>

        
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>           
        <div class="col-xs-12" style="text-align:center">
            <h3>Dispositivo</h3>
        </div>
        <div>Nome: {{$dado->nom_dispositivo}}</div>
        <div>Descrição: {{$dado->des_dispositivo}}</div>
        <div>latitude: {{$dado->num_latitude}}</div>
        <div>logitude: {{$dado->num_longitude}}</div>

        <div>
            <a href="{{ url('/procurar')}}" style="text-decoration:none;" >
            Animais proximos
        </a>
        </div>
 
    </body>
</html>