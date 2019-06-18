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
                    <th>Nome</th>
                    <th>Código</th>
                </thead>
                
                <tbody> 
                    @foreach ($dados as $dado)
                    <tr>
                    <td>
                        <a href="{{ url('/fazenda/' . $dado->id)}}" style="text-decoration:none;" >
                        {{$dado->nom_fazenda}} 
                        </a>
                    </td>
                    <td>
                        <a href="{{ url('/fazenda/' . $dado->id)}}" style="text-decoration:none;" >
                        @if(!empty($dado->cod_fazenda))
                            {{$dado->cod_fazenda}}
                        @else
                            -
                        @endif
                        </a>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            
        </body>
	</html>