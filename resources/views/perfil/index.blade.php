@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="profile-card">
                    <div class="background"></div>
                    <img src="{{ asset('images/cami_square.png') }}" class="profile-img">
                    <div class="profile-info mt-7">
                        <div class="detail">
                            <br>
                            <h5>Camila Villamizar</h5>
                            <p>Ingeniería de Sistemas</p>
                            <p>Bucaramanga, Colombia</p>
                            <br>
                        </div>
                        <div class="rol">
                            <p>Rol actualmente <i class="bi bi-pencil-square"></i></p>
                            <p>Estudiante</p>
                            <p>camila12villamizar@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
