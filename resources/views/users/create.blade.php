@extends('layouts.plantilla')

@section('tittle', 'Users create')

@section('content')
<h1>Crear cuenta</h1>  
<form action="{{route('users.store')}}" method="POST">
    @csrf
    
    <label>
        Nombre:
        <br><input type="text" name="name">
    </label>
    @error('name')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br>
    <label>
        Email:
        <br><input type="text" name="email">
    </label>
    @error('email')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br>
    <label>
        Contraseña:
        <br><input type="password" name="contraseña">
    </label>
    @error('contraseña')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br>
    <button type="submit">Enviar formulario</button>
</form>
@endsection

