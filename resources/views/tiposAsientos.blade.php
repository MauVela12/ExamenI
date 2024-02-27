<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipos de Asientos</title>
</head>
<body>
    <div class="container">        
    <h1>Mantenimiento Asientos</h1>
    <br>
    <a href="/ExamenI/public/tiposAsientos/agregarTipoDeAsiento" class="btn btn-success">Agregar Nuevo</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>Id Tipo Asiento</th>
                <th>Descripci&oacute;n</th>
                <th>Precio</th>
                <th>Estado</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <!--Muestra solo los registros con el estado A-->
            @foreach ($tiposDeAsientos as $tipoDeAsiento)
                @if ($tipoDeAsiento->estado == 'A')
                <tr>
                    <td>{{$tipoDeAsiento->idTipoAsiento}}</td>
                    <td>{{$tipoDeAsiento->descripcion}}</td>
                    <td>{{$tipoDeAsiento->precio}}</td>
                    <td>{{$tipoDeAsiento->estado}}</td>
                    <td>
                        <a>Editar</a>
                    </td>
                    <td>
                        <a>Eliminar</a>
                    </td>
                </tr>
                @endif
            @endforeach  
        </tbody>

    </table>
    </div>
</body>
</html>