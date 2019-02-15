@extends('layout.administrator.template')
@section('title', 'Usuarios')
@section('icon', 'fas fa-user')

@section('actions')
    <a href="{{ route('admin.user.create') }}" class="button"><i class="fas fa-fw fa-plus"></i> Nuevo</a>
@endsection