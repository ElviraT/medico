@extends('layouts.app')

@section('content')
    <h1>Crear nuevo permiso</h1>

    <form action="{{ route('permissions.store') }}" method="POST">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name">

        <label for="description">Descripción:</label>
        <textarea name="description" id="description"></textarea>

        <button type="submit">Crear permiso</button>
    </form>
@endsection
