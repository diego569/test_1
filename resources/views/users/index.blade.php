@extends('layouts.plantilla')

@section('tittle', 'Users')

@section('content')
<h1>Welcome everybody</h1>  
<a href="{{route('users.create')}}">Crear Usuario</a>
<ul>
    {{-- 
    @foreach ($users as $user)
        <li>{{$user}}</li>
    @endforeach 
    --}}
    @foreach ($users as $user)
        <li> <a href="{{route('users.show',$user->id)}}">{{$user->name}}</a></li>
    @endforeach
</ul>
{{$users->links()}}

@endsection
