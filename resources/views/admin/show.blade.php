@extends('layouts.app')
@section('style1')
    {{ asset('css/cardImg.css') }}
@endsection

@section('content')
<section class="container ">
    <article>
        <div class=" row ">

            <div class="col-12 col-md-4">
                <a href="{{ url('/extracurriculares') }}" class="card-link">
                    <div class="card">
                        <div class="card-body">
                            <!-- Cambia la URL de la imagen según tu preferencia -->
                            <img src="https://repositorio.unellez.edu.ve/terepaima/portal/portal_imagen_contenido/1550203614_8b86e45973.jpg" class="card-img-top fixed-size-img img-fluid" alt="">
                            <h3 class="card-title">Extracurriculares</h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-4">
                <a href="{{ url('/categorias') }}" class="card-link">
                    <div class="card">
                        <div class="card-body">
                            <!-- Cambia la URL de la imagen según tu preferencia -->
                            <img src="https://legacy.plasticseurope.org/application/files/4415/1274/2611/5.8._ballgames_shutterstock_217271017_1.png" class="card-img-top fixed-size-img img-fluid" alt="">
                            <h3 class="card-title">categorias</h3>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-4">
                <a href="{{ url('/periodos') }}" class="card-link">
                    <div class="card">
                        <div class="card-body">
                            <!-- Cambia la URL de la imagen según tu preferencia -->
                            <img src="https://legacy.plasticseurope.org/application/files/4415/1274/2611/5.8._ballgames_shutterstock_217271017_1.png" class="card-img-top fixed-size-img img-fluid" alt="">
                            <h3 class="card-title">periodos</h3>
                        </div>
                    </div>
                </a>
            </div>



            
            
            <div class="col-12 col-md-4">
                <a href="{{ url('/grupos') }}" class="card-link">
                <div class="card">
                    <div class="card-body">
                        <img src="https://www.anahuac.mx/mexico/sites/default/files/styles/webp/public/noticias/Foro-virtual-El-deporte-dentro-y-fuera-de-la-cancha-2.jpg.webp?itok=MW_QtnIy" class="card-img-top" alt="">
                            <h3 class="card-title">Grupos</h3>
                    </div>
                </div>
                </a>
            </div>
        
           
            <div class="col-12 col-md-4">
                <a href="{{ url('/roles') }}" class="card-link">
                <div class="card">
                    <div class="card-body">
                        <img src="https://static.vecteezy.com/system/resources/previews/007/033/150/non_2x/group-of-users-people-icon-group-team-vector.jpg" class="card-img-top" alt="">
                            <h3 class="card-title">Roles Usuarios</h3>
                            
                    </div>
                </div>
                </a>
            </div>

            <div class="col-12 col-md-4">
                <a href="{{ url('/evento') }}" class="card-link">
                <div class="card">
                    <div class="card-body">
                        <img src="https://static.vecteezy.com/system/resources/previews/007/033/150/non_2x/group-of-users-people-icon-group-team-vector.jpg" class="card-img-top" alt="">
                            <h3 class="card-title">Evento</h3>
                            
                    </div>
                </div>
                </a>
            </div>


            <div class="col-12 col-md-4">
                <a href="{{ url('/carga') }}" class="card-link">
                <div class="card">
                    <div class="card-body">
                        <img src="https://static.vecteezy.com/system/resources/previews/007/033/150/non_2x/group-of-users-people-icon-group-team-vector.jpg" class="card-img-top" alt="">
                            <h3 class="card-title">Carga</h3>
                            
                    </div>
                </div>
                </a>
            </div>

            <div class="col-12 col-md-4">
                <a href="{{ url('/asistencia') }}" class="card-link">
                <div class="card">
                    <div class="card-body">
                        <img src="https://static.vecteezy.com/system/resources/previews/007/033/150/non_2x/group-of-users-people-icon-group-team-vector.jpg" class="card-img-top" alt="">
                            <h3 class="card-title">Asistencia</h3>
                            
                    </div>
                </div>
                </a>
            </div>

            <div class="col-12 col-md-4">
                <a href="{{ url('/profesores') }}" class="card-link">
                <div class="card">
                    <div class="card-body">
                        <img src="https://static.vecteezy.com/system/resources/previews/007/033/150/non_2x/group-of-users-people-icon-group-team-vector.jpg" class="card-img-top" alt="">
                            <h3 class="card-title">Profesores</h3>
                            
                    </div>
                </div>
                </a>
            </div>

        </div>
    </article>
 
 </section>
 <section>
@endsection
