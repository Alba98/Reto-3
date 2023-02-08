@extends('layouts.default')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="display-3 text-center">NUEVO GRADO</h1>
            <div class="card-header">{{ __('Nuevo grado') }}</div>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('grado.store') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>
                            <div class="col-md-6">
                                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del grado">
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Crear grado') }}
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