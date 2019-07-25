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

        <div style="margin-top: 16px;padding-left: 36px;border: 1px solid #827e7e9e;">
            @foreach ($dado->ativadores as $ati)
            <div style="border-bottom: 1px solid #000;width: fit-content;">
                <div>Atuador: {{$ati->nom_atuador}}</div>
                <div>Descrição: {{$ati->des_atuador}}</div>
                <div>Ativo: <input type="checkbox" name="vehicle" value="{{$ati->ind_ativo === 'A'}}" checked><br> {{$ati->ind_ativo}}</div>

                
            </div>
            @endforeach
        </div>
        <div>
        @if ($dado->ind_dispositivo == 'L')
            <a href="{{ url('/procurar')}}" style="text-decoration:none;" >
                Animais proximos
            </a>
        @else
            <a href="{{ url('/procurar')}}" style="text-decoration:none;" >
                Ativar dispositivo
            </a>
        @endif
        </div>
 
    </body>
</html>