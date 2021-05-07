@extends('layouts.plantilla')
@section('content')
    <a href="{{route('showservices')}}">Volver atras</a><br>
    <h1>Servicio {{$servicio->servicename}}</h1>
    <a href="{{route('editservice',$servicio)}}">Editar</a><br>

@endsection
