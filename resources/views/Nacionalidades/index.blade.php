@extends('layout.layout')
@section('title','Nacionalidades')
@section('content')
    <h1 class="bg-primary text-white text-center">Nacionalidades</h1>
    <div class="row">
        <div class="col"><a class="btn-primary" href="{{url("nacionalidades/create")}}">Agregar Nacionalidad</a></div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <th>Id Nacionalidad</th>
                <th>Descripción</th>
                </thead>
                <tbody>
                @foreach($nacionalidades as $nacionalidad)
                    <tr>
                        <td>{{$nacionalidad->id_nacionalidad}}</td>
                        <td>{{$nacionalidad->nom_na}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection