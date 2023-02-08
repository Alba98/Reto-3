@extends('layouts.default')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="display-3 text-center">Dar de alta empresa</h1>
            <div class="card">
                <div class="card-header">{{ __('Nueva empresa') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('empresa.store') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">{{ __('Nombre empresa') }}</label>
                            <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Nombre de la empresa" name="nombre" id="nombre">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="cif" class="col-md-4 col-form-label text-md-end">{{ __('CIF') }}</label>
                            <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="CIF de la empresa" name="cif" id="cif">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="direccion" class="col-md-4 col-form-label text-md-end">{{ __('Dirección') }}</label>
                            <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Dirección de la empresa" name="direccion" id="direccion">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="sector" class="col-md-4 col-form-label text-md-end">{{ __('Sector') }}</label>
                            <div class="col-md-6">
                                    <select id="sector" name="sector" class="form-select">
                                      <option value="Industrial">Industrial</option>
                                      <option value="Informatica">Informatica</option>
                                      <option value="Comercio">Comercio</option>
                                      <option value="Hosteleria">Hosteleria</option>
                                      <option value="Sanidad">Sanidad</option>
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