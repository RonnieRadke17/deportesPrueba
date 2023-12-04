@extends('layouts.app')
@section('style1')
    {{ asset('css/login.css') }}
@endsection
@section('style2')
    {{ asset('css/calendar.css') }}
@endsection
@section('content')
<!--
aqui se registra la extracurricular 
pidiendo el nombre y la categoria de extracurricular-->
<!---datos en general de todos se puede usar para admin y externo sin moverle nada-->
<form class="form" method="GET" action="{{ url('/grupos') }}">
    @csrf
    <h2 class="form_title">Registrar grupo</h2>
    <div class="form_container">

    <div class="form_group">
            <input type="text" name="username" id="username" class="form_input" placeholder=" ">
            <label for="username" class="form_label">Nombre:</label>
            <span class="form_line"></span>
        </div>
        <input type="submit" class="form_submit" value="Registrar">
    </div>
</form>

@endsection
