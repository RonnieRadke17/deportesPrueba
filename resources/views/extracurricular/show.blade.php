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
    <h1>Lista de extracurriculares</h1>
    <h2>Periodo 2023-2024</h2>
    <ul>
        <li>
            <h3>Atletismo</h3>
            <p>Categoria: Deportiva</p>
        </li>
        <li>
            <h3>Tenis</h3>
            <p>Categoria: Deportiva</p>
        </li>
        <li>
            <h3>Fútbol</h3>
            <p>Categoria: Deportiva</p>
        </li>
        <li>
            <h3>Fútbol americano</h3>
            <p>Categoria: Deportiva</p>
        </li>
        <li>
            <h3>Basquetbol</h3>
            <p>Categoria: Deportiva</p>
        </li>
        <li>
            <h3>Voleibol</h3>
            <p>Categoria: Deportiva</p>
        </li>

        <!-- Agrega más elementos según sea necesario -->
    </ul>
</div>

<div class="floating-btn-container">
    <button class="floating-btn">
        <a href="{{ url('/extracurriculares/registrar') }}" class="text">+</a>
    </button>
</div>

@endsection
