@extends('layouts.plantilla')
@section('content')
    <a href="{{route('showservices')}}">Mostrar Servicios</a>
<h1>Nuevo Servicio</h1>
<form action="{{route('saveservice')}}" method="post">
    @csrf
    <label>
        Servicio:
        <input type="text" name="servicename" value="{{old('servicename')}}">
    </label>
    @error('servicename')
    <br>
        <small>*{{$message}}</small>
    <br>
    @enderror
    <button type="submit">GUARDAR</button>
</form>
@endsection

