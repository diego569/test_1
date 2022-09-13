@extends('layouts.plantilla')

@section('tittle', 'Show user')

@section('content')
 {{-- <h1>Bienvenido <?php //echo $curso->name; ?> </h1> --}} {{--  este "curso" tiene q venir de la misma variable q se usa en el controlador --}}

 <h1>Bienvenido(a) <?php echo $user->name; ?> </h1>
 <a href="{{route('users.index')}}">Volver a usuarios</a>
@endsection

