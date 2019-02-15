@extends('layout.authentication.template')
@section('title', 'Iniciar sesión')

@section('content')
    {!! Form::open(['route' => 'login']) !!}
    <div class="box">
        <label class="label" for="email">Email</label>
        <input type="email" id="email" name="email" class="input">
    </div>
    <div class="box">
        <label class="label" for="password">Contraseña</label>
        <input type="password" id="password" name="password" class="input">
    </div>
    <div class="box">
        <input type="checkbox" name="remember"> Recordar contraseña
    </div>
    <div class="box action">
        <button type="submit" class="button">Ingresar</button>
    </div>
    {!! Form::close() !!}
@endsection