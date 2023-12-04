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
    <h1>asistencias</h1>
    <ul>
        <li>
            <h3>carrera atletismo</h3>
            <p>Jose Marquez morales</p>
            <p>Status:Asistió</p>
            <a href="{{ url('asistencia/actualizar') }}">✐</a>
        </li>
        <li>
            <h3>carrera atletismo</h3>
            <p>Martin perez morales</p>
            <p>Status:No asistió</p>
            <a href="{{ url('asistencia/actualizar') }}">✐</a>
        </li>
        
        

        <!-- Agrega más elementos según sea necesario -->
    </ul>
</div>

<div class="floating-btn-container">
    <button class="floating-btn">
        <a href="{{ url('asistencia/create') }}" class="text">+</a>
    </button>
</div>

@endsection
