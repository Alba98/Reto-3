@extends('layouts.default')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <h1 class="display-3 text-center">Ficha de segimiento</h1>
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-3">
                    <div class="card-title">Alumno</div>
                  </div>
                  <div class="col-md-9">
                    <div class="card-text">{{$alumno->persona->ape1}} {{$alumno->persona->ape2}}, {{$alumno->persona->nombre}}</div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="card-title">Empresa</div>
                  </div>
                  <div class="col-md-9">
                    <div class="card-text">{{$alumno->fichaDual->empresa->nombre}}</div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="card-title">Curso</div>
                  </div>
                  <div class="col-md-9">
                    <div class="card-text">{{$alumno->fichaDual->curso}}</div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="card-title">Tutor universidad</div>
                  </div>
                  <div class="col-md-9">
                    <div class="card-text">{{$alumno->fichaDual->tuniversidad->docente->persona->ape1}} {{$alumno->fichaDual->tuniversidad->docente->persona->ape2}}, {{$alumno->fichaDual->tuniversidad->docente->persona->nombre}}</div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="card-title">Tutor empresa</div>
                  </div>
                  <div class="col-md-9">
                    <div class="card-text">{{$alumno->fichaDual->tempresa->docente->persona->ape1}} {{$alumno->fichaDual->tempresa->docente->persona->ape2}}, {{$alumno->fichaDual->tempresa->docente->persona->nombre}}</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card mt-4">
                <div class="card-header">{{ __('Nueva ficha segimineto') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('fichaSeg.store') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="fecha" class="col-md-4 col-form-label text-md-end">{{ __('Fecha') }}</label>
                            <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="20/01/2023" name="fecha" id="fecha">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="asistentes" class="col-md-4 col-form-label text-md-end">{{ __('Asistentes') }}</label>
                            <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="FA, AL, FE" name="asistentes" id="asistentes">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="tipoT" class="col-md-4 col-form-label text-md-end">{{ __('Tipo de tutoria') }}</label>
                            <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="presencial, telefonica" name="tipoT" id="tipoT">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="objetivos" class="col-md-4 col-form-label text-md-end">{{ __('Objetivos de la tutoria') }}</label>
                            <div class="col-md-6">
                                    <input type="text" class="form-control" name="objetivos" id="objetivos">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="resumen" class="col-md-4 col-form-label text-md-end">{{ __('Resumen') }}</label>
                            <div class="col-md-6">
                                    <input type="text" class="form-control" name="resumen" id="resumen">
                            </div>
                        </div>
                        <input type="hidden" value="{{$alumno->fichaDual->id}}" name="id_ficha">
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