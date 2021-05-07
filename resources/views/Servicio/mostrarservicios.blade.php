@extends('layouts.plantilla')
@section('content')
    <a href="{{route('createservice')}}">Crear Servicio</a>
    <ul>
        @foreach($servicios as $servicio)
            <li><a href="{{route('showservice',$servicio->id)}}">{{$servicio->servicename}}</a></li>
        @endforeach
    </ul>

@endsection

