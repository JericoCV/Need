@extends('layouts.plantilla')
@section('content')
    <a href="{{route('showusers')}}">Volver atras</a><br>
    <h1>Hola {{$usuario->username}}</h1>
    <a href="{{route('edituser',$usuario)}}">Editar</a><br>
    <form action="{{route('deleteuser',$usuario)}}" method="post">
        @csrf
        @method('delete')
        <button type="submit">ELIMINAR</button>
    </form>

@endsection
