<!DOCTYPE html>
	<html lang="pt-BR" ng-app="listaContatos">
	    <head>
	        <title>Lista de Fazendas</title>
	
	        
	        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	    </head>
	    <body>
            <div class="col-xs-12" style="text-align:center">
                <h3>{{$dado->nom_fazenda}}</h3>
            </div>
            
            
            <div>Código: {{$dado->cod_fazenda}}</div>
            <div>Criação: {{$dado->dt_criacao}}</div>
            <div>
                <a href="{{ url('/dispositivos/' . $dado->id)}}">Dipositivos</a>
            </div>   
            <div>
                <a href="{{ url('/animal')}}">Animais</a>
            </div>              
            
        </body>
	</html>