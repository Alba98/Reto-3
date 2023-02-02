@extends('layouts.default')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="display-3 text-center">Dar de alta tutor empresa</h1>
            <div class="card">
                <div class="card-header">{{ __('Nuevo tutor de empresa') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('tempresa.store') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>
                            <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Nombre del tutor" name="nombre" id="nombre" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="ape1" class="col-md-4 col-form-label text-md-end">{{ __('Primer apellido') }}</label>
                            <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Primer apellido" name="ape1" id="ape1" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="ape2" class="col-md-4 col-form-label text-md-end">{{ __('Segundo apellido') }}</label>
                            <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Segundo apellido" name="ape2" id="ape2" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="dni" class="col-md-4 col-form-label text-md-end">{{ __('DNI') }}</label>
                            <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="DNI del tutor" name="dni" id="dni" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
                            <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Correo electronico" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="telefono" class="col-md-4 col-form-label text-md-end">{{ __('Teléfono') }}</label>
                            <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Número de teléfono" name="telefono" id="telefono" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="id_empresa" class="col-md-4 col-form-label text-md-end">{{ __('Empresa') }}</label>
                            <div class="col-md-6">
                                    <select id="id_empresa" name="id_empresa" class="form-select">
                                        @foreach ($empresas as $empresa)
                                        <option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
                                        @endforeach
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