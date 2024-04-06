@extends('layouts.app')

@section('content')
    <h1>Editar permiso</h1>

    <form action="{{ route('permissions.update', $permission) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="{{ $permission->name }}">

        <label for="description">Descripción:</label>
        <textarea name="description" id="description">{{ $permission->guard_name }}</textarea>

        <button type="submit">Actualizar permiso</button>
    </form>
@endsection
