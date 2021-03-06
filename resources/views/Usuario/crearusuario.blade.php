@extends('layouts.plantilla')
@section('content')
    <a href="{{route('showusers')}}">Mostrar Usuarios</a>
    <h1>Nuevo Usuario</h1>
    <form action="{{route('saveuser')}}" method="post">
        @csrf
        <label>
            Nombre de usuario:<br>
            <input type="text" name="username" value="{{old('username')}}"><br>
        </label>
        @error('username')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <label>
            Contraseña:<br>
            <input type="password" name="password" value="{{old('password')}}"><br>
        </label>
        @error('password')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <label>
            DNI:<br>
            <input type="text" name="dni" value="{{old('dni')}}"><br>
        </label>
        @error('dni')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <label>
            Direccion:<br>
            <input type="text" name="adress" value="{{old('adress')}}"><br>
        </label>
        @error('adress')
        <br>
        <small>*{{$message}}</small><br>
        <br>
        @enderror

        <label>
            Telefono:<br>
            <input type="text" name="phone" value="{{old('phone')}}"><br>
        </label>
        @error('phone')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <label>
            Nombres:<br>
            <input type="text" name="realname" value="{{old('realname')}}"><br>
        </label>
        @error('realname')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <label>
            Apellidos:<br>
            <input type="text" name="lastname" value="{{old('lastname')}}"><br>
        </label>
        @error('lastname')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <br><button type="submit">GUARDAR</button>
    </form>
@endsection

