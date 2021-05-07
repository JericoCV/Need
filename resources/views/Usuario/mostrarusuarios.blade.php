@extends('layouts.plantilla')
@section('content')
    <a href="{{route('createuser')}}">Crear Usuario</a>
    <ul>
        @foreach($usuarios as $usuario)
            <li><a href="{{route('showuser',$usuario->id)}}">{{$usuario->username}}</a></li>
        @endforeach
    </ul>

@endsection

