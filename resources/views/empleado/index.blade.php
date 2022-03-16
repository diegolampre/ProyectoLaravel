
@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="../../css/index.css">
<div class="container">



    @if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert">
    {{ Session::get('mensaje')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
    @endif



<a href="{{url('empleado/create')}}" class="btn btn-success">Registrar un nuevo empleado</a>
<br>
<br>


<table class="table  table-light table-hover">
    <thead class="thead-light border">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>DNI</th>
            <th>Acciones</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $empleado)
        <tr class="">
            <td>{{$empleado->id}}</td>
            <td>{{$empleado->Nombre}}</td>
            <td>{{$empleado->PrimerApellido}}</td>
            <td>{{$empleado->SegundoApellido}}</td>
            <td>{{$empleado->Email}}</td>
            <td>{{$empleado->Telefono}}</td>
            <td>{{$empleado->DNI}}</td>
            <td>
                <a href="{{ url('/empleado/'.$empleado->id.'/edit')}}" class="btn btn-primary ">Editar</a>
            </td>
            <td>
                <form action="{{ url('/empleado/'.$empleado->id)}}"class="d-inline" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" onclick="return confirm('¿Quieres borrar?')"class="btn btn-danger" value="Borrar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!! $empleados->links()!!}
</div>
@endsection