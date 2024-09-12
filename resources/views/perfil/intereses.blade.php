@extends('layouts.app')

@section('title')
    Intereses
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="profile-card">
                    <div class="background"></div>
                    <img src="{{ asset('images/cami_square.png') }}" class="profile-img">
                    <br>
                    <div class="skills">
                        <h2 class="mt-1">Intereses <i class="bi bi-search"></i></h2>
                    </div>
                    <div class="actions mt-4">
                        <div class="action-item">
                            <i class="bi bi-palette"></i>
                            <h4>Innovación y Creatividad</h4>
                            <p>Me apasiona crear experiencias, desarrollando interfaces que combinan
                                funcionalidad y diseño responsive.
                            </p>
                        </div>
                        <div class="action-item">
                            <i class="bi bi-bookmark-check"></i>
                            <h4>Aprendizaje continuo</h4>
                            <p>Me apasiona el aprendizaje continuo y la mejora constante. Aprovecho cursos online, libros y
                                proyectos personales para mantenerme actualizada con las últimas tendencias, siempre
                                buscando nuevas formas de enriquecer mis habilidades y
                                conocimientos.</p>
                        </div>
                        <div class="action-item">
                            <i class="bi bi-people-fill"></i>
                            <h4>Impacto y Relevancia</h4>
                            <p>Me motiva el impacto positivo que la ingeniería de sistemas puede tener en la sociedad,
                                creando soluciones accesibles y relevantes para la comunidad.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
