@extends('layouts.app')

@section('title')
    Habilidades
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
                        <h4>Habilidades blandas <i class="bi bi-stars"></i></h4>
                        <span class="badge">Liderazgo</span>
                        <span class="badge">Proactividad</span>
                        <span class="badge">Empatía</span>
                        <span class="badge">Organización</span>
                        <span class="badge">Autodisciplina</span>
                        <h4 class="mt-5">Habilidades técnicas <i class="bi bi-lightbulb"></i></h4>
                    </div>
                    <div class="actions mt-4">
                        <div class="action-item">
                            <i class="bi bi-window-plus"></i>
                            <h4>Front-end</h4>
                            <p>Disfruto creando interfaces intuitivas y dinámicas utilizando tecnologías como
                                <strong>JavaScript</strong> y <strong>React</strong>, siempre asegurándome de que el diseño
                                sea receptivo con <strong>Bootstrap</strong>. El diseño UI/UX me permite combinar
                                creatividad con funcionalidad.
                            </p>
                        </div>
                        <div class="action-item">
                            <i class="bi bi-database-check"></i>
                            <h4>Back-end</h4>
                            <p>El desarrollo del lado del servidor con <strong>Java</strong> y <strong>PHP</strong> me
                                permite estructurar la lógica que impulsa aplicaciones robustas. Me apasiona trabajar con
                                bases de datos como <strong>PostgreSQL</strong> o <strong>MongoDB</strong>, y construir APIs
                                eficientes con <strong>Laravel</strong>.</p>
                        </div>
                        <div class="action-item">
                            <i class="bi bi-git"></i>
                            <h4>DevOps</h4>
                            <p>Utilizo herramientas como <strong>Git</strong>, <strong>GitHub</strong>, y
                                <strong>Docker</strong> para asegurar un desarrollo continuo y la gestión efectiva de
                                proyectos. La automatización y la integración continua me permiten optimizar el proceso de
                                desarrollo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
