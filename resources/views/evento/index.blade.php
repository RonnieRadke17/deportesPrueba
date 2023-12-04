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
    <h1>eventos</h1>
    <ul>
        <li>
            <h3>Nombre:carreta atlética</h3>
            <p>Tipo:deportivo</p>
            <p>Fecha:23 de noviembre</p>
            <p>Hora: 5:00pm</p>
            <p>Lugar: Poliportivo</p>
            <p>Capacidad: 50</p>
            <a href="{{ url('evento/edit') }}">✐</a>
        </li>
        <!-- Agrega más elementos según sea necesario -->
    </ul>
</div>

<div class="floating-btn-container">
    <button class="floating-btn">
        <a href="{{ url('/evento/create') }}" class="text">+</a>
    </button>
</div>

@endsection
