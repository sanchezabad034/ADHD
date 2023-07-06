@extends('layout.master')

{{-- Metadata --}}
@section('title', config('app.name'))
@section('description', '')
@section('canonical', config('app.url'))
@section('class', 'home')
@section('content')
    <section class="section">
        <div class="container">
            <h2 class="h2 text-center mb-8">Cuestionario para detectar TDAH en niños</h2>
            <div>
                <login-form action="{{ url('registro-artistas') }}"
                    enctype="multipart/form-data"
                    inline-template
                    v-cloak
                >
                    <form>
                        <div class="form-group">
                            <div class="form-group__title" aria-description="Pregunta 1">
                                Pregunta 1: ¿Puedes mostrarme el color rojo?
                            </div>
                            <div class="form-control">
                                <img src="{{ asset('img/Circule_Red.jpg') }}">
                                <img src="">
                                <img src="">
                            </div>
                           
                        </div>
                        <div class="form-group">
                            <div class="form-group__title">
                                Pregunta 2: ¿Puedes mostrarme un color amarillo que este en la pantalla?
                            </div>
                           
                            <div class="col">
        
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group__title">
                                Pregunta 3: ¿Que sonido hace el gato?
                            </div>
                           
                            <div class="col">
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group__title">
                                Pregunta 4: ¿Que sonido hace un carro automovil?
                            </div>
                           
                            <div class="col">
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group__title">
                                Pregunta 5: ¿Cual es la escuela?
                            </div>
                           
                            <div class="col">
                               
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group__title">
                                Pregunta 6: ¿Cual de estos objetos es la televisión?
                            </div>
                           
                            <div class="col">
                               
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group__title">
                                Pregunta 7: ¿Cual es el circulo?
                            </div>
                           
                            <div class="col">
                               
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group__title">
                                Pregunta 8: ¿Cual carita esta feliz?
                            </div>
                           
                            <div class="col">
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group__title">
                                Pregunta 9: ¿Que animal esta en la imagen?
                            </div>
                           
                            <div class="col">
                               
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group__title">
                                Pregunta 10: ¿Cual de estos animales es un perro?
                            </div>
                           
                            <div class="col">
                                
                            </div>
                        </div>
                        <div class="text-center">
                            <form-button class="btn--success">
                                Registrar
                            </form-button>
                        </div>
                    </form>
                </login-form>
            </div>
        </div>
    </section>
@endsection