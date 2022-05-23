@extends('layouts.masterEmpleado')
@section('title','Alquileres')
@section('content')
<!DOCTYPE html>
<html>

<head>
    <title>Alquileres</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <h1 class="text-center m-5">Alquileres</h1>
                @if(\Session::has('error'))
                <div class="alert alert-danger">{{ \Session::get('error') }}</div>
                @endif
            </div>
        </div>
        <table class="table" style="margin:auto">
            <tr>
                <th>Nº Alquiler</th>
                <th>Nº Cliente</th>
                <th>Nº Coche</th>
                <th>Precio Total</th>
                <th>Fecha de Contrato</th>
                <th>Fecha de Inicio</th>
                <th>Fecha de Fin</th>
                <th>Observación</th>
                <th>Estado</th>
                <th>Modificar</th>
            </tr>

            @foreach ($alquileres as $alquiler)
            <tr>
                <td>{{ $alquiler->id_Alquiler }}</td>
                <td>{{ $alquiler->id_Cliente }}</td>
                <td>{{ $alquiler->id_Coche }}</td>
                <td>{{ $alquiler->precio_total }}</td>
                <td>{{ $alquiler->fecha_contrato }}</td>
                <td>{{ $alquiler->fecha_inicio }}</td>
                <td>{{ $alquiler->fecha_fin }}</td>
                <td>{{ $alquiler->observacion }}</td>
                <td>{{ $alquiler->estado }}</td>
                <td><a class="btn btn-success" href="/empleado/modificaralquiler/{{ $alquiler->id_Alquiler }}">Editar</a></td>
            </tr>

            @endforeach
        </table>
    </div>
</body>

</html>
@endsection