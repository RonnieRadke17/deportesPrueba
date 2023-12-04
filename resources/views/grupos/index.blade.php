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
    <h1>Lista de grupos</h1>
    <ul>
        <li>
            <h3>1</h3>
            <a href="{{ url('grupos/edit') }}">✐</a>
        </li>
        <li>
            <h3>2</h3>
            <a href="{{ url('grupos/edit') }}">✐</a>
        </li>
        <li>
            <h3>3</h3>
            <a href="{{ url('grupos/edit') }}">✐</a>
        </li>
        <li>
            <h3>4</h3>
            <a href="{{ url('grupos/edit') }}">✐</a>
        </li>
        

        <!-- Agrega más elementos según sea necesario -->
    </ul>
</div>

<div class="floating-btn-container">
    <button class="floating-btn">
        <a href="{{ url('/grupos/create') }}" class="text">+</a>
    </button>
</div>

@endsection
