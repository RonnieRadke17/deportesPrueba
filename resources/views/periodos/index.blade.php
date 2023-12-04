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
    <h1>Lista de periodos</h1>
    <ul>
        <li>
            <h3>Enero-abril</h3>
            <a href="{{ url('periodos/edit') }}">✐</a>
        </li>
        <li>
            <h3>Mayo-Agosto</h3>
            <a href="{{ url('periodos/edit') }}">✐</a>
        </li>
        <li>
            <h3>Septiembre-Diciembre</h3>
            <a href="{{ url('periodos/edit') }}">✐</a>
        </li>
        <li>
            <h3>Enero-Junio</h3>
            <a href="{{ url('periodos/edit') }}">✐</a>
        </li>
        

        <!-- Agrega más elementos según sea necesario -->
    </ul>
</div>

<div class="floating-btn-container">
    <button class="floating-btn">
        <a href="{{ url('/periodos/create') }}" class="text">+</a>
    </button>
</div>

@endsection
