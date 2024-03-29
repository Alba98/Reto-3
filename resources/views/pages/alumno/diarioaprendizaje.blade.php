@extends('layouts.default')
@section('content')
<div class="container mt-2">
    <h1 class="display-3 text-center mt-5">Diario aprendizaje</h1>
    <div class="padding mt-4">
        <div class="row container d-flex justify-content-center">
        <div class="col-lg-12 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-header">
                            <span>Registros diario aprendizaje</span>
                            <a href="{{ route('nuevaEntradaDiario') }}" class="btn btn-primary float-end">Nueva entrada</a>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table table-striped table-hover">
                              <thead>
                                <tr>
                                  <th><i class="bi bi-calendar-check"></i> Periodo</th>
                                  <th><i class="bi bi-globe"></i> Actividades desarrolladas</th>
                                  <th><i class="bi bi-graph-up"></i> Reflexión y progreso</th>
                                  <th><i class="bi bi-list-ul"></i> Problemas o dificultades</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($diarios as $diario)
                                <tr>
                                    <td>{{ ($diario->periodo) }}</td>
                                    <td>{{ ($diario->actividades) }}</td>
                                    <td>{{ ($diario->reflexion) }}</td>
                                    <td>{{ ($diario->problemas) }}</td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="card-footer">
                          <a href="{{ route('principal') }}" class="btn btn-primary">Volver <i class="bi bi-arrow-return-left"></i></a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
</div>
@stop