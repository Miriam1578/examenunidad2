@extends('layout.layout');
@section('title','Agregar Empleados');
@section('content');

    <h1 class="bg-primary text-white text-center">Agregar Empledo</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("empleados")}}">Regresar</a></div>

    </div>

    <div class="row">
        <div class="col-4 offset-4">

            <form method="post" action="{{url("empleados")}}">
            @csrf

            <div class="from-group">
            <label for="exampleInputPassword1">Nombre de Empleado</label>

            <input type="text" class="from-control" name="nom_empleado" placegolder="empleado">


            <label for="exampleInputPassword1">Apellidos</label>
            <input type="text" class="from-control" name="ap_empleado" placegolder="empleado">

            <label for="exampleInputPassword1">Direccion</label>
            <input type="text" class="from-control" name="dir_empleado" placegolder="empleado">

            <label for="exampleInputPassword1">Codigo Postal</label>
            <input type="text" class="from-control" name="cp_empleado" placegolder="empleado">

            <label for="exampleInputPassword1">Telefono</label>
            <input type="text" class="from-control" name="tel_empleado" placegolder="empleado">

            <label for="exampleInputPassword1">Empresa</label>
            <input type="text" class="from-control" name="em_empleado" placegolder="empleado">

            <button type="submit" class="primary"> Aceptar</button>
        </form>
        </div>
    </div>

@endsection

