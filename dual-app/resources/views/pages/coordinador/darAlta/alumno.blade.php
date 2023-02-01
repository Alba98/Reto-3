@extends('layouts.default')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="display-3 text-center">Dar de alta alumno</h1>
            <div class="card">
                <div class="card-header">{{ __('Nuevo alumno') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('alumno.store') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>
                            <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Nombre del alumno" name="nombre" id="nombre">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="ape1" class="col-md-4 col-form-label text-md-end">{{ __('Primer apellido') }}</label>
                            <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Primer apellido" name="ape1" id="ape1">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="ape2" class="col-md-4 col-form-label text-md-end">{{ __('Segundo apellido') }}</label>
                            <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Segundo apellido" name="ape2" id="ape2">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="dni" class="col-md-4 col-form-label text-md-end">{{ __('DNI') }}</label>
                            <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="DNI del alumno" name="dni" id="dni">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
                            <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Correo electronico" name="email" id="email">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="telefono" class="col-md-4 col-form-label text-md-end">{{ __('Teléfono') }}</label>
                            <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Número de teléfono" name="telefono" id="telefono">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="id_grado" class="col-md-4 col-form-label text-md-end">{{ __('Grado') }}</label>
                            <div class="col-md-6">
                                    <select id="id_grado" name="id_grado" class="form-select">
                                        @foreach ($grados as $grado)
                                        <option value="{{ $grado->id }}">{{ $grado->nombre }}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="curso" class="col-md-4 col-form-label text-md-end">{{ __('Curso') }}</label>
                            <div class="col-md-6">
                                    <select id="curso" name="curso" class="form-select">
                                      <option value="1º">1º</option>
                                      <option value="2º">2º</option>
                                      <option value="3º">3º</option>
                                      <option value="4º">4º</option>
                                    </select>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Guardar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop