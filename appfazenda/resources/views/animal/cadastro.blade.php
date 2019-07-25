<!DOCTYPE html>
<html lang="pt-BR" ng-app="listaContatos">
<style>
 .espaco {    
    padding: 9px;
 }
</style>
    <head>
        <title>Cadastrar Animal</title>

        
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>           
    <div class="col-xs-12" style="text-align: center;padding-top:50px;">
    <form action="/animal" method="post">
        @csrf    
        <div  class="col-xs-12 espaco">
            <div class="col-xs-3">
                Etiqueta:
            </div>
            <div class="col-xs-3">
                <input type="text" name="rf_id" value="{{$dado->rf_id}}" readonly style="border: none;">
            </div>
        </div>
        <div class="col-xs-12 espaco">
            <div class="col-xs-3">
                Nome:
            </div>
            <div class="col-xs-3">
                <input type="text" name="nom_animal" value="{{$dado->nom_animal}}">
            </div>
        </div>
        <div class="col-xs-12 espaco">
            <div class="col-xs-3">
                Descrição:
            </div>
            <div class="col-xs-3">
                <input type="text" name="num_peso" value="{{$dado->num_peso}}">
            </div>
        </div>
        <div class="col-xs-12 espaco">
            <div class="col-xs-3">
                Raça:
            </div>
            <div class="col-xs-3">
                <input type="text" name="nom_raca" value="{{$dado->nom_raca}}">
            </div>
        </div>
        <div class="col-xs-12 espaco">
            <div class="col-xs-3">
                Peso:
            </div>
            <div class="col-xs-3">
                <input type="text" name="num_peso" value="{{$dado->num_peso}}">
            </div>
        </div>

        <input type="submit" value="Salvar">
    </form>
    </body>
    </div>
</html>