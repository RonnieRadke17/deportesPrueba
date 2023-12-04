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
    <h1>alumnos</h1>
    <h2>Periodo 2023-2024</h2>
    <ul>
        <li>
            <h3>alexis emmanuel</h3>
            <p>grupo 1</p>
            <a href="{{ url('carga/actualizar') }}">✐</a>
        </li>
        <li>
            <h3>Miguel Montoya Carpio</h3>
            <a href="{{ url('carga/actualizar') }}">✐</a>
        </li>
        
        

        <!-- Agrega más elementos según sea necesario -->
    </ul>
</div>

<div class="floating-btn-container">
    <button class="floating-btn">
        <a href="{{ url('carga/create') }}" class="text">+</a>
    </button>
</div>

@endsection
