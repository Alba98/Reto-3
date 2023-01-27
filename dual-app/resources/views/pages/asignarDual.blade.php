@extends('layouts.head')
@extends('layouts.sidebar')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Asignar Dual') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>
                            <div class="col-md-6">
                                    <select id="nombre" class="form-select">
                                      <option>Nombre alumno</option>
                                    </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="empresa" class="col-md-4 col-form-label text-md-end">{{ __('Empresa') }}</label>
                            <div class="col-md-6">
                                    <select id="empresa" class="form-select">
                                      <option>Nombre empresa</option>
                                    </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tuniversidad" class="col-md-4 col-form-label text-md-end">{{ __('Tutor Universidad') }}</label>
                            <div class="col-md-6">
                                    <select id="tuniversidad" class="form-select">
                                      <option>Nombre tutor universidad</option>
                                    </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tempresa" class="col-md-4 col-form-label text-md-end">{{ __('Tutor Empresa') }}</label>
                            <div class="col-md-6">
                                    <select id="tempresa" class="form-select">
                                      <option>Nombre tutor empresa</option>
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