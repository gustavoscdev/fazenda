<!DOCTYPE html>
<html lang="pt-BR" ng-app="listaContatos">
    <head>
        <title>Lista de Fazendas</title>

        
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>           
    <div class="col-xs-12" style="text-align: center;padding-top:50px;">
    <form action="/dispositivo" method="post">
        @csrf
        <div  class="col-xs-12">
            <div class="col-xs-3">
                Código:
            </div>
            <div class="col-xs-3">
                <input type="text" name="cod_dispositivo" value="{{$dado->cod_dispositivo}}" style="border: none;">
            </div>
        </div>
        <div class="col-xs-12">
            <div class="col-xs-3">
                Nome:
            </div>
            <div class="col-xs-3">
                <input type="text" name="nom_dispositivo" value="{{$dado->nom_dispositivo}}">
            </div>
        </div>
        <div class="col-xs-12">
            <div class="col-xs-3">
                Descrição:
            </div>
            <div class="col-xs-3">
                <input type="text" name="des_dispositivo" value="{{$dado->des_dispositivo}}">
            </div>
        </div>

        <input type="submit" value="Salvar">
    </form>
    </body>
    </div>
</html>