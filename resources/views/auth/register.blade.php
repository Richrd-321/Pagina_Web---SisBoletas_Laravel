@extends('layouts.app')

@section('title', 'Registro')

@section('content')


<div class="container">

    <!--    TITULO  -->
    <h1 class="fw-bold text-5xl text-center py-3">Registro</h1>

    <div class="row">

        <div class="col">
    
            <!--    REGISTRO  -->
            <form class="mt-8 space-y-6" action="{{ route('login.index') }}" method="POST">
                @csrf
                <div class="rounded-md shadow-sm ">
                    <div class="mb-4">
                        <!--    Nombre    -->
                        <label for="text" class="form-label">Nombre</label>
                        <input  class="form-control" name="name" type="text" placeholder="Tu Nombre">
                    </div>

                    <div class="mb-4">
                        <!--    Correo    -->
                        <label for="email-address" class="form-label">Correo electrónico</label>
                        <input class="form-control" name="email" type="email" autocomplete="email"
                            placeholder="Tu Correo">
                    </div>

                    <div class="mb-4">
                        <!--    Contraseña    -->
                        <label for="password" class="form-label">Contraseña</label>
                        <input name="password" type="password" autocomplete="current-password" class="form-control"
                            placeholder="Tu Contraseña">
                    </div>

                    <div class="mb-4">
                        <!--    Confirmar tu Contraseña    -->
                        <label for="password" class="form-label">Confirmar Contraseña</label>
                        <input name="c_password" type="password" autocomplete="current-password" class="form-control"
                            placeholder="Confirma Contraseña">
                    </div>

                </div>

                <!--        BOTON       -->
                <div class="d-grid">
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                    </div>
                </div>
               
        </div>
        </form>
    </div>
</div>
</div>


@endsection