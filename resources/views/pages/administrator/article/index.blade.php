@extends('layout.administrator.template')
@section('title', 'Artículos Blog')
@section('icon', 'fas fa-rss')

@section('actions')
    <a href="{{ route('admin.article.create') }}" class="button"><i class="fas fa-fw fa-plus"></i> Nuevo</a>
@endsection