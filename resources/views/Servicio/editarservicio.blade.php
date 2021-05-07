@extends('layouts.plantilla')
@section('content')
    <a href="{{route('showservices')}}">Mostrar Servicios</a>
    <h1>Editar Servicio</h1>
    <form action="{{route('updateservice',$servicio)}}" method="post">
        @csrf
        @method('put')
        <label>
            Servicio:
            <input type="text" name="servicename" value="{{$servicio->servicename}}">
        </label>
        <button type="submit">ACTUALIZAR</button>
    </form>
@endsection

