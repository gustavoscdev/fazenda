<!DOCTYPE html>
	<html lang="pt-BR" ng-app="listaContatos">
	    <head>
	        <title>Lista de Fazendas</title>
	
	        
	        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	    </head>
	    <body>           
            <div class="col-xs-12" style="text-align:center">
                <h3>Lita de Fazendas</h3>
            </div>
            <table class="table">
                <thead>
                    <th>Local</th>
                    <th>Descrição</th>
                    <th>Latitude</th>
                    <th>Logitude</th>
                </thead>
                
                <tbody>                 
                    @foreach ($dados as $dado)
                    <tr>
                    <td>
                        <a href="{{ url('/fazenda/' . $dado->id)}}" style="text-decoration:none;" >
                        {{$dado->nom_dispositivo}} 
                        </a>
                    </td>
                    <td>
                        <a href="{{ url('/fazenda/' . $dado->id)}}" style="text-decoration:none;" >
                        @if(!empty($dado->des_dispositivo))
                            {{$dado->des_dispositivo}}
                        @else
                            -
                        @endif
                        </a>
                    </td>
                    <td>
                        <a href="{{ url('/fazenda/' . $dado->id)}}" style="text-decoration:none;" >
                        {{$dado->num_latitude}} 
                        </a>
                    </td>
                    <td>
                        <a href="{{ url('/fazenda/' . $dado->id)}}" style="text-decoration:none;" >
                        {{$dado->num_longitude}} 
                        </a>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            
        </body>
	</html>