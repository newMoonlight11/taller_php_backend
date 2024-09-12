@extends('layouts.app')

@section('title')
    Metas
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
                        <h2 class="mt-1">Metas <i class="bi bi-bullseye"></i></h2>
                    </div>
                    <div class="actions mt-4">
                        <div class="action-item">
                            <i class="bi bi-credit-card-2-front"></i>
                            <h4>Especialización en tecnologías avanzadas</h4>
                            <p>Adquirir experiencia avanzada en tecnologías de vanguardia como inteligencia artificial,
                                machine learning, o blockchain, aplicadas al desarrollo.
                            </p>
                        </div>
                        <div class="action-item">
                            <i class="bi bi-patch-check"></i>
                            <h4>Obtener certificaciones</h4>
                            <p>Obtener certificaciones en áreas clave como desarrollo front-end, back-end, o DevOps para
                                validar y ampliar mis habilidades técnicas.</p>
                        </div>
                        <div class="action-item">
                            <i class="bi bi-phone-flip"></i>
                            <h4>Promover la inclusión digital</h4>
                            <p>Trabajar en soluciones web que mejoren la accesibilidad y usabilidad para usuarios con
                                diversas necesidades y habilidades.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
