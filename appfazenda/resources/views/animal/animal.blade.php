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
        <div>Nome: {{$dado->nom_animal}}</div>
        <div>Etiqueta: {{$dado->rf_id}}</div>
        <div>Peso: {{$dado->num_peso}}</div>
        <div>Raça: {{$dado->nom_raca}}</div>
    </body>
</html>