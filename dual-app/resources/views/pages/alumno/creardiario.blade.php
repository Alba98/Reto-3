@extends('layouts.default')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <h1 class="display-3 text-center">Diario de aprendizaje</h1>
            <div class="card mt-4">
                <div class="card-header">{{ __('Nueva entrada en el diario') }}</div>
                <div class="card-body">
                    <form method="POST" action="">
                        @csrf
                        <div class="row mb-3">
                            <label for="periodo" class="col-md-4 col-form-label text-md-end">{{ __('Periodo') }}</label>
                            <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="20/01/2023 - 27/01/2023" name="periodo" id="periodo">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="actividades" class="col-md-4 col-form-label text-md-end">{{ __('Actividades desarrolladas') }}</label>
                            <div class="col-md-6">
                                    <input type="text" class="form-control" name="actividades" id="actividades">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="reflexion" class="col-md-4 col-form-label text-md-end">{{ __('Reflexión') }}</label>
                            <div class="col-md-6">
                                    <input type="text" class="form-control" name="reflexion" id="reflexion">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="problemas" class="col-md-4 col-form-label text-md-end">{{ __('Problemas o dificultades') }}</label>
                            <div class="col-md-6">
                                    <input type="text" class="form-control" name="problemas" id="problemas">
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <!-- <button type="submit" class="btn btn-primary">
                                    {{ __('Guardar') }}
                                </button> -->
                                <a href="{{ route('diarioAprendizaje') }}" class="btn btn-primary">Guardar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop