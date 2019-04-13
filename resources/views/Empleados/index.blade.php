@extends('layout.layout')
@section('title','Empleados')
@section('content')


    <h1 clas="bg-primary text-white text-center">Empleados</h1>

    <div class="row">
        <div clas="col"><a class="btn-primary" href="{{url("empleados/create")}}" >Agregar empleado</a></div>
    </div>

    <div class="row">
        <div clas="col">
            <table class="table">
                <thead>
                <th>Id Empleado</th>
                <th>Nombre</th>
                <th>Apelllidos</th>
                <th>Direccion</th>
                <th>Codigo postal</th>
                <th>Telefono</th>
                <th>Empresa</th>
                </thead>
                <tbdoy>
                    @foreach($empleados as $empleado)
                        <tr>
                            <td>{{$empleado->id_empleado}}</td>
                            <td>{{$empleado->Nombre}}</td>
                            <td>{{$empleado->Apellido}}</td>
                            <td>{{$empleado->Direccion}}</td>
                            <td>{{$empleado->Codigo_Postal}}</td>
                            <td>{{$empleado->Telefono}}</td>
                            <td>{{$empleado->Empresa}}</td>
                        </tr>
                    @endforeach
                </tbdoy>
            </table>
        </div>
    </div>


@endsection
