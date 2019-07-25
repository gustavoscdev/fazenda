<!DOCTYPE html>
	<html lang="pt-BR" ng-app="listaContatos">
	    <head>
	        <title>Lista de Animais</title>
	
	        
	        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	    </head>
	    <body>           
            <div class="col-xs-12" style="text-align:center">
                <h3>Lita de Animais</h3>
            </div>
            <table class="table">
                <thead>
                    <th>Nome</th>
                    <th>Etiqueta</th>
                    <th>Peso</th>
                    <th>Raça</th>
                </thead>
                
                <tbody>                 
                    @foreach ($dados as $dado)
                    <tr>
                    <td>
                        <a href="{{ url('/animal/' . $dado->id)}}" style="text-decoration:none;" >
                        {{$dado->nom_animal}} 
                        </a>
                    </td>
                    <td>
                        <a href="{{ url('/animal/' . $dado->id)}}" style="text-decoration:none;" >                        
                            {{$dado->rf_id}}                        
                        </a>
                    </td>
                    <td>
                        <a href="{{ url('/animal/' . $dado->id)}}" style="text-decoration:none;" >
                        {{$dado->num_peso}} 
                        </a>
                    </td>
                    <td>
                        <a href="{{ url('/animal/' . $dado->id)}}" style="text-decoration:none;" >
                        {{$dado->nom_raca}} 
                        </a>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            
        </body>
	</html>