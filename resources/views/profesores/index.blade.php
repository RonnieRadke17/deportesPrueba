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
    <h1>Lista de Profesores</h1>
    <h2>Periodo 2023-2024</h2>
    <ul>
        <li>
            <h3>Zustaeta Labastina Martin</h3>
            <a href="{{ url('profesores/actualizar') }}">✐</a>
        </li>
        <li>
            <h3>Miguel Montoya Carpio</h3>
            <a href="{{ url('profesores/actualizar') }}">✐</a>
        </li>
        
        

        <!-- Agrega más elementos según sea necesario -->
    </ul>
</div>

<div class="floating-btn-container">
    <button class="floating-btn">
        <a href="{{ url('profesores/create') }}" class="text">+</a>
    </button>
</div>

@endsection
