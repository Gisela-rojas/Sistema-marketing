@extends('layouts.app')

@section('content')
    <h1>Agregar Cliente</h1>
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="telefono" placeholder="Teléfono" required>
        <input type="text" name="empresa" placeholder="Empresa" required>
        <input type="text" name="sector" placeholder="Sector" required>
        <select name="estado">
            <option value="activo">Activo</option>
            <option value="inactivo">Inactivo</option>
        </select>
        <button type="submit">Guardar</button>
    </form>
@endsection
