@extends('layout.administrator.template')
@section('title', 'Usuarios')
@section('icon', 'fas fa-user')

@section('actions')
    <a href="{{ route('admin.user.create') }}" class="button"><i class="fas fa-fw fa-plus"></i> Nuevo</a>
@endsection

@section('content')
    <div class="frame">
        <div class="datatable">
            @if ($users)
                <table border="1">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Telefonos</th>
                        <th>Cumpleaños</th>
                        <th colspan="2">&nbsp</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="main picture">
                                <div class="image"></div>
                                <span class="strong principal">{{ $user->full_name }}</span>
                                <span>{{ $user->role }}</span>
                            </td>
                            <td>
                                <span>{{ $user->email }}</span>
                            </td>
                            <td>
                                <span>{{ $user->phone }}</span>
                                <span>{{ $user->mobile }}</span>
                            </td>
                            <td>
                                <span>{{ $user->birth_date }}</span>
                            </td>
                            <td>
                                <button class="button">Editar</button>
                            </td>
                            <td>
                                <button class="button">Borrar</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <div class="empty">
                    <span>No se encontraron registros</span>
                </div>
            @endif
        </div>
    </div>
@endsection