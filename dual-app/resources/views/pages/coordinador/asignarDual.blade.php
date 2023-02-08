@extends('layouts.default')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <h1 class="display-3 text-center mt-4">Asignar Dual</h1>
        <div class="col-md-8 mt-4">
            <div class="card">
                <div class="card-header">{{ __('Asignar Dual') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('dual.store') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="id_alumno" class="col-md-4 col-form-label text-md-end">{{ __('Alumno') }}</label>
                            <div class="col-md-6">
                                    <select id="id_alumno" name="id_alumno" class="form-select">
                                      @foreach ($alumnos as $alumno)
                                        <option value="{{ $alumno->id }}">{{ $personas->where('id',$alumno->id_persona)->value('nombre') }} {{ $personas->where('id',$alumno->id_persona)->value('ape1') }} {{ $personas->where('id',$alumno->id_persona)->value('ape2') }}</option>
                                      @endforeach
                                    </select>
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
                        <div class="row mb-3">
                            <label for="id_tuniversidad" class="col-md-4 col-form-label text-md-end">{{ __('Tutor Universidad / Coordinador') }}</label>
                            <div class="col-md-6">
                                    <select id="id_tuniversidad" name="id_tuniversidad" class="form-select">
                                      @foreach ($tuniversidad as $tuniversidad)
                                        <option value="{{ $tuniversidad->docente->id }}">{{ $personas->where('id',$tuniversidad->docente->id_persona)->value('nombre') }}</option>
                                      @endforeach
                                      @foreach ($coordinadores as $coordinador)
                                        <option value="{{ $coordinador->docente->id }}">{{ $personas->where('id',$coordinador->docente->id_persona)->value('nombre') }}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="id_tempresa" class="col-md-4 col-form-label text-md-end">{{ __('Tutor Empresa') }}</label>
                            <div class="col-md-6">
                                    <select id="id_tempresa" name="id_tempresa" class="form-select">
                                      @foreach ($tempresa as $tempresa)
                                        <option value="{{ $tempresa->id }}">{{ $personas->where('id',$tempresa->id_persona)->value('nombre') }}</option>
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