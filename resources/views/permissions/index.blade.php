@extends('layouts.app')

@section('content')
    <h1>Permisos</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($permissions as $permission)
                <tr>
                    <td>{{ $permission->name }}</td>
                    <td>{{ $permission->guard_name }}</td>
                    <td>
                        <a href="{{ route('permissions.edit', $permission) }}">Editar</a>
                        <form action="{{ route('permissions.destroy', $permission) }}" method="POST"
                            style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('permissions.create') }}">Crear nuevo permiso</a>
@endsection
