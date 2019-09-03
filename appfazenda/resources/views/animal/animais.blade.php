<!DOCTYPE html>
	<html lang="pt-BR" ng-app="listaContatos">
	    <head>
	        <title>Lista de Animais</title>
	
	        
	        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	    </head>
	    <body>           
            <div class="col-xs-12" style="text-align:center">
            
            <div>
                <h3>Lista de Animais</h3>
            </div>
            </div>
            @if($dados)
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
            @else
                <div  style="text-align: center;padding-top: 107px;">
                    Nenhum animal encontrado
                </div>
            @endif
            <div class="col-xs-12" style="padding-top: 24px;">
                <a href="{{ url('/dispositivo/1')}}" style="text-decoration:none;" >
                    Voltar
                </a>
            </div>
        </body>
	</html>