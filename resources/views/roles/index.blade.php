@extends('layouts.app')
@section('style1')
    {{ asset('css/list.css') }}
@endsection
@section('style2')
    {{ asset('css/floatingButton.css') }}
@endsection

@section('content')
<!--lista de extracurriculares y los botones de agregar editar y eliminar podrian ser
botones flotantes los 3-->
<div class="container" id="list">
    <h1>Lista de roles</h1>
    <h2>Periodo 2023-2024</h2>
    <ul>
        <li>
            <h3>Administrador</h3>
            <a href="{{ url('roles/edit') }}">✐</a>
        </li>
        <li>
            <h3>Alumno</h3>
            <a href="{{ url('/roles/edit') }}">✐</a>
        </li>
        <li>
            <h3>Profesor</h3>
            <a href="{{ url('/roles/edit') }}">✐</a>
        </li>
        <li>
            <h3>Externo</h3>
            <a href="{{ url('/roles/edit') }}">✐</a>
        </li>
        

        <!-- Agrega más elementos según sea necesario -->
    </ul>
</div>

<div class="floating-btn-container">
    <button class="floating-btn">
        <a href="{{ url('/roles/create') }}" class="text">+</a>
    </button>
</div>

@endsection
