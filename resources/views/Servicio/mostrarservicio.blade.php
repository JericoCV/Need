@extends('layouts.plantilla')
@section('content')
    <a href="{{route('showservices')}}">Volver atras</a><br>
    <h1>Servicio {{$servicio->servicename}}</h1>
    <a href="{{route('editservice',$servicio)}}">Editar</a><br>
    <form action="{{route('deleteservice',$servicio)}}" method="post">
        @csrf
        @method('delete')
        <button type="submit">ELIMINAR</button>
    </form>

@endsection
